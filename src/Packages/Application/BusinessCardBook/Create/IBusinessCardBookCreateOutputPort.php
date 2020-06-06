<?php
declare(strict_types=1);

namespace Packages\Application\BusinessCardBook\Create;

interface IBusinessCardBookCreateOutputPort
{
    /**
     * @param BusinessCardBookCreateOutputData $output_data
     * @return void
     */
    public function output(BusinessCardBookCreateOutputData $output_data): void;
}
