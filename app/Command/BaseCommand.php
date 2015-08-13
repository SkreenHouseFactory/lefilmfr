<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

use App\Repository\BaseRepository;

abstract class BaseCommand extends Command
{
    protected $input;
    protected $output;

    protected function configure()
    {
      $this->em = BaseRepository::createEntityManager();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
      $this->input = $input;
      $this->output = $output;
    }
}