<?php
declare(strict_types = 1);

namespace Packages\Domain\Model\Account;

use Packages\Domain\Model\BusinessCard\BusinessCardId;
use Packages\Domain\Model\BusinessCardBook\BusinessCardBookId;

class Account
{
    /**
     * @var AccountId
     */
    private $id;

    /**
     * @var BusinessCardId
     */
    private $business_card_id;

    /**
     * @var BusinessCardBookId
     */
    private $business_card_book_id;

    public function __construct(AccountId $id, BusinessCardId $business_card_id, BusinessCardBookId $business_card_book_id)
    {
        $this->id                    = $id;
        $this->business_card_id      = $business_card_id;
        $this->business_card_book_id = $business_card_book_id;
    }

    /**
     * @return AccountId
     */
    public function getId(): AccountId
    {
        return $this->id;
    }

    /**
     * @return BusinessCardBookId
     */
    public function getBusinessCardBookId(): BusinessCardBookId
    {
        return $this->business_card_book_id;
    }

    /**
     * @return BusinessCardId
     */
    public function getBusinessCardId(): BusinessCardId
    {
        return $this->business_card_id;
    }
}
