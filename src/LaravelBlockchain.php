<?php

namespace Lostlink\LaravelBlockchain;

use ArkEcosystem\Crypto\Identities\Address;
use ArkEcosystem\Crypto\Identities\PrivateKey;
use ArkEcosystem\Crypto\Identities\PublicKey;
use BitWasp\Bitcoin\Mnemonic\MnemonicFactory;
use Lostlink\LaravelBlockchain\Models\Block;

class LaravelBlockchain
{
    public string $passphrase;
    public string $private_key;
    public string $public_key;
    public string $address;

    public function __construct($passphrase = null)
    {
        $this->passphrase = $passphrase ?? MnemonicFactory::bip39()->create();
    }

    public function make(): self
    {
        return $this
            ->createPrivateKey()
            ->createPublicKey()
            ->createAddress();
    }

    public function createPrivateKey(): self
    {
        $this->private_key = PrivateKey::fromPassphrase($this->passphrase)->getHex();

        return $this;
    }

    public function createPublicKey(): self
    {
        $this->public_key = PublicKey::fromPassphrase($this->passphrase)->getHex();

        return $this;
    }

    public function createAddress(): self
    {
        $this->address = Address::fromPassphrase($this->passphrase);

        return $this;
    }

    /**
     * Validates the blockchain's integrity. True if the blockchain is valid, false otherwise.
     * @throws \Exception
     */
    public function isValid(): bool
    {
        Block::all()
            ->reduce(function ($previousHash, $block) {
                if($block->previousHash !== $previousHash || $block->hash !== $block->calculateHash())
                {
                    throw new \Exception('Invalid Blockchain');
                }
                return $block->hash;
            });

        return true;
    }

    /**
     * Pushes a new block onto the chain.
     */
    public function pushTransaction($data): self
    {
        Block::createWithAttributes([
            'data' => $data,
        ]);

        return $this;
    }

    public function pushMessage($data): self
    {
        Block::createWithAttributes([
            'data' => $data,
        ]);

        return $this;
    }


}
