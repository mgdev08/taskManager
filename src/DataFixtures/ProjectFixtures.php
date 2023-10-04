<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\ProjectFactory;
;

class ProjectFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $projects = ProjectFactory::createMany(15);
    }
}
