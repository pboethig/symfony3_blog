<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appTestUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appTestUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/replies')) {
            // replies
            if (rtrim($pathinfo, '/') === '/replies') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_replies;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'replies');
                }

                return array (  '_controller' => 'Check\\BlogBundle\\Controller\\RepliesController::indexAction',  '_route' => 'replies',);
            }
            not_replies:

            // replies_new
            if ($pathinfo === '/replies/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_replies_new;
                }

                return array (  '_controller' => 'Check\\BlogBundle\\Controller\\RepliesController::newAction',  '_route' => 'replies_new',);
            }
            not_replies_new:

            // replies_show
            if (preg_match('#^/replies/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_replies_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'replies_show')), array (  '_controller' => 'Check\\BlogBundle\\Controller\\RepliesController::showAction',));
            }
            not_replies_show:

            // replies_edit
            if (preg_match('#^/replies/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_replies_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'replies_edit')), array (  '_controller' => 'Check\\BlogBundle\\Controller\\RepliesController::editAction',));
            }
            not_replies_edit:

            // replies_delete
            if (preg_match('#^/replies/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_replies_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'replies_delete')), array (  '_controller' => 'Check\\BlogBundle\\Controller\\RepliesController::deleteAction',));
            }
            not_replies_delete:

            // replies_by_id_delete
            if (0 === strpos($pathinfo, '/replies/delete') && preg_match('#^/replies/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_replies_by_id_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'replies_by_id_delete')), array (  '_controller' => 'Check\\BlogBundle\\Controller\\RepliesController::deleteById',));
            }
            not_replies_by_id_delete:

            // replies_bulk_action
            if ($pathinfo === '/replies/bulk-action/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_replies_bulk_action;
                }

                return array (  '_controller' => 'Check\\BlogBundle\\Controller\\RepliesController::bulkAction',  '_route' => 'replies_bulk_action',);
            }
            not_replies_bulk_action:

        }

        if (0 === strpos($pathinfo, '/post')) {
            // post
            if (rtrim($pathinfo, '/') === '/post') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_post;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'post');
                }

                return array (  '_controller' => 'Check\\BlogBundle\\Controller\\PostController::indexAction',  '_route' => 'post',);
            }
            not_post:

            // post_new
            if ($pathinfo === '/post/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_post_new;
                }

                return array (  '_controller' => 'Check\\BlogBundle\\Controller\\PostController::newAction',  '_route' => 'post_new',);
            }
            not_post_new:

            // post_show
            if (preg_match('#^/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_post_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_show')), array (  '_controller' => 'Check\\BlogBundle\\Controller\\PostController::showAction',));
            }
            not_post_show:

            // post_edit
            if (preg_match('#^/post/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_post_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_edit')), array (  '_controller' => 'Check\\BlogBundle\\Controller\\PostController::editAction',));
            }
            not_post_edit:

            // post_delete
            if (preg_match('#^/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_post_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_delete')), array (  '_controller' => 'Check\\BlogBundle\\Controller\\PostController::deleteAction',));
            }
            not_post_delete:

            // post_by_id_delete
            if (0 === strpos($pathinfo, '/post/delete') && preg_match('#^/post/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_post_by_id_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_by_id_delete')), array (  '_controller' => 'Check\\BlogBundle\\Controller\\PostController::deleteById',));
            }
            not_post_by_id_delete:

            // post_bulk_action
            if ($pathinfo === '/post/bulk-action/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post_bulk_action;
                }

                return array (  '_controller' => 'Check\\BlogBundle\\Controller\\PostController::bulkAction',  '_route' => 'post_bulk_action',);
            }
            not_post_bulk_action:

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user
            if (rtrim($pathinfo, '/') === '/user') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user');
                }

                return array (  '_controller' => 'Check\\BlogBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
            }
            not_user:

            // user_new
            if ($pathinfo === '/user/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_new;
                }

                return array (  '_controller' => 'Check\\BlogBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }
            not_user_new:

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_show')), array (  '_controller' => 'Check\\BlogBundle\\Controller\\UserController::showAction',));
            }
            not_user_show:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_user_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_edit')), array (  '_controller' => 'Check\\BlogBundle\\Controller\\UserController::editAction',));
            }
            not_user_edit:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_delete')), array (  '_controller' => 'Check\\BlogBundle\\Controller\\UserController::deleteAction',));
            }
            not_user_delete:

            // user_by_id_delete
            if (0 === strpos($pathinfo, '/user/delete') && preg_match('#^/user/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_user_by_id_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_by_id_delete')), array (  '_controller' => 'Check\\BlogBundle\\Controller\\UserController::deleteById',));
            }
            not_user_by_id_delete:

            // user_bulk_action
            if ($pathinfo === '/user/bulk-action/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_bulk_action;
                }

                return array (  '_controller' => 'Check\\BlogBundle\\Controller\\UserController::bulkAction',  '_route' => 'user_bulk_action',);
            }
            not_user_bulk_action:

        }

        // check_blog_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'check_blog_homepage');
            }

            return array (  '_controller' => 'Check\\BlogBundle\\Controller\\DefaultController::indexAction',  '_route' => 'check_blog_homepage',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // check_blog_api_user_new
        if ($pathinfo === '/api/user') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_check_blog_api_user_new;
            }

            return array (  '_controller' => 'Check\\BlogBundle\\Controller\\Api\\UserController::newAction',  '_route' => 'check_blog_api_user_new',);
        }
        not_check_blog_api_user_new:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
