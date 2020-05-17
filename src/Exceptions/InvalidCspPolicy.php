<?php

namespace OFFLINE\Csp\Exceptions;

use Exception;
use OFFLINE\Csp\Policies\Policy;

class InvalidCspPolicy extends Exception
{
    public static function create($class): self
    {
        $className = get_class($class);

        return new self("The CSP class `{$className}` is not valid. A valid policy extends ".Policy::class);
    }
}
