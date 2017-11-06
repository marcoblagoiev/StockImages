<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Stock;

class LoadImageData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $image = (new Stock())
            ->setFilename('abstract-background-pink.jpg')
            ->setSlug('abstract-background-pink')
            ->setWidth(1920)
            ->setHeight(1080)
            ->setCategory($this->getReference('category.animals'))
        ;

        $manager->persist($image);
        $manager->flush();
    }

    public function getOrder()
    {
        return 200;
    }
}