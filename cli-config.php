<?php
ini_set('display_errors', true);
require 'vendor/autoload.php';
use App\Repository\BaseRepository;
$repository = new BaseRepository();
$em = $repository->getEntityManager();
$helpers = new Symfony\Component\Console\Helper\HelperSet(array(
    'db' => new \Doctrine\DBAL\Tools\Console\Helper\ConnectionHelper($em->getConnection()),
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($em)
));