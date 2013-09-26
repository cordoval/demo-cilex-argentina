<?php

namespace Console;

use Cilex\Application;
use Cilex\Command\ShowAllExamsCommand;

$app = new Application('Cilex');
$app->command(new ShowAllExamsCommand());
$app->run();
