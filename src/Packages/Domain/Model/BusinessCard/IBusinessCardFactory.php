<?php
declare(strict_types=1);

namespace Packages\Domain\Model\BusinessCard;

interface IBusinessCardFactory
{
    /**
     * @param Name        $name
     * @param CompanyName $company_name
     * @param Category    $category
     * @param Description $description
     *
     * @return BusinessCard
     */
    public function create(
        Name        $name,
        CompanyName $company_name,
        Category    $category,
        Description $description
    ): BusinessCard;
}
