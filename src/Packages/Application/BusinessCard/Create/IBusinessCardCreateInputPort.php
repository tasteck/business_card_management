<?php
declare(strict_types=1);

namespace Packages\Application\BusinessCard\Create;

interface IBusinessCardCreateInputPort
{
    /**
     * @param BusinessCardCreateInputData $input_data
     * @return void
     */
    public function handle(BusinessCardCreateInputData $input_data): void ;
}
