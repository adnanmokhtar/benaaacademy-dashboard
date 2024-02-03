<?php

namespace Benaaacademy\Dashboard;

use Action;
use Navigation;
use Request;
use URL;

/**
 * Class Dashboard
 * @package Benaaacademy\Dashboard
 */
class Dashboard extends \Benaaacademy\Platform\Plugin
{

    /**
     * Plugin boot
     */
    function boot()
    {

        parent::boot();

        Navigation::menu("sidebar", function ($menu) {

            $menu->item('home_dashboard', trans("dashboard::dashboard.dashboard"), route("admin.dashboard.show"))
                ->order(0)
                ->icon("fa-tachometer");
        });
    }


    function install($command){

        parent::install($command);

        $command->call("vendor:publish", [
            "--provider" => "ConsoleTVs\\Charts\\ChartsServiceProvider"
        ]);
    }
}
