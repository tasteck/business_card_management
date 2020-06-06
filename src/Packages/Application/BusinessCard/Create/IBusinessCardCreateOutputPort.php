<?php
declare(strict_types=1);

namespace Packages\Application\BusinessCard\Create;

interface IBusinessCardCreateOutputPort
{
    /**
     * @param BusinessCardCreateOutputData $output_data
     * @return void
     */
    public function output(BusinessCardCreateOutputData $output_data): void;
}
