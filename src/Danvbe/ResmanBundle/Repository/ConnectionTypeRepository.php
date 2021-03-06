<?php

namespace Danvbe\ResmanBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;
use Danvbe\ResmanBundle\Entity\ResourceType;
use Danvbe\ResmanBundle\Entity\ConnectionType;

/**
 * ConnectionTypeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ConnectionTypeRepository extends EntityRepository
{
    /**
     * Function used to get the identification of a resource type
     *
     * @param \Danvbe\ResmanBundle\Entity\ResourceType $rt
     * @return array Identification of a the resource type
     */
    public function findIdentification(ResourceType $rt){
        $rt_id = $rt->getId();
        $sql = "select ct.* from ConnectionType ct
                leftJoin ct.connected_resource_type crt_master,
                leftJoin ct.type_of_connection_type toct,
                where crt_master.is_master
                and crt_master.resource_type_id = $rt_id
                and toct.type='identification'";

        $q = $this->createQueryBuilder('ct')
            ->select('ct')
            ->leftJoin('ct.connected_resource_types','crt_master')
            ->leftJoin('ct.type','toct')
            ->where('crt_master.is_master = 1 and crt_master.resource_type = :rt and toct.type=:type')
            ->setParameter('rt',$rt)
            ->setParameter('type','identification')
            ->getQuery();

        $res = $q->getResult();

        return (count($res)>0)?$res[0]:null;
    }

}
