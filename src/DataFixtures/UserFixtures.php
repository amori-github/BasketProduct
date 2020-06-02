<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class UserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }
    public function load(ObjectManager $manager)
    {
        $user = new User();
        // ...
        $roles[]= 'ROLE_ADMIN';
        $user->setEmail('admin@gmail.com');
        $user->setRoles($roles);
        $user->setPassword($this->passwordEncoder->encodePassword(
                       $user,
                       'adminadmin'
                 ));

        $user2 = new User();
        // ...
        $roles2[]= 'ROLE_USER';
        $user2->setEmail('user@gmail.com');
        $user2->setRoles($roles2);
        $user2->setPassword($this->passwordEncoder->encodePassword(
            $user2,
            'useruser'
        ));

        $manager->persist($user);
        $manager->persist($user2);
        $manager->flush();
    }
}
