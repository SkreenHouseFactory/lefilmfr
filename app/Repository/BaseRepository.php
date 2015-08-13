<?php
namespace App\Repository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

class BaseRepository
{
  /**
   * @var \Doctrine\ORM\EntityManager
   */
  protected $entityManager = null;
  protected $conf;

  public function __construct($conf)
  {
    $this->conf = $conf;
  }

  /**
   * @return \Doctrine\ORM\EntityManager
   */
  public function getEntityManager()
  {
    if ($this->entityManager === null) {
        $this->entityManager = $this->createEntityManager();
    }
    return $this->entityManager;
  }
  /**
   * @return EntityManager
   */
  public function createEntityManager()
  {
    $path = array(__DIR__.'/../Entity');

    $config = Setup::createAnnotationMetadataConfiguration($path, $this->conf['isDevMode'], __DIR__.'/../cache');
    // define credentials...
    return EntityManager::create($this->conf, $config);
  }
}
