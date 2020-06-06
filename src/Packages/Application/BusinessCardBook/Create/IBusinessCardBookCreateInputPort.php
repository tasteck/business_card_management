<?php
declare(strict_types=1);

namespace Packages\Application\BusinessCardBook\Create;

interface IBusinessCardBookCreateInputPort
{
    /**
     * @param BusinessCardBookCreateInputData $input_data
     * @return void
     */
    public function handle(BusinessCardBookCreateInputData $input_data): void ;
}
