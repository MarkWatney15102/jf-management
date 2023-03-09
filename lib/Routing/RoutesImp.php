<?php
declare(strict_types=1);

namespace lib\Routing;

use lib\Auth\Level;
use src\Controller\Home\HomeController;
use src\Controller\Login\LoginController;

class RoutesImp
{
    /**
     * @var Route[]
     */
    private array $routes;

    public function __construct()
    {
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
            '/home',
            HomeController::class,
            'homeAction',
            RouteMethod::GET,
            Level::ADMIN->getLevel(),
            true
        );
        $this->routes[] = new Route(
            '/home',
            HomeController::class,
            'homeFormAction',
            RouteMethod::POST,
            Level::ADMIN->getLevel(),
            true
        );
    }

    public function getRoutes(): array
    {
        return $this->routes;
    }
}