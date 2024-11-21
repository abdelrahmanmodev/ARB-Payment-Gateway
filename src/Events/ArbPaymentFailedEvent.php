<?php

namespace Alaa\Arb\Events;

use Illuminate\Foundation\Events\Dispatchable;

class ArbPaymentFailedEvent
{
    use Dispatchable;

    public function __construct(public array $data)
    {
    }
}
