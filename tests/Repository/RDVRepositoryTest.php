<?php

namespace App\Tests\Repository;

use App\DataFixtures\RDVFixtures;
use App\Repository\RDVRepository;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Liip\TestFixturesBundle\Test\FixturesTrait;

class RDVRepositoryTest extends KernelTestCase
{

    use FixturesTrait;

    public function testFindAll()
    {
        self::bootKernel();
        $repository = self::$container->get(RDVRepository::class);
        $this->loadFixtures([RDVFixtures::class]);
        $RDV = $repository->findAll();

        $this->assertCount(5, $RDV);
    }
}
