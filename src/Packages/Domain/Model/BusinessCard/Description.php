<?php
declare(strict_types=1);

namespace Packages\Domain\Model\BusinessCard;

class Description
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

        if (strlen($value) < 10) {
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
