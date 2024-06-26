<?php

namespace Container7ZTHk7C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUsersManagerControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\UsersManagerController' shared autowired service.
     *
     * @return \App\Controller\UsersManagerController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/UsersManagerController.php';

        $container->services['App\\Controller\\UsersManagerController'] = $instance = new \App\Controller\UsersManagerController(($container->privates['security.authorization_checker'] ?? self::getSecurity_AuthorizationCheckerService($container)), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\UsersManagerController', $container));

        return $instance;
    }
}
