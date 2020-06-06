<?php
declare(strict_types=1);

namespace Packages\Application\BusinessCardBook\AddCard;

interface IBusinessCardBookAddCardOutputPort
{
    /**
     * @param BusinessCardBookAddCardOutputData $output_data
     * @return void
     */
    public function output(BusinessCardBookAddCardOutputData $output_data): void;
}
