<?php
declare(strict_types=1);

namespace Packages\Domain\Model;

class AbstractId
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
