<?php

namespace AeroportBundle\Repository;

use Doctrine\ORM\Tools\Pagination\Paginator;


class avionsRepository extends \Doctrine\ORM\EntityRepository
{
    public function getAvions($page,$nombreParPage) // la fonction qui permet de faire la pagination de la liste des avions
    {
        $q = $this->createQueryBuilder("a")->setFirstResult(($page-1)*$nombreParPage)->setMaxResults($nombreParPage);
        return new Paginator($q);
    }
}
