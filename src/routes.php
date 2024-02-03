<?php

/**
 * WEB
 */

Route::group([
    "prefix" => ADMIN,
    "middleware" => ["web", "auth:backend"],
    "namespace" => "Benaaacademy\\Dashboard\\Controllers"
], function ($route) {
    $route->any('/dashboard', ["as" => "admin.dashboard.show", "uses" => "DashboardController@index"]);
});
