<?php
/**
 * HTTP Routes defined here
 */
use Slim\Http\Request;
use Slim\Http\Response;

// Get Routes
$app->get('/', App\Actions\HomeAction::class)->setName('homepage');

// Post Routes
// TODO Add POST route here
