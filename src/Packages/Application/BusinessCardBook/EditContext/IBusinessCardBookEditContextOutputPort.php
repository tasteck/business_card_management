<?php
declare(strict_types=1);

namespace Packages\Application\BusinessCardBook\EditContext;

interface IBusinessCardBookEditContextOutputPort
{
    /**
     * @param BusinessCardBookEditContextOutputData $output_data
     * @return void
     */
    public function output(BusinessCardBookEditContextOutputData $output_data): void;
}
