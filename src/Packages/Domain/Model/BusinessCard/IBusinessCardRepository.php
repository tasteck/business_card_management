<?php
declare(strict_types=1);

namespace Packages\Domain\Model\BusinessCard;

interface IBusinessCardRepository
{
    /**
     * @return BusinessCard
     */
    public function findById(): BusinessCard;

    /**
     * @return void
     */
    public function store(): void ;
}
