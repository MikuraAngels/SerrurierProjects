<?php

namespace SerrurierBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * SerrurierRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SerrurierRepository extends EntityRepository
{
    /*public function showByCityAction($city)
    {
        $serrurier = $this->getDoctrine()->getRepository('SerrurierBundle:Serrurier')->findOneBy($city);

        if (!$serrurier) {
            throw $this->createNotFoundException("Pas de Serrurier");
        }

        return array('serrurier' => $serrurier);
    }*/

}
