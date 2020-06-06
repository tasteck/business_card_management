<?php
declare(strict_types=1);

namespace Packages\Application\BusinessCard\Edit;

interface IBusinessCardEditInputPort
{
    /**
     * @param BusinessCardEditInputData $input_data
     * @return void
     */
    public function handle(BusinessCardEditInputData $input_data): void ;
}
