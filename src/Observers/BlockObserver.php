<?php

namespace Lostlink\LaravelBlockchain\Observers;

use Lostlink\LaravelBlockchain\Exceptions\BlockDeleteException;
use Lostlink\LaravelBlockchain\Models\Block;

class BlockObserver
{
    /**
     * Handle the Block "creating" event.
     *
     * @param  Block  $block
     * @return void
     */
    public function creating(Block $block): void
    {
        $block->hash = $block->calculateHash();
    }

    /**
     * @throws BlockDeleteException
     */
    public function deleting(Block $block): void
    {
        throw new BlockDeleteException();
    }

}
