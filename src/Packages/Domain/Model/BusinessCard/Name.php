<?php

namespace Packages\Domain\Model\BusinessCard;

class Name
{
    /**
     * @var string
     */
    private $first_name;
    /**
     * @var string
     */
    private $second_name;

    public function __construct(string $first_name, string $second_name)
    {
        if ($first_name === '') {
            throw new \DomainException('');
        }

        if (strlen($first_name) > 30) {
            throw new \DomainException('');
        }

        if ($second_name === '') {
            throw new \DomainException('');
        }

        if (strlen($second_name) > 30) {
            throw new \DomainException('');
        }

        $this->first_name = $first_name;
        $this->second_name = $second_name;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    /**
     * @return string
     */
    public function getSecondName(): string
    {
        return $this->second_name;
    }

    public function getFullName(): string
    {
        return sprintf('%s %s', $this->first_name, $this->second_name);
    }
}
