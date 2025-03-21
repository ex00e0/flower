<?php

namespace ContainerTDsDya0;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_U1fSscService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.u1f_Ssc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.u1f_Ssc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'item' => ['privates', '.errored..service_locator.u1f_Ssc.App\\Entity\\Item', NULL, 'Cannot autowire service ".service_locator.u1f_Ssc": it needs an instance of "App\\Entity\\Item" but this type has been excluded in "config/services.yaml".'],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'entityManager' => '?',
            'item' => 'App\\Entity\\Item',
            'security' => '?',
        ]);
    }
}
