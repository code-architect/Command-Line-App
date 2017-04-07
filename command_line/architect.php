#! /usr/bin/env php

<?php
use Symfony\Component\Console\Application;
use Architect\RenderTasks;

require 'vendor/autoload.php';

$app = new Application('Task App', '1.0');

$app->add(new RenderTasks);

$app->run();


