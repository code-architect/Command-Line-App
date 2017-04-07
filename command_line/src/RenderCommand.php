<?php

namespace Architect;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class RenderTasks extends Command
{
    private $database = null;

    public function __construct(DatabaseAdapter $database)
    {
        $this->database = $database;

        parent::__construct();
    }

    public function configure()
    {
        $this->setName('render')
            ->setDescription('Render some tabular data');
    }


    public function execute(InputInterface $input, OutputInterface $output)
    {
        $this->showTasks($output);
    }




    private function showTasks($output)
    {

    }


}