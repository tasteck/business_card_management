<?php

namespace Packages\Infrastructure\BusinessCard;

use Packages\Domain\Model\BusinessCard\BusinessCard;
use Packages\Domain\Model\BusinessCard\IBusinessCardRepository;

class BusinessCardRepository implements IBusinessCardRepository
{

    /**
     * @inheritDoc
     */
    public function findById(): BusinessCard
    {
        // TODO: Implement findById() method.
    }

    /**
     * @inheritDoc
     */
    public function store(): void
    {
        // TODO: Implement store() method.
    }
}
