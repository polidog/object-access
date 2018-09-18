<?php

require __DIR__ . '/../vendor/autoload.php';

class User {

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * Sample constructor.
     * @param int $id
     * @param string $name
     */
    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}

$user = new User(120,'test-user');
$accessor = \Polidog\ObjectAccess\ObjectAccess::createAccessor();
$accessor->setter($user, 'name', 'change-name-user');

var_dump($user->getName()); // change-name-user


var_dump($accessor->getter($user, 'id')); // 120


$accessor->setter($user, 'email', 'polidogs@gmail.com', true); // set undefined property

var_dump($user);