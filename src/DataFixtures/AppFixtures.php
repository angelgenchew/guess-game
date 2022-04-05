<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Guess\Domain\League\League;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $league = new League();
        $league->setId(1);
        $league->setName('Premier League');
        $league->setLeagueNameSlugged('premier-league');
        $league->setLeagueApiId(123);
        $league->setLogo('premier-league-logo.png');

        $manager->persist($league);
        $manager->flush();
    }
}
