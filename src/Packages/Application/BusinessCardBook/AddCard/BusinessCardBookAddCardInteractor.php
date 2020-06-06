<?php
declare(strict_types=1);

namespace Packages\Application\BusinessCardBook\AddCard;

class BusinessCardBookAddCardInteractor implements IBusinessCardBookAddCardInputPort
{
    /**
     * @var IBusinessCardBookAddCardOutputPort
     */
    private $output_port;

    public function __construct(
        IBusinessCardBookAddCardOutputPort $output_port
    )
    {
        $this->output_port   = $output_port;
    }

    /**
     * @inheritDoc
     */
    final public function handle(BusinessCardBookAddCardInputData $input_data): void
    {
        $output_data = new BusinessCardBookAddCardOutputData();
        $this->output_port->output($output_data);
    }
}
