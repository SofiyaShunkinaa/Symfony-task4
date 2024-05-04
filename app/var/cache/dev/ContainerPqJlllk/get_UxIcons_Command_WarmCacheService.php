<?php

namespace ContainerPqJlllk;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_UxIcons_Command_WarmCacheService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.ux_icons.command.warm_cache' shared service.
     *
     * @return \Symfony\UX\Icons\Command\WarmCacheCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-icons/src/Command/WarmCacheCommand.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-icons/src/IconCacheWarmer.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/ux-icons/src/Twig/IconFinder.php';

        $container->privates['.ux_icons.command.warm_cache'] = $instance = new \Symfony\UX\Icons\Command\WarmCacheCommand(new \Symfony\UX\Icons\IconCacheWarmer(($container->privates['.ux_icons.cache_icon_registry'] ?? $container->load('get_UxIcons_CacheIconRegistryService')), new \Symfony\UX\Icons\Twig\IconFinder(($container->privates['twig'] ?? $container->load('getTwigService')), (\dirname(__DIR__, 4).'/assets/icons'))));

        $instance->setName('ux:icons:warm-cache');
        $instance->setDescription('Warm the icon cache');

        return $instance;
    }
}
