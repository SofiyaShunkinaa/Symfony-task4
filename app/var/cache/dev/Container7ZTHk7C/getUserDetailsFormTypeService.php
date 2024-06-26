<?php

namespace Container7ZTHk7C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserDetailsFormTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\UserDetailsFormType' shared autowired service.
     *
     * @return \App\Form\UserDetailsFormType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/UserDetailsFormType.php';

        return $container->privates['App\\Form\\UserDetailsFormType'] = new \App\Form\UserDetailsFormType();
    }
}
