<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'connection' => env('TASK_LOGGER_CONNECTION', 'tcollect'),
    'error_email' => env('TASK_LOGGER_ERROR_EMAIL', 'armti@armcanada.ca'),
];