<?php
declare(strict_types=1);

namespace Packages\Application\BusinessCardBook\EditContext;

interface IBusinessCardBookEditContextInputPort
{
    /**
     * @param BusinessCardBookEditContextInputData $input_data
     * @return void
     */
    public function handle(BusinessCardBookEditContextInputData $input_data): void ;
}
