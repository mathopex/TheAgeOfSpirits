<?php

namespace ContainerS6dpwlg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LSZbNktService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.lSZbNkt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.lSZbNkt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\DashboardController::ContactGestiton' => ['privates', '.service_locator.BlcLmcA', 'get_ServiceLocator_BlcLmcAService', true],
            'App\\Controller\\Admin\\DashboardController::UserGestion' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\Admin\\DashboardController::delete' => ['privates', '.service_locator.iToh589', 'get_ServiceLocator_IToh589Service', true],
            'App\\Controller\\Admin\\DashboardController::view' => ['privates', '.service_locator.IfaUx1P', 'get_ServiceLocator_IfaUx1PService', true],
            'App\\Controller\\ContactController::contact' => ['privates', '.service_locator.60bJY.Q', 'get_ServiceLocator_60bJY_QService', true],
            'App\\Controller\\PersoController::create' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator._60ahW5', 'get_ServiceLocator_60ahW5Service', true],
            'App\\Controller\\RegistrationController::registerVerificationEmail' => ['privates', '.service_locator.cItq8lq', 'get_ServiceLocator_CItq8lqService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\Admin\\DashboardController:ContactGestiton' => ['privates', '.service_locator.BlcLmcA', 'get_ServiceLocator_BlcLmcAService', true],
            'App\\Controller\\Admin\\DashboardController:UserGestion' => ['privates', '.service_locator.Q1F27w5', 'get_ServiceLocator_Q1F27w5Service', true],
            'App\\Controller\\Admin\\DashboardController:delete' => ['privates', '.service_locator.iToh589', 'get_ServiceLocator_IToh589Service', true],
            'App\\Controller\\Admin\\DashboardController:view' => ['privates', '.service_locator.IfaUx1P', 'get_ServiceLocator_IfaUx1PService', true],
            'App\\Controller\\ContactController:contact' => ['privates', '.service_locator.60bJY.Q', 'get_ServiceLocator_60bJY_QService', true],
            'App\\Controller\\PersoController:create' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator._60ahW5', 'get_ServiceLocator_60ahW5Service', true],
            'App\\Controller\\RegistrationController:registerVerificationEmail' => ['privates', '.service_locator.cItq8lq', 'get_ServiceLocator_CItq8lqService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\Admin\\DashboardController::ContactGestiton' => '?',
            'App\\Controller\\Admin\\DashboardController::UserGestion' => '?',
            'App\\Controller\\Admin\\DashboardController::delete' => '?',
            'App\\Controller\\Admin\\DashboardController::view' => '?',
            'App\\Controller\\ContactController::contact' => '?',
            'App\\Controller\\PersoController::create' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\RegistrationController::registerVerificationEmail' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\Admin\\DashboardController:ContactGestiton' => '?',
            'App\\Controller\\Admin\\DashboardController:UserGestion' => '?',
            'App\\Controller\\Admin\\DashboardController:delete' => '?',
            'App\\Controller\\Admin\\DashboardController:view' => '?',
            'App\\Controller\\ContactController:contact' => '?',
            'App\\Controller\\PersoController:create' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\RegistrationController:registerVerificationEmail' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
