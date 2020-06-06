<?php
declare(strict_types=1);

namespace Packages\Domain\Model\Account;

use App\Domain\Core\Account\Account;

interface IAccountFactory
{
    /**
     * @return Account
     */
    public function create(): Account;
}
