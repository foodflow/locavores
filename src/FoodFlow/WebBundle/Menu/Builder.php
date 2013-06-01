<?php

namespace FoodFlow\WebBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $menu->addChild('Home', array('route' => 'ff_web_home'));
        $menu->addChild('Challenge', array('route' => 'challenge'));
        $menu->addChild('Map', array('route' => 'ff_maps_home'));
        $menu->addChild('Purpose', array('route' => 'ff_web_purpose'));

        $context = $this->container->get('security.context');

        if ($context->isGranted('ROLE_USER')) {
            $this->addUserItems($menu, $context);
        } else {
            $this->addAnonymousItems($menu);
        }

        return $menu;
    }

    protected function adduserItems($menu, $context)
    {
        $menu->addChild('Profile', array('route' => 'fos_user_profile_show'));
        $menu->addChild('Logout', array('route' => 'fos_user_security_logout'));

        if ($context->isGranted('ROLE_ADMIN')) {
            $menu->addChild('Admin', array('route' => 'ff_admin_home'));
        }
    }

    protected function addAnonymousItems($menu)
    {
        $menu->addChild('Login', array('route' => 'fos_user_security_login'));
        $menu->addChild('Register', array('route' => 'fos_user_registration_register'));
    }
}