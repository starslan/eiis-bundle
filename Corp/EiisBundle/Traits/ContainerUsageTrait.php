<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2018-04-26
 * Time: 16:55
 */
namespace Corp\EiisBundle\Traits;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\QueryBuilder;
use Symfony\Component\DependencyInjection\ContainerInterface;

trait ContainerUsageTrait
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    public function assignContainer(ContainerInterface $container){
        $this->container = $container;
        return $this;
    }

    /**
     * @return EntityManager
     */
    protected function getEm(){
        return $this->getContainer()->get('doctrine')->getManager();
    }

    protected function getContainer(){
        if(is_callable('parent::getContainer')){
            return parent::getContainer();
        }
        return $this->container;
    }

    protected function hasContainer(){
        return is_object($this->getContainer());
    }

    /**
     * @param $class
     * @return QueryBuilder
     */
    protected function getQb($class = null){
        if($class){
            return $this->getEm()
                ->getRepository($class)
                ->createQueryBuilder('t');
        }else{
            return $this->getEm()->createQueryBuilder();
        }
    }

    protected function getTwig(){
        return $this->getContainer()->get('templating');
    }
}