<?php

namespace Vayes\Exception;

use Vayes\Exception\Interfaces\ExceptionInterface;

/**
 * Represents an incorrect option name typed in the console.
 *
 * @author Jérôme Tamarelle <jerome@tamarelle.net>
 */
class InvalidOptionException extends \InvalidArgumentException implements ExceptionInterface
{
}
