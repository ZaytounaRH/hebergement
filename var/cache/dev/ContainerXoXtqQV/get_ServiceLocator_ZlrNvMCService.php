<?php

namespace ContainerXoXtqQV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZlrNvMCService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZlrNvMC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZlrNvMC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'fournisseur' => ['privates', '.errored..service_locator.ZlrNvMC.App\\Entity\\Fournisseur', NULL, 'Cannot autowire service ".service_locator.ZlrNvMC": it needs an instance of "App\\Entity\\Fournisseur" but this type has been excluded in "config/services.yaml".'],
        ], [
            'fournisseur' => 'App\\Entity\\Fournisseur',
        ]);
    }
}
