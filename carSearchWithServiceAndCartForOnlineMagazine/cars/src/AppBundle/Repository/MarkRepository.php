<?php

namespace AppBundle\Repository;

/**
 * MarkRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MarkRepository extends \Doctrine\ORM\EntityRepository
{

    public function fetchMark() {

        $qb = $this->createQueryBuilder('m');
        $qb->select('m.id, m.name');

        return $qb->getQuery()->getResult();

    }

}
