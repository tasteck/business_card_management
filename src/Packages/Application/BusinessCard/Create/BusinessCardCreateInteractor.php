<?php
declare(strict_types=1);

namespace Packages\Application\BusinessCard\Create;

class BusinessCardCreateInteractor implements IBusinessCardCreateInputPort
{
    /**
     * @var IBusinessCardCreateOutputPort
     */
    private $output_port;

    public function __construct(
        IBusinessCardCreateOutputPort $output_port
    )
    {
        $this->output_port   = $output_port;
    }

    /**
     * @inheritDoc
     */
    final public function handle(BusinessCardCreateInputData $input_data): void
    {
        $output_data = new BusinessCardCreateOutputData();
        $this->output_port->output($output_data);
    }
}
