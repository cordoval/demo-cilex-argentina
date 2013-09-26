<?php

namespace Command;

use Cilex\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ShowAllExamsCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('exams:show')
            ->setDescription('Display all exams')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('All exams displayed');
    }
}
