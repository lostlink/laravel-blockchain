<?php

namespace Lostlink\LaravelBlockchain\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Block extends Model
{
    use HasFactory;

    protected $table = "laravel_blockchain_blocks";

    public $timestamps = false;

    protected $guarded = [];

    protected $casts = [
        'data' => 'array',
        'created_at' => 'datetime',
    ];

    public static function createWithAttributes(array $attributes): Block
    {
        $attributes['previousHash'] = optional((new Block)->getLastBlock())->hash;
        $attributes['nonce'] = Carbon::now()->timestamp;
        $attributes['created_at'] = Carbon::now();

        return self::create($attributes);
    }

    public function getLastBlock()
    {
        return $this->orderBy('id', 'desc')->first();
    }

    public function calculateHash()
    {
        return hash(
            "sha256",
            collect([
                $this->previousHash,
                $this->created_at->timestamp,
                collect($this->data)->sortDesc()->toJson(),
                $this->nonce,
            ])->implode('')
        );
    }
}
