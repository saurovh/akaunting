<?php

return [

    'next'                  => 'Next',
    'refresh'               => 'Refresh',

    'steps' => [
        'requirements'      => 'Please, meet the following requirements!',
        'language'          => 'Step 1/3 : Language Selection',
        'database'          => 'Step 2/3 : Database Setup',
        'settings'          => 'Step 3/3 : Company and Admin Details',
    ],

    'language' => [
        'select'            => 'Select Language',
    ],

    'requirements' => [
        'php_version'       => 'PHP 5.6.4 or above needs to be used!',
        'enabled'           => ':feature needs to be enabled!',
        'disabled'          => ':feature needs to be disabled!',
        'extension'         => ':extension extension needs to be loaded!',
        'directory'         => ':directory directory needs to be writable!',
    ],

    'database' => [
        'hostname'          => 'Hostname',
        'username'          => 'Username',
        'password'          => 'Password',
        'name'              => 'Database',
    ],

    'settings' => [
        'company_name'      => 'Company Name',
        'company_email'     => 'Company Email',
        'admin_email'       => 'Admin Email',
        'admin_password'    => 'Admin Password',
    ],

    'error' => [
        'connection'        => 'Error: Could not connect to the database! Please, make sure the details are correct.',
    ],

];
