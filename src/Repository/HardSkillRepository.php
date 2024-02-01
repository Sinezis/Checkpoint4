<?php

namespace App\Repository;

use App\Entity\HardSkill;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<HardSkill>
 *
 * @method HardSkill|null find($id, $lockMode = null, $lockVersion = null)
 * @method HardSkill|null findOneBy(array $criteria, array $orderBy = null)
 * @method HardSkill[]    findAll()
 * @method HardSkill[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HardSkillRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HardSkill::class);
    }
}
