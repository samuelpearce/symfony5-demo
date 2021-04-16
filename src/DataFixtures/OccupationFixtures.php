<?php

namespace App\DataFixtures;

use App\Entity\Occupation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class OccupationFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $list = [
            "Chef",
            "Church",
            "Cook",
            "Housewife",
            "Housewife (with part time job)",
            "Manual",
            "Medical",
            "Minister",
            "Missionary",
            "Nurse",
            "Office",
            "Other",
            "Pastor",
            "Retired",
            "School (child)",
            "Student",
            "Teacher",
            "Technician",
            "Treasurer",
            "Uccf",
            "Unemployed",
        ];

        foreach ($list as $item)
        {
            $occupation = new Occupation();
            $occupation->setOccupation($item);
            $manager->persist($occupation);
        }
        $manager->flush();
    }
}
