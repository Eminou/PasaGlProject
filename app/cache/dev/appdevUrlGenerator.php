<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_assetic_204476b' => true,
       '_assetic_204476b_0' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       '_login' => true,
       '_security_check' => true,
       'pasa_requirement_secured_redirect' => true,
       '_logout' => true,
       'default' => true,
       'collaboratorfront' => true,
       'collaboratorfront_exigency' => true,
       'collaboratorfront_exigency_show' => true,
       'collaboratorfront_exigency_new' => true,
       'collaboratorfront_exigency_create' => true,
       'collaboratorfront_exigency_edit' => true,
       'collaboratorfront_exigency_update' => true,
       'collaboratorfront_exigency_delete' => true,
       'collaboratorfront_progression' => true,
       'collaboratorfront_progression_show' => true,
       'collaboratorfront_progression_new' => true,
       'collaboratorfront_progression_create' => true,
       'collaboratorfront_progression_edit' => true,
       'collaboratorfront_progression_update' => true,
       'collaboratorfront_progression_delete' => true,
       'manager' => true,
       'manager_show' => true,
       'manager_new' => true,
       'manager_create' => true,
       'manager_edit' => true,
       'manager_update' => true,
       'manager_delete' => true,
       'exigency' => true,
       'exigency_show' => true,
       'exigency_new' => true,
       'exigency_create' => true,
       'exigency_edit' => true,
       'exigency_update' => true,
       'exigency_delete' => true,
       'progression' => true,
       'progression_show' => true,
       'progression_new' => true,
       'progression_create' => true,
       'progression_edit' => true,
       'progression_update' => true,
       'progression_delete' => true,
       'feature' => true,
       'feature_show' => true,
       'feature_new' => true,
       'feature_create' => true,
       'feature_edit' => true,
       'feature_update' => true,
       'feature_delete' => true,
       'project' => true,
       'project_show' => true,
       'project_new' => true,
       'project_create' => true,
       'project_edit' => true,
       'project_update' => true,
       'project_delete' => true,
       'managerfront' => true,
       'managerfront_project' => true,
       'managerfront_project_show' => true,
       'managerfront_project_new' => true,
       'managerfront_project_create' => true,
       'managerfront_project_edit' => true,
       'managerfront_project_update' => true,
       'managerfront_project_delete' => true,
       'managerfront_collaborator' => true,
       'managerfront_collaborator_show' => true,
       'managerfront_collaborator_new' => true,
       'managerfront_collaborator_create' => true,
       'managerfront_collaborator_edit' => true,
       'managerfront_collaborator_update' => true,
       'managerfront_collaborator_delete' => true,
       'managerfront_exigency' => true,
       'managerfront_exigency_show' => true,
       'managerfront_exigency_new' => true,
       'managerfront_exigency_create' => true,
       'managerfront_exigency_edit' => true,
       'managerfront_exigency_update' => true,
       'managerfront_exigency_delete' => true,
       'managerfront_feature' => true,
       'managerfront_feature_show' => true,
       'managerfront_feature_new' => true,
       'managerfront_feature_create' => true,
       'managerfront_feature_edit' => true,
       'managerfront_feature_update' => true,
       'managerfront_feature_delete' => true,
       'collaborator' => true,
       'collaborator_show' => true,
       'collaborator_new' => true,
       'collaborator_create' => true,
       'collaborator_edit' => true,
       'collaborator_update' => true,
       'collaborator_delete' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_assetic_204476bRouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '204476b',  'pos' => NULL,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/204476b.css',  ),));
    }

    private function get_assetic_204476b_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '204476b',  'pos' => 0,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/204476b_part_1_main_1.css',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function get_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\SecuredController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login',  ),));
    }

    private function get_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\SecuredController::securityCheckAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_check',  ),));
    }

    private function getpasa_requirement_secured_redirectRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\SecuredController::redirectAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function get_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\SecuredController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getdefaultRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/default/',  ),));
    }

    private function getcollaboratorfrontRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorFrontController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/collaboratorfront/',  ),));
    }

    private function getcollaboratorfront_exigencyRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorFrontController::exigency_indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/collaboratorfront/exigency',  ),));
    }

    private function getcollaboratorfront_exigency_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorFrontController::exigency_showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/collaboratorfront/exigency',  ),));
    }

    private function getcollaboratorfront_exigency_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorFrontController::exigency_newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/collaboratorfront/exigency/new',  ),));
    }

    private function getcollaboratorfront_exigency_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorFrontController::exigency_createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/collaboratorfront/exigency/create',  ),));
    }

    private function getcollaboratorfront_exigency_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorFrontController::exigency_editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/collaboratorfront/exigency',  ),));
    }

    private function getcollaboratorfront_exigency_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorFrontController::exigency_updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/collaboratorfront/exigency',  ),));
    }

    private function getcollaboratorfront_exigency_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorFrontController::exigency_deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/collaboratorfront/exigency',  ),));
    }

    private function getcollaboratorfront_progressionRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorFrontController::progression_indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/collaboratorfront/progression',  ),));
    }

    private function getcollaboratorfront_progression_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorFrontController::progression_showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/collaboratorfront/progression',  ),));
    }

    private function getcollaboratorfront_progression_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorFrontController::progression_newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/collaboratorfront/progression/new',  ),));
    }

    private function getcollaboratorfront_progression_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorFrontController::progression_createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/collaboratorfront/progression/create',  ),));
    }

    private function getcollaboratorfront_progression_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorFrontController::progression_editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/collaboratorfront/progression',  ),));
    }

    private function getcollaboratorfront_progression_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorFrontController::collaborator_updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/collaboratorfront/progression',  ),));
    }

    private function getcollaboratorfront_progression_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorFrontController::collaborator_deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/collaboratorfront/progression',  ),));
    }

    private function getmanagerRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/manager/',  ),));
    }

    private function getmanager_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/manager',  ),));
    }

    private function getmanager_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/manager/new',  ),));
    }

    private function getmanager_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/manager/create',  ),));
    }

    private function getmanager_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/manager',  ),));
    }

    private function getmanager_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/manager',  ),));
    }

    private function getmanager_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/manager',  ),));
    }

    private function getexigencyRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ExigencyController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/exigency/',  ),));
    }

    private function getexigency_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ExigencyController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/exigency',  ),));
    }

    private function getexigency_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ExigencyController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/exigency/new',  ),));
    }

    private function getexigency_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ExigencyController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/exigency/create',  ),));
    }

    private function getexigency_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ExigencyController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/exigency',  ),));
    }

    private function getexigency_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ExigencyController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/exigency',  ),));
    }

    private function getexigency_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ExigencyController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/exigency',  ),));
    }

    private function getprogressionRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ProgressionController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/progression/',  ),));
    }

    private function getprogression_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ProgressionController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/progression',  ),));
    }

    private function getprogression_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ProgressionController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/progression/new',  ),));
    }

    private function getprogression_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ProgressionController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/progression/create',  ),));
    }

    private function getprogression_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ProgressionController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/progression',  ),));
    }

    private function getprogression_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ProgressionController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/progression',  ),));
    }

    private function getprogression_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ProgressionController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/progression',  ),));
    }

    private function getfeatureRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\FeatureController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/feature/',  ),));
    }

    private function getfeature_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\FeatureController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/feature',  ),));
    }

    private function getfeature_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\FeatureController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/feature/new',  ),));
    }

    private function getfeature_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\FeatureController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/feature/create',  ),));
    }

    private function getfeature_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\FeatureController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/feature',  ),));
    }

    private function getfeature_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\FeatureController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/feature',  ),));
    }

    private function getfeature_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\FeatureController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/feature',  ),));
    }

    private function getprojectRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ProjectController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/project/',  ),));
    }

    private function getproject_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ProjectController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/project',  ),));
    }

    private function getproject_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ProjectController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/project/new',  ),));
    }

    private function getproject_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ProjectController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/project/create',  ),));
    }

    private function getproject_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ProjectController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/project',  ),));
    }

    private function getproject_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ProjectController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/project',  ),));
    }

    private function getproject_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ProjectController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/project',  ),));
    }

    private function getmanagerfrontRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/managerfront/',  ),));
    }

    private function getmanagerfront_projectRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::project_indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/managerfront/project',  ),));
    }

    private function getmanagerfront_project_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::project_showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/managerfront/project',  ),));
    }

    private function getmanagerfront_project_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::project_newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/managerfront/project/new',  ),));
    }

    private function getmanagerfront_project_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::project_createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/managerfront/project/create',  ),));
    }

    private function getmanagerfront_project_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::project_editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/managerfront/project',  ),));
    }

    private function getmanagerfront_project_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::project_updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/managerfront/project',  ),));
    }

    private function getmanagerfront_project_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::project_deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/managerfront/project',  ),));
    }

    private function getmanagerfront_collaboratorRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::collaborator_indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/managerfront/collaborator',  ),));
    }

    private function getmanagerfront_collaborator_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::collaborator_showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/managerfront/collaborator',  ),));
    }

    private function getmanagerfront_collaborator_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::collaborator_newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/managerfront/collaborator/new',  ),));
    }

    private function getmanagerfront_collaborator_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::collaborator_createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/managerfront/collaborator/create',  ),));
    }

    private function getmanagerfront_collaborator_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::collaborator_editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/managerfront/collaborator',  ),));
    }

    private function getmanagerfront_collaborator_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::collaborator_updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/managerfront/collaborator',  ),));
    }

    private function getmanagerfront_collaborator_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::collaborator_deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/managerfront/collaborator',  ),));
    }

    private function getmanagerfront_exigencyRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::exigency_indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/managerfront/exigency',  ),));
    }

    private function getmanagerfront_exigency_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::exigency_showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/managerfront/exigency',  ),));
    }

    private function getmanagerfront_exigency_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::exigency_newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/managerfront/exigency/new',  ),));
    }

    private function getmanagerfront_exigency_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::exigency_createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/managerfront/exigency/create',  ),));
    }

    private function getmanagerfront_exigency_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::exigency_editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/managerfront/exigency',  ),));
    }

    private function getmanagerfront_exigency_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::exigency_updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/managerfront/exigency',  ),));
    }

    private function getmanagerfront_exigency_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::exigency_deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/managerfront/exigency',  ),));
    }

    private function getmanagerfront_featureRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::feature_indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/managerfront/feature',  ),));
    }

    private function getmanagerfront_feature_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::feature_showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/managerfront/feature',  ),));
    }

    private function getmanagerfront_feature_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::feature_newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/managerfront/feature/new',  ),));
    }

    private function getmanagerfront_feature_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::feature_createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/managerfront/feature/create',  ),));
    }

    private function getmanagerfront_feature_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::feature_editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/managerfront/feature',  ),));
    }

    private function getmanagerfront_feature_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::feature_updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/managerfront/feature',  ),));
    }

    private function getmanagerfront_feature_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\ManagerFrontController::feature_deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/managerfront/feature',  ),));
    }

    private function getcollaboratorRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/collaborator/',  ),));
    }

    private function getcollaborator_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/collaborator',  ),));
    }

    private function getcollaborator_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/collaborator/new',  ),));
    }

    private function getcollaborator_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/collaborator/create',  ),));
    }

    private function getcollaborator_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/collaborator',  ),));
    }

    private function getcollaborator_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/collaborator',  ),));
    }

    private function getcollaborator_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Pasa\\RequirementBundle\\Controller\\CollaboratorController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/collaborator',  ),));
    }
}
