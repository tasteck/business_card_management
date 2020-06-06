<?php
declare(strict_types=1);

namespace Packages\Domain\Model\BusinessCardBook;

use App\Domain\Core\BusinessCardBook\BusinessCardBook;

interface IBusinessCardBookFactory
{
    /**
     * @return BusinessCardBook
     */
    public function create(): BusinessCardBook;
}
