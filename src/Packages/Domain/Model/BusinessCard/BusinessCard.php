<?php
declare(strict_types=1);

namespace Packages\Domain\Model\BusinessCard;

class BusinessCard
{
    /**
     * @var BusinessCardId
     */
    private $id;

    /**
     * @var BusinessCardInformation
     */
    private $information;

    public function __construct(BusinessCardId $id, BusinessCardInformation $information)
    {
        $this->id          = $id;
        $this->information = $information;
    }
}
