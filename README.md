# polidog/object-access

[![Build Status](https://travis-ci.org/polidog/object-access.svg?branch=master)](https://travis-ci.org/polidog/object-access)

This library provides object property accessor. It is very simple.  
It support only object. Array is No support.

## Installation

```
$ composer req polidog/object-access
```

## Usage

```
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

```