<?php
declare(strict_types=1);

namespace Packages\Domain\Model\BusinessCard;

use Packages\Domain\Model\Account\AccountId;

class BusinessCard
{
    /**
     * @var AccountId
     */
    private $account_id;

    /**
     * @var BusinessCardId
     */
    private $id;

    /**
     * @var BusinessCardInformation
     */
    private $information;

    public function __construct(AccountId $account_id, BusinessCardId $id, BusinessCardInformation $information)
    {
        $this->account_id  = $account_id;
        $this->id          = $id;
        $this->information = $information;
    }

    /**
     * @return AccountId
     */
    public function getAccountId(): AccountId
    {
        return $this->account_id;
    }

    /**
     * @return BusinessCardId
     */
    public function getId(): BusinessCardId
    {
        return $this->id;
    }

    /**
     * @return Name
     */
    public function getName(): Name
    {
        return $this->information->getName();
    }

    /**
     * @return CompanyName
     */
    public function getCompanyName(): CompanyName
    {
        return $this->information->getCompanyName();
    }

    /**
     * @return Category
     */
    public function getCategory(): Category
    {
        return $this->information->getCategory();
    }

    /**
     * @return Description
     */
    public function getDescription(): Description
    {
        return $this->information->getDescription();
    }
}
