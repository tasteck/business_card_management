<?php
declare(strict_types=1);

namespace Packages\Application\BusinessCardBook\EditContext;

class BusinessCardBookEditContextInteractor implements IBusinessCardBookEditContextInputPort
{
    /**
     * @var IBusinessCardBookEditContextOutputPort
     */
    private $output_port;

    public function __construct(
        IBusinessCardBookEditContextOutputPort $output_port
    )
    {
        $this->output_port   = $output_port;
    }

    /**
     * @inheritDoc
     */
    final public function handle(BusinessCardBookEditContextInputData $input_data): void
    {
        $output_data = new BusinessCardBookEditContextOutputData();
        $this->output_port->output($output_data);
    }
}
