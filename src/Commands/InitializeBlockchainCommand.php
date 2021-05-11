<?php

namespace Lostlink\LaravelBlockchain\Commands;

use Illuminate\Console\Command;
use Lostlink\LaravelBlockchain\Exceptions\NonEmptyBlockchainException;
use Lostlink\LaravelBlockchain\Models\Block;

class InitializeBlockchainCommand extends Command
{
    public $signature = 'blockchain:initialize';

    public $description = 'Initialize a new Blockchain';

    public function handle(): void
    {
        // TODO: Support multiple parallel blockchains

        if(Block::count() > 0) {
            throw new NonEmptyBlockchainException();
        }

        Block::createWithAttributes([
            'data' => 'Genesis Block',
        ]);

        $this->comment('All done');
    }
}
