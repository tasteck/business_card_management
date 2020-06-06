<?php
declare(strict_types=1);

namespace Packages\Domain\Model\BusinessCard;

use Packages\Domain\Model\Account\AccountId;

interface IBusinessCardRepository
{
    /**
     * @param BusinessCardId $business_card_id
     *
     * @return BusinessCard
     */
    public function findById(BusinessCardId $business_card_id): BusinessCard;

    /**
     * @param AccountId $account_id
     *
     * @return BusinessCard
     */
    public function findByAccountId(AccountId $account_id): BusinessCard;

    /**
     * @param BusinessCard $business_card
     *
     * @return void
     */
    public function store(BusinessCard $business_card): void ;
}
