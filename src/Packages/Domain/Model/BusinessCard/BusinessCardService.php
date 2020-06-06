<?php
declare(strict_types=1);

namespace Packages\Domain\Model\BusinessCard;

class BusinessCardService
{
    /**
     * @var IBusinessCardRepository
     */
    private $repository;

    public function __construct(IBusinessCardRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param BusinessCard $business_card
     *
     * @return bool
     */
    public function exists(BusinessCard $business_card): bool
    {
        return (bool) $this->repository->findById($business_card->getId())
            || (bool) $this->repository->findByAccountId($business_card->getAccountId());
    }
}