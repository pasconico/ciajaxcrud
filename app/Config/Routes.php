<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Students Routes
$routes->group('students', static function($routes){
    $routes->get('student-list', 'StudentsController::index');
    $routes->post('store-student', 'StudentsController::storeStudent');
    $routes->get('load-student', 'StudentsController::loadStudent');
    $routes->post('view-student', 'StudentsController::viewStudent');
    $routes->post('edit-student', 'StudentsController::editStudent');
    $routes->post('update-student', 'StudentsController::updateStudent');
    $routes->post('delete-student', 'StudentsController::deleteStudent');

});
