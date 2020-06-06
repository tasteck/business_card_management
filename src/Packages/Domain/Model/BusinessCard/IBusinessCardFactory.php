<?php
declare(strict_types=1);

namespace Packages\Domain\Model\BusinessCard;

use Packages\Domain\Model\Account\AccountId;

interface IBusinessCardFactory
{
    /**
     * @param AccountId   $account_id
     * @param Name        $name
     * @param CompanyName $company_name
     * @param Category    $category
     * @param Description $description
     *
     * @return BusinessCard
     */
    public function create(
        AccountId   $account_id,
        Name        $name,
        CompanyName $company_name,
        Category    $category,
        Description $description
    ): BusinessCard;
}
