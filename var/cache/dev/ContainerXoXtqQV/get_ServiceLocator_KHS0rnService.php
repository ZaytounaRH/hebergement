<?php

namespace ContainerXoXtqQV;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KHS0rnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kHS0rn_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kHS0rn_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'employeeRepo' => ['privates', 'App\\Repository\\EmployeeRepository', 'getEmployeeRepositoryService', true],
            'formationRepo' => ['privates', 'App\\Repository\\FormationRepository', 'getFormationRepositoryService', true],
        ], [
            'employeeRepo' => 'App\\Repository\\EmployeeRepository',
            'formationRepo' => 'App\\Repository\\FormationRepository',
        ]);
    }
}
