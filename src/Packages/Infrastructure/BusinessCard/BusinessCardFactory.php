<?php
declare(strict_types = 1);

namespace Packages\Infrastructure\BusinessCard;

use Packages\Domain\Model\BusinessCard\BusinessCard;
use Packages\Domain\Model\BusinessCard\BusinessCardId;
use Packages\Domain\Model\BusinessCard\BusinessCardInformation;
use Packages\Domain\Model\BusinessCard\Category;
use Packages\Domain\Model\BusinessCard\CompanyName;
use Packages\Domain\Model\BusinessCard\Description;
use Packages\Domain\Model\BusinessCard\IBusinessCardFactory;
use Packages\Domain\Model\BusinessCard\Name;

class BusinessCardFactory implements IBusinessCardFactory
{
    /**
     * @inheritDoc
     */
    public function create(Name $name, CompanyName $company_name, Category $category, Description $description): BusinessCard
    {
        $id          = new BusinessCardId(uniqid('card_id_', true));
        $information = new BusinessCardInformation($name, $company_name, $category, $description);
        return new BusinessCard($id, $information);
    }
}