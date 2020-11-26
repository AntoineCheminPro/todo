<?php

namespace App\DataFixtures;

use App\Entity\Task;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TaskFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $date = new \DateTime(date('d-m-Y'));
        $loremIpsum = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
        for ($i = 0; $i < 10; $i++) {
            $task = new Task();
            $task->setRegistered($date);
            $task->setDeadline(new \DateTime(date('31-12-2021')));
            $task->setContent($loremIpsum);
            $task->setActive(true);
            $task->setLabel("task N°".$i);
            $task->setStatus("To do");
            $manager->persist($task);
            $manager->flush();
        }
    }
}
