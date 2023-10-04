<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\TaskFactory;
use App\Factory\ProjectFactory;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
;

class TaskFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $projects = TaskFactory::createMany(40,function (){
            return ["project" => ProjectFactory::random()];});
    }

    public function getDependencies()
    {
        return [
            ProjectFixtures::class,
        ];
    }
}
