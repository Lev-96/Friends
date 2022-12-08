<?php

use App\Services\Router;

Router::page('/login', 'login');
Router::page('/register', 'register');
Router::page('/reset', 'reset');
Router::page('/new_password', 'new_password');
Router::page('/profile', 'profile');
Router::page('/videos','videos');
Router::enable();