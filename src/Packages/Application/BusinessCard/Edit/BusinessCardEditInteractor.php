<?php
declare(strict_types=1);

namespace Packages\Application\BusinessCard\Edit;

class BusinessCardEditInteractor implements IBusinessCardEditInputPort
{
    /**
     * @var IBusinessCardEditOutputPort
     */
    private $output_port;

    public function __construct(
        IBusinessCardEditOutputPort $output_port
    )
    {
        $this->output_port   = $output_port;
    }

    /**
     * @inheritDoc
     */
    final public function handle(BusinessCardEditInputData $input_data): void
    {
        $output_data = new BusinessCardEditOutputData();
        $this->output_port->output($output_data);
    }
}
