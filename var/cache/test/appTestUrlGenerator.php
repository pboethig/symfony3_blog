<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appTestUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appTestUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'replies' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Check\\BlogBundle\\Controller\\RepliesController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/replies/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'replies_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Check\\BlogBundle\\Controller\\RepliesController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/replies/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'replies_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Check\\BlogBundle\\Controller\\RepliesController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/replies',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'replies_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Check\\BlogBundle\\Controller\\RepliesController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/replies',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'replies_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Check\\BlogBundle\\Controller\\RepliesController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/replies',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'replies_by_id_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Check\\BlogBundle\\Controller\\RepliesController::deleteById',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/replies/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'replies_bulk_action' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Check\\BlogBundle\\Controller\\RepliesController::bulkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/replies/bulk-action/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'post' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Check\\BlogBundle\\Controller\\PostController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/post/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'post_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Check\\BlogBundle\\Controller\\PostController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/post/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'post_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Check\\BlogBundle\\Controller\\PostController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/post',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'post_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Check\\BlogBundle\\Controller\\PostController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/post',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'post_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Check\\BlogBundle\\Controller\\PostController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/post',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'post_by_id_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Check\\BlogBundle\\Controller\\PostController::deleteById',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/post/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'post_bulk_action' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Check\\BlogBundle\\Controller\\PostController::bulkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/post/bulk-action/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Check\\BlogBundle\\Controller\\UserController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Check\\BlogBundle\\Controller\\UserController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Check\\BlogBundle\\Controller\\UserController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Check\\BlogBundle\\Controller\\UserController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Check\\BlogBundle\\Controller\\UserController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_by_id_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Check\\BlogBundle\\Controller\\UserController::deleteById',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/user/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_bulk_action' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Check\\BlogBundle\\Controller\\UserController::bulkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/user/bulk-action/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'check_blog_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Check\\BlogBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'check_blog_api_user_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Check\\BlogBundle\\Controller\\Api\\UserController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/api/user',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
