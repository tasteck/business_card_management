<?php

namespace Packages\Domain\Model\BusinessCard;

class CompanyName
{
    /**
     * @var string
     */
    private $value;

    public function __construct(string $value)
    {
        if ($value === '') {
            throw new \DomainException('');
        }

        if (strlen($value) > 30) {
            throw new \DomainException('');
        }

        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
}
