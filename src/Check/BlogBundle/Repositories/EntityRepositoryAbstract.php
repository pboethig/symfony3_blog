<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17.07.16
 * Time: 07:49
 */

namespace Check\BlogBundle\Repositories;

use Check\BlogBundle\Entity\IEntity;
use Doctrine\ORM\EntityRepository;


/**
 * Class EntityRepositoryAbstract
 * @package Check\BlogBundle\Repositories
 */
class EntityRepositoryAbstract extends EntityRepository implements IEntityRepository
{
    /**
     * @param IEntity $entity
     * @param array $data
     * @return array
     */
    public function save(IEntity $entity, $data = array())
    {
        $properties = $this->getProperties($entity);

        foreach ($properties as $propertyName)
        {
            if (property_exists($data, $propertyName))
            {
                $setter = 'set' . ucfirst($propertyName);

                $entity->{$setter}($data->{$propertyName});
            }
        }

        $this->_em->persist($entity);

        $this->_em->flush();

        return array('success'=>array('id'=>$entity->getId()));
    }

    /**
     * @param IEntity $entity
     * @return mixed
     */
    public function getProperties(IEntity $entity)
    {
        $metadata = $this->_em->getClassMetadata(get_class($entity));

        $properties = [];

        foreach ($metadata->fieldMappings as $name=>$value)
        {
            $properties[] = $name;
        }

        return $properties;
    }
}