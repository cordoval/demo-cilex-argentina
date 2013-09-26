<?php

namespace Console;

use Cilex\Application;
use Command\ShowAllExamsCommand;

$app = new Application('Cilex');
$app->command(new ShowAllExamsCommand());
$app->run();
