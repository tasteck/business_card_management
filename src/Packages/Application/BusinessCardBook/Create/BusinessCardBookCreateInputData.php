<?php
declare(strict_types = 1);

namespace Packages\Application\BusinessCardBook\Create;

use Packages\Domain\Model\Account\AccountId;
use Packages\Domain\Model\BusinessCard\Category;
use Packages\Domain\Model\BusinessCard\CompanyName;
use Packages\Domain\Model\BusinessCard\Description;
use Packages\Domain\Model\BusinessCard\Name;

class BusinessCardBookCreateInputData
{
    /**
     * @var AccountId
     */
    private $account_id;
    /**
     * @var Name
     */
    private $name;
    /**
     * @var CompanyName
     */
    private $company_name;
    /**
     * @var Category
     */
    private $category;
    /**
     * @var Description
     */
    private $description;

    public function __construct(AccountId $account_id, Name $name, CompanyName $company_name, Category $category, Description $description)
    {
        $this->account_id   = $account_id;
        $this->name         = $name;
        $this->company_name = $company_name;
        $this->category     = $category;
        $this->description  = $description;
    }

    /**
     * @return AccountId
     */
    public function getAccountId(): AccountId
    {
        return $this->account_id;
    }

    /**
     * @return Name
     */
    public function getName(): Name
    {
        return $this->name;
    }

    /**
     * @return CompanyName
     */
    public function getCompanyName(): CompanyName
    {
        return $this->company_name;
    }

    /**
     * @return Category
     */
    public function getCategory(): Category
    {
        return $this->category;
    }

    /**
     * @return Description
     */
    public function getDescription(): Description
    {
        return $this->description;
    }
}
