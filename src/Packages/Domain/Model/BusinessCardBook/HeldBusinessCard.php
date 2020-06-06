<?php

namespace Packages\Domain\Model\BusinessCardBook;

use Cake\Chronos\Chronos;
use Packages\Domain\Model\BusinessCard\BusinessCardId;

class HeldBusinessCard
{
    /**
     * @var BusinessCardId
     */
    private $business_card_id;

    /**
     * @var Chronos
     */
    private $date;

    /**
     * @var string
     */
    private $description;

    public function __construct(BusinessCardId $business_card_id, Chronos $date, string $description)
    {
        // todo 制約を加える

        $this->business_card_id = $business_card_id;
        $this->date             = $date;
        $this->description      = $description;
    }
}
