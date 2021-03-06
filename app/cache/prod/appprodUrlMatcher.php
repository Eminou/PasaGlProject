<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // _login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\SecuredController::loginAction',  '_route' => '_login',);
        }

        // _security_check
        if ($pathinfo === '/login_check') {
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // pasa_requirement_secured_redirect
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'pasa_requirement_secured_redirect');
            }
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\SecuredController::redirectAction',  '_route' => 'pasa_requirement_secured_redirect',);
        }

        // _logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_logout',);
        }

        // default
        if (rtrim($pathinfo, '/') === '/default') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'default');
            }
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\DefaultController::indexAction',  '_route' => 'default',);
        }

        // collaboratorfront
        if (rtrim($pathinfo, '/') === '/collaboratorfront') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'collaboratorfront');
            }
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorFrontController::indexAction',  '_route' => 'collaboratorfront',);
        }

        // collaboratorfront_exigency
        if ($pathinfo === '/collaboratorfront/exigency') {
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorFrontController::exigency_indexAction',  '_route' => 'collaboratorfront_exigency',);
        }

        // collaboratorfront_exigency_show
        if (0 === strpos($pathinfo, '/collaboratorfront/exigency') && preg_match('#^/collaboratorfront/exigency/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorFrontController::exigency_showAction',)), array('_route' => 'collaboratorfront_exigency_show'));
        }

        // collaboratorfront_exigency_new
        if ($pathinfo === '/collaboratorfront/exigency/new') {
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorFrontController::exigency_newAction',  '_route' => 'collaboratorfront_exigency_new',);
        }

        // collaboratorfront_exigency_create
        if ($pathinfo === '/collaboratorfront/exigency/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_collaboratorfront_exigency_create;
            }
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorFrontController::exigency_createAction',  '_route' => 'collaboratorfront_exigency_create',);
        }
        not_collaboratorfront_exigency_create:

        // collaboratorfront_exigency_edit
        if (0 === strpos($pathinfo, '/collaboratorfront/exigency') && preg_match('#^/collaboratorfront/exigency/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorFrontController::exigency_editAction',)), array('_route' => 'collaboratorfront_exigency_edit'));
        }

        // collaboratorfront_exigency_update
        if (0 === strpos($pathinfo, '/collaboratorfront/exigency') && preg_match('#^/collaboratorfront/exigency/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_collaboratorfront_exigency_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorFrontController::exigency_updateAction',)), array('_route' => 'collaboratorfront_exigency_update'));
        }
        not_collaboratorfront_exigency_update:

        // collaboratorfront_exigency_delete
        if (0 === strpos($pathinfo, '/collaboratorfront/exigency') && preg_match('#^/collaboratorfront/exigency/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_collaboratorfront_exigency_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorFrontController::exigency_deleteAction',)), array('_route' => 'collaboratorfront_exigency_delete'));
        }
        not_collaboratorfront_exigency_delete:

        // manager
        if (rtrim($pathinfo, '/') === '/manager') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'manager');
            }
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerController::indexAction',  '_route' => 'manager',);
        }

        // manager_show
        if (0 === strpos($pathinfo, '/manager') && preg_match('#^/manager/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerController::showAction',)), array('_route' => 'manager_show'));
        }

        // manager_new
        if ($pathinfo === '/manager/new') {
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerController::newAction',  '_route' => 'manager_new',);
        }

        // manager_create
        if ($pathinfo === '/manager/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_manager_create;
            }
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerController::createAction',  '_route' => 'manager_create',);
        }
        not_manager_create:

        // manager_edit
        if (0 === strpos($pathinfo, '/manager') && preg_match('#^/manager/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerController::editAction',)), array('_route' => 'manager_edit'));
        }

        // manager_update
        if (0 === strpos($pathinfo, '/manager') && preg_match('#^/manager/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_manager_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerController::updateAction',)), array('_route' => 'manager_update'));
        }
        not_manager_update:

        // manager_delete
        if (0 === strpos($pathinfo, '/manager') && preg_match('#^/manager/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_manager_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerController::deleteAction',)), array('_route' => 'manager_delete'));
        }
        not_manager_delete:

        // exigency
        if (rtrim($pathinfo, '/') === '/exigency') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'exigency');
            }
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ExigencyController::indexAction',  '_route' => 'exigency',);
        }

        // exigency_show
        if (0 === strpos($pathinfo, '/exigency') && preg_match('#^/exigency/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ExigencyController::showAction',)), array('_route' => 'exigency_show'));
        }

        // exigency_new
        if ($pathinfo === '/exigency/new') {
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ExigencyController::newAction',  '_route' => 'exigency_new',);
        }

        // exigency_create
        if ($pathinfo === '/exigency/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_exigency_create;
            }
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ExigencyController::createAction',  '_route' => 'exigency_create',);
        }
        not_exigency_create:

        // exigency_edit
        if (0 === strpos($pathinfo, '/exigency') && preg_match('#^/exigency/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ExigencyController::editAction',)), array('_route' => 'exigency_edit'));
        }

        // exigency_update
        if (0 === strpos($pathinfo, '/exigency') && preg_match('#^/exigency/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_exigency_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ExigencyController::updateAction',)), array('_route' => 'exigency_update'));
        }
        not_exigency_update:

        // exigency_delete
        if (0 === strpos($pathinfo, '/exigency') && preg_match('#^/exigency/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_exigency_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ExigencyController::deleteAction',)), array('_route' => 'exigency_delete'));
        }
        not_exigency_delete:

        // progression
        if (rtrim($pathinfo, '/') === '/progression') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'progression');
            }
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ProgressionController::indexAction',  '_route' => 'progression',);
        }

        // progression_show
        if (0 === strpos($pathinfo, '/progression') && preg_match('#^/progression/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ProgressionController::showAction',)), array('_route' => 'progression_show'));
        }

        // progression_new
        if ($pathinfo === '/progression/new') {
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ProgressionController::newAction',  '_route' => 'progression_new',);
        }

        // progression_create
        if ($pathinfo === '/progression/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_progression_create;
            }
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ProgressionController::createAction',  '_route' => 'progression_create',);
        }
        not_progression_create:

        // progression_edit
        if (0 === strpos($pathinfo, '/progression') && preg_match('#^/progression/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ProgressionController::editAction',)), array('_route' => 'progression_edit'));
        }

        // progression_update
        if (0 === strpos($pathinfo, '/progression') && preg_match('#^/progression/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_progression_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ProgressionController::updateAction',)), array('_route' => 'progression_update'));
        }
        not_progression_update:

        // progression_delete
        if (0 === strpos($pathinfo, '/progression') && preg_match('#^/progression/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_progression_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ProgressionController::deleteAction',)), array('_route' => 'progression_delete'));
        }
        not_progression_delete:

        // feature
        if (rtrim($pathinfo, '/') === '/feature') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'feature');
            }
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\FeatureController::indexAction',  '_route' => 'feature',);
        }

        // feature_show
        if (0 === strpos($pathinfo, '/feature') && preg_match('#^/feature/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\FeatureController::showAction',)), array('_route' => 'feature_show'));
        }

        // feature_new
        if ($pathinfo === '/feature/new') {
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\FeatureController::newAction',  '_route' => 'feature_new',);
        }

        // feature_create
        if ($pathinfo === '/feature/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_feature_create;
            }
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\FeatureController::createAction',  '_route' => 'feature_create',);
        }
        not_feature_create:

        // feature_edit
        if (0 === strpos($pathinfo, '/feature') && preg_match('#^/feature/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\FeatureController::editAction',)), array('_route' => 'feature_edit'));
        }

        // feature_update
        if (0 === strpos($pathinfo, '/feature') && preg_match('#^/feature/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_feature_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\FeatureController::updateAction',)), array('_route' => 'feature_update'));
        }
        not_feature_update:

        // feature_delete
        if (0 === strpos($pathinfo, '/feature') && preg_match('#^/feature/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_feature_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\FeatureController::deleteAction',)), array('_route' => 'feature_delete'));
        }
        not_feature_delete:

        // project
        if (rtrim($pathinfo, '/') === '/project') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'project');
            }
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ProjectController::indexAction',  '_route' => 'project',);
        }

        // project_show
        if (0 === strpos($pathinfo, '/project') && preg_match('#^/project/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ProjectController::showAction',)), array('_route' => 'project_show'));
        }

        // project_new
        if ($pathinfo === '/project/new') {
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ProjectController::newAction',  '_route' => 'project_new',);
        }

        // project_create
        if ($pathinfo === '/project/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_project_create;
            }
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ProjectController::createAction',  '_route' => 'project_create',);
        }
        not_project_create:

        // project_edit
        if (0 === strpos($pathinfo, '/project') && preg_match('#^/project/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ProjectController::editAction',)), array('_route' => 'project_edit'));
        }

        // project_update
        if (0 === strpos($pathinfo, '/project') && preg_match('#^/project/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_project_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ProjectController::updateAction',)), array('_route' => 'project_update'));
        }
        not_project_update:

        // project_delete
        if (0 === strpos($pathinfo, '/project') && preg_match('#^/project/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_project_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ProjectController::deleteAction',)), array('_route' => 'project_delete'));
        }
        not_project_delete:

        // managerfront
        if (rtrim($pathinfo, '/') === '/managerfront') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'managerfront');
            }
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::indexAction',  '_route' => 'managerfront',);
        }

        // managerfront_project
        if ($pathinfo === '/managerfront/project') {
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::project_indexAction',  '_route' => 'managerfront_project',);
        }

        // managerfront_project_show
        if (0 === strpos($pathinfo, '/managerfront/project') && preg_match('#^/managerfront/project/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::project_showAction',)), array('_route' => 'managerfront_project_show'));
        }

        // managerfront_project_new
        if ($pathinfo === '/managerfront/project/new') {
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::project_newAction',  '_route' => 'managerfront_project_new',);
        }

        // managerfront_project_create
        if ($pathinfo === '/managerfront/project/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_managerfront_project_create;
            }
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::project_createAction',  '_route' => 'managerfront_project_create',);
        }
        not_managerfront_project_create:

        // managerfront_project_edit
        if (0 === strpos($pathinfo, '/managerfront/project') && preg_match('#^/managerfront/project/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::project_editAction',)), array('_route' => 'managerfront_project_edit'));
        }

        // managerfront_project_update
        if (0 === strpos($pathinfo, '/managerfront/project') && preg_match('#^/managerfront/project/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_managerfront_project_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::project_updateAction',)), array('_route' => 'managerfront_project_update'));
        }
        not_managerfront_project_update:

        // managerfront_project_delete
        if (0 === strpos($pathinfo, '/managerfront/project') && preg_match('#^/managerfront/project/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_managerfront_project_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::project_deleteAction',)), array('_route' => 'managerfront_project_delete'));
        }
        not_managerfront_project_delete:

        // managerfront_collaborator
        if ($pathinfo === '/managerfront/collaborator') {
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::collaborator_indexAction',  '_route' => 'managerfront_collaborator',);
        }

        // managerfront_collaborator_show
        if (0 === strpos($pathinfo, '/managerfront/collaborator') && preg_match('#^/managerfront/collaborator/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::collaborator_showAction',)), array('_route' => 'managerfront_collaborator_show'));
        }

        // managerfront_collaborator_new
        if ($pathinfo === '/managerfront/collaborator/new') {
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::collaborator_newAction',  '_route' => 'managerfront_collaborator_new',);
        }

        // managerfront_collaborator_create
        if ($pathinfo === '/managerfront/collaborator/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_managerfront_collaborator_create;
            }
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::collaborator_createAction',  '_route' => 'managerfront_collaborator_create',);
        }
        not_managerfront_collaborator_create:

        // managerfront_collaborator_edit
        if (0 === strpos($pathinfo, '/managerfront/collaborator') && preg_match('#^/managerfront/collaborator/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::collaborator_editAction',)), array('_route' => 'managerfront_collaborator_edit'));
        }

        // managerfront_collaborator_update
        if (0 === strpos($pathinfo, '/managerfront/collaborator') && preg_match('#^/managerfront/collaborator/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_managerfront_collaborator_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::collaborator_updateAction',)), array('_route' => 'managerfront_collaborator_update'));
        }
        not_managerfront_collaborator_update:

        // managerfront_collaborator_delete
        if (0 === strpos($pathinfo, '/managerfront/collaborator') && preg_match('#^/managerfront/collaborator/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_managerfront_collaborator_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::collaborator_deleteAction',)), array('_route' => 'managerfront_collaborator_delete'));
        }
        not_managerfront_collaborator_delete:

        // managerfront_exigency
        if ($pathinfo === '/managerfront/exigency') {
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::exigency_indexAction',  '_route' => 'managerfront_exigency',);
        }

        // managerfront_exigency_show
        if (0 === strpos($pathinfo, '/managerfront/exigency') && preg_match('#^/managerfront/exigency/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::exigency_showAction',)), array('_route' => 'managerfront_exigency_show'));
        }

        // managerfront_exigency_new
        if ($pathinfo === '/managerfront/exigency/new') {
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::exigency_newAction',  '_route' => 'managerfront_exigency_new',);
        }

        // managerfront_exigency_create
        if ($pathinfo === '/managerfront/exigency/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_managerfront_exigency_create;
            }
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::exigency_createAction',  '_route' => 'managerfront_exigency_create',);
        }
        not_managerfront_exigency_create:

        // managerfront_exigency_edit
        if (0 === strpos($pathinfo, '/managerfront/exigency') && preg_match('#^/managerfront/exigency/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::exigency_editAction',)), array('_route' => 'managerfront_exigency_edit'));
        }

        // managerfront_exigency_update
        if (0 === strpos($pathinfo, '/managerfront/exigency') && preg_match('#^/managerfront/exigency/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_managerfront_exigency_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::exigency_updateAction',)), array('_route' => 'managerfront_exigency_update'));
        }
        not_managerfront_exigency_update:

        // managerfront_exigency_delete
        if (0 === strpos($pathinfo, '/managerfront/exigency') && preg_match('#^/managerfront/exigency/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_managerfront_exigency_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::exigency_deleteAction',)), array('_route' => 'managerfront_exigency_delete'));
        }
        not_managerfront_exigency_delete:

        // collaborator
        if (rtrim($pathinfo, '/') === '/collaborator') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'collaborator');
            }
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorController::indexAction',  '_route' => 'collaborator',);
        }

        // collaborator_show
        if (0 === strpos($pathinfo, '/collaborator') && preg_match('#^/collaborator/(?P<id>[^/]+?)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorController::showAction',)), array('_route' => 'collaborator_show'));
        }

        // collaborator_new
        if ($pathinfo === '/collaborator/new') {
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorController::newAction',  '_route' => 'collaborator_new',);
        }

        // collaborator_create
        if ($pathinfo === '/collaborator/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_collaborator_create;
            }
            return array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorController::createAction',  '_route' => 'collaborator_create',);
        }
        not_collaborator_create:

        // collaborator_edit
        if (0 === strpos($pathinfo, '/collaborator') && preg_match('#^/collaborator/(?P<id>[^/]+?)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorController::editAction',)), array('_route' => 'collaborator_edit'));
        }

        // collaborator_update
        if (0 === strpos($pathinfo, '/collaborator') && preg_match('#^/collaborator/(?P<id>[^/]+?)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_collaborator_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorController::updateAction',)), array('_route' => 'collaborator_update'));
        }
        not_collaborator_update:

        // collaborator_delete
        if (0 === strpos($pathinfo, '/collaborator') && preg_match('#^/collaborator/(?P<id>[^/]+?)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_collaborator_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorController::deleteAction',)), array('_route' => 'collaborator_delete'));
        }
        not_collaborator_delete:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
