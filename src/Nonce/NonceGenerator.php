<?php

namespace OFFLINE\Csp\Nonce;

interface NonceGenerator
{
    public function generate(): string;
}
