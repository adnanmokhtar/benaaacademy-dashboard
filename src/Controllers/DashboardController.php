<?php

namespace Benaaacademy\Dashboard\Controllers;

use Benaaacademy\Platform\Controller;
use Lang;
use Request;
use Session;

/**
 * Class DashboardController
 * @package Benaaacademy\Dashboard\Controllers
 */
class DashboardController extends Controller
{

    /**
     * View payload
     * @var array
     */
    public $data = [];

    /**
     * Show the dashboard
     * @return mixed
     */
    public function index()
    {
        return view("dashboard::show", $this->data);
    }

}
