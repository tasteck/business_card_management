<?php
declare(strict_types=1);

namespace Packages\Application\BusinessCardBook\AddCard;

interface IBusinessCardBookAddCardInputPort
{
    /**
     * @param BusinessCardBookAddCardInputData $input_data
     * @return void
     */
    public function handle(BusinessCardBookAddCardInputData $input_data): void ;
}
