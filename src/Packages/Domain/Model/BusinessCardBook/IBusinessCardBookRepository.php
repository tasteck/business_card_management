<?php
declare(strict_types=1);

namespace Packages\Domain\Model\BusinessCardBook;

interface IBusinessCardBookRepository
{
    /**
     * @return BusinessCardBook
     */
    public function find(): BusinessCardBook;

    /**
     * @return void
     */
    public function store(): void ;
}
