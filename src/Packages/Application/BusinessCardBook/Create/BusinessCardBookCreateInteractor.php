<?php
declare(strict_types=1);

namespace Packages\Application\BusinessCardBook\Create;

use Packages\Domain\Model\BusinessCard\BusinessCardService;
use Packages\Domain\Model\BusinessCard\IBusinessCardFactory;
use Packages\Domain\Model\BusinessCard\IBusinessCardRepository;

class BusinessCardBookCreateInteractor implements IBusinessCardBookCreateInputPort
{
    /**
     * @var IBusinessCardBookCreateOutputPort
     */
    private $output_port;
    /**
     * @var IBusinessCardFactory
     */
    private $factory;
    /**
     * @var IBusinessCardRepository
     */
    private $repository;
    /**
     * @var BusinessCardService
     */
    private $service;

    public function __construct(
        IBusinessCardBookCreateOutputPort $output_port,
        IBusinessCardFactory              $factory,
        IBusinessCardRepository           $repository,
        BusinessCardService               $service
    )
    {
        $this->output_port = $output_port;
        $this->factory     = $factory;
        $this->repository  = $repository;
        $this->service     = $service;
    }

    /**
     * @inheritDoc
     */
    final public function handle(BusinessCardBookCreateInputData $input_data): void
    {
        $business_card = $this->factory->create(
            $input_data->getAccountId(),
            $input_data->getName(),
            $input_data->getCompanyName(),
            $input_data->getCategory(),
            $input_data->getDescription()
        );

        if ($this->service->exists($business_card)) {
            throw new \DomainException('');
        }

        $this->repository->store($business_card);

        $output_data = new BusinessCardBookCreateOutputData(
            $business_card->getId(),
            $business_card->getName(),
            $business_card->getCompanyName(),
            $business_card->getCategory(),
            $business_card->getDescription()
        );

        $this->output_port->output($output_data);
    }
}
