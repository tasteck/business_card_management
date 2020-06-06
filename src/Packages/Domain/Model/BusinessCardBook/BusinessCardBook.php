<?php
declare(strict_types = 1);

namespace Packages\Domain\Model\BusinessCardBook;

class BusinessCardBook
{
    /**
     * @var BusinessCardBookId
     */
    private $id;
    /**
     * @var HeldBusinessCardList
     */
    private $list;

    public function __construct(BusinessCardBookId $id, HeldBusinessCardList $list)
    {
        $this->id   = $id;
        $this->list = $list;
    }
}
