<?php
declare(strict_types=1);

namespace lib\Routing;

use lib\Auth\Level;
use src\Controller\Admin\UserController;
use src\Controller\Home\HomeController;
use src\Controller\Login\LoginController;
use src\Controller\Login\RegisterController;

class RoutesImp
{
    /**
     * @var Route[]
     */
    private array $routes;

    public function __construct()
    {
        $this->routes[] = new Route(
            '/',
            LoginController::class,
            'login',
            RouteMethod::GET,
            Level::NO_LEVEL->getLevel(),
            false
        );
        $this->routes[] = new Route(
            '/',
            LoginController::class,
            'tryLogin',
            RouteMethod::POST,
            Level::NO_LEVEL->getLevel(),
            false
        );
        $this->routes[] = new Route(
            '/login',
            LoginController::class,
            'login',
            RouteMethod::GET,
            Level::NO_LEVEL->getLevel(),
            false
        );
        $this->routes[] = new Route(
            '/login',
            LoginController::class,
            'tryLogin',
            RouteMethod::POST,
            Level::NO_LEVEL->getLevel(),
            false
        );
        $this->routes[] = new Route(
            '/register',
            RegisterController::class,
            'registerAction',
            RouteMethod::GET,
            Level::NO_LEVEL->getLevel(),
            false
        );
        $this->routes[] = new Route(
            '/register',
            RegisterController::class,
            'tryRegisterAction',
            RouteMethod::POST,
            Level::NO_LEVEL->getLevel(),
            false
        );
        $this->routes[] = new Route(
            '/admin/users',
            UserController::class,
            'listUsersAction',
            RouteMethod::GET,
            Level::ADMIN->getLevel(),
            false
        );
        $this->routes[] = new Route(
            '/admin/user/level/(\d+)/(\d+)',
            UserController::class,
            'changeUserLevelAction',
            RouteMethod::GET,
            Level::ADMIN->getLevel(),
            false
        );
        $this->routes[] = new Route(
            '/logout',
            LoginController::class,
            'logoutAction',
            RouteMethod::GET,
            Level::NO_LEVEL->getLevel(),
            false
        );
        $this->routes[] = new Route(
            '/logout',
            LoginController::class,
            'logoutAction',
            RouteMethod::GET,
            Level::NO_LEVEL->getLevel(),
            false
        );
        $this->routes[] = new Route(
            '/home',
            HomeController::class,
            'dashboardAction',
            RouteMethod::GET,
            Level::USER->getLevel(),
            true
        );
        $this->routes[] = new Route(
            '/',
            HomeController::class,
            'dashboardAction',
            RouteMethod::GET,
            Level::USER->getLevel(),
            true
        );
        $this->routes[] = new Route(
            '/diensterfassung',
            HomeController::class,
            'homeAction',
            RouteMethod::GET,
            Level::USER->getLevel(),
            true
        );
        $this->routes[] = new Route(
            '/diensterfassung',
            HomeController::class,
            'homeFormAction',
            RouteMethod::POST,
            Level::USER->getLevel(),
            true
        );
    }

    public function getRoutes(): array
    {
        return $this->routes;
    }
}