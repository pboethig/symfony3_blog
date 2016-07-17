<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17.07.16
 * Time: 07:57
 */

namespace Check\BlogBundle\Repositories;


use Check\BlogBundle\Entity\IEntity;

interface IEntityRepository {

    /**
     * @param IEntity $entity
     * @return mixed
     */
    public function getProperties(IEntity $entity);


    public function save(IEntity $entity, $data = array());
}