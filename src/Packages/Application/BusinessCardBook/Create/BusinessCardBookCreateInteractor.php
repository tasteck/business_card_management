<?php
declare(strict_types=1);

namespace Packages\Application\BusinessCardBook\Create;

class BusinessCardBookCreateInteractor implements IBusinessCardBookCreateInputPort
{
    /**
     * @var IBusinessCardBookCreateOutputPort
     */
    private $output_port;

    public function __construct(
        IBusinessCardBookCreateOutputPort $output_port
    )
    {
        $this->output_port   = $output_port;
    }

    /**
     * @inheritDoc
     */
    final public function handle(BusinessCardBookCreateInputData $input_data): void
    {
        $output_data = new BusinessCardBookCreateOutputData();
        $this->output_port->output($output_data);
    }
}
