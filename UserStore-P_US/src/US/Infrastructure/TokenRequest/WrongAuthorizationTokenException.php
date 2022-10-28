<?php

declare(strict_types=1);

namespace App\US\Infrastructure\TokenRequest;

use App\US\Shared\Exception;

final class WrongAuthorizationTokenException extends Exception
{
}
