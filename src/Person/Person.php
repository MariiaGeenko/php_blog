<?php

namespace Ember\Blog\Person;

use DateTimeImmutable;

class Person
{
    private Name $name;
    private DateTimeImmutable $registeredOn;

    public function __construct(
        Name $name,
        DateTimeImmutable $registeredOn
    ) {
        $this->registeredOn = $registeredOn;
        $this->name = $name;
    }

    public function __toString()
    {
        return $this->name . ' (reg ' . $this->registeredOn->format('y-m-d') . ')';
    }
}