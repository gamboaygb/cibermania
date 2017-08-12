<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/ajax')) {
            // homeajax
            if ('/ajax' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'homeajax');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AjaxController::indexAction',  '_route' => 'homeajax',);
            }

            // post_ajax
            if ('/ajax/list-post' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_post_ajax;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'post_ajax');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AjaxController::postAction',  '_route' => 'post_ajax',);
            }
            not_post_ajax:

        }

        // category_post_list
        if (0 === strpos($pathinfo, '/category') && preg_match('#^/category/(?P<slug>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'category_post_list');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_post_list')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::listCategoryAction',));
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\FrontController::indexAction',  '_route' => 'homepage',);
        }

        // search
        if ('/seach' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'search');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\FrontController::searchAction',  '_route' => 'search',);
        }

        // pagina
        if (preg_match('#^/(?P<nombrePagina>ayuda|privacidad|sobre_nosotros|politicas)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pagina');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pagina')), array (  'nombrePagina' => 'ayuda',  '_controller' => 'AppBundle\\Controller\\FrontController::pageAction',));
        }

        // view_post
        if (0 === strpos($pathinfo, '/post') && preg_match('#^/post/(?P<slug>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'view_post');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'view_post')), array (  '_controller' => 'AppBundle\\Controller\\PostController::singlePostAction',));
        }

        // edit_profile
        if ('/profile/edit' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::profileEditAction',  '_route' => 'edit_profile',);
        }

        // post_comment
        if ('/insert/comment' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'post_comment');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\PostController::postCommentAction',  '_route' => 'post_comment',);
        }

        // my_post
        if ('/my-post-list' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'my_post');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\PostController::myPostListAction',  '_route' => 'my_post',);
        }

        // create_post
        if ('/create-post' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'create_post');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\PostController::createPostAction',  '_route' => 'create_post',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // user_login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'user_login',);
            }

            // user_login_check
            if ('/login_check' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'user_login_check',);
            }

        }

        // user_logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'user_logout',);
        }

        // create_account
        if ('/signup' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::createAccountAction',  '_route' => 'create_account',);
        }

        // activate
        if (0 === strpos($pathinfo, '/token') && preg_match('#^/token/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'activate')), array (  '_controller' => 'AppBundle\\Controller\\SecurityController::activateUserAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
