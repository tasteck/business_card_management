<?php
declare(strict_types=1);

namespace Packages\Domain\Model\Account;

interface IAccountRepository
{
    /**
     * @return Account
     */
    public function find(): Account;

    /**
     * @return void
     */
    public function store(): void ;
}
