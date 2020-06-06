<?php
declare(strict_types=1);

namespace Packages\Application\BusinessCard\Edit;

interface IBusinessCardEditOutputPort
{
    /**
     * @param BusinessCardEditOutputData $output_data
     * @return void
     */
    public function output(BusinessCardEditOutputData $output_data): void;
}
