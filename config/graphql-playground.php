<?php

return [
    'route' => 'graphql-playground',
    'enabled' => env('APP_ENV') !== 'production',
    'middleware' => ['web']
];