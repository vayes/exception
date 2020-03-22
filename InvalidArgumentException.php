<?php

namespace Vayes\Exception;

use Vayes\Exception\Interfaces\ExceptionInterface;

/**
 * @author Christian Flothmann <christian.flothmann@sensiolabs.de>
 */
class InvalidArgumentException extends \InvalidArgumentException implements ExceptionInterface
{
}
