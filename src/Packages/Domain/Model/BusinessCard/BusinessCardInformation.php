<?php
declare(strict_types=1);

namespace Packages\Domain\Model\BusinessCard;

class BusinessCardInformation
{
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

    public function __construct(
        Name        $name,
        CompanyName $company_name,
        Category    $category,
        Description $description
    )
    {
        $this->name         = $name;
        $this->company_name = $company_name;
        $this->category     = $category;
        $this->description  = $description;
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
