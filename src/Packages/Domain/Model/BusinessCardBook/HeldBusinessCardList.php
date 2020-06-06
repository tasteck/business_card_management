<?php

namespace Packages\Domain\Model\BusinessCardBook;

use ArrayIterator;
use IteratorAggregate;

class HeldBusinessCardList implements IteratorAggregate
{
    /**
     * @var HeldBusinessCard[]
     */
    private $held_business_cards;

    public function __construct(array $held_business_cards)
    {
        // todo 型保証する
        $this->held_business_cards = $held_business_cards;
    }

    /**
     * @param HeldBusinessCard $business_card
     *
     * @return HeldBusinessCardList
     */
    final public function add(HeldBusinessCard $business_card): HeldBusinessCardList
    {
        $this->held_business_cards[] = $business_card;
        return new HeldBusinessCardList($this->held_business_cards);
    }

    /**
     * @return ArrayIterator
     */
    final public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->held_business_cards);
    }
}
