<?php

namespace Vayes\Exception;

use Vayes\Exception\Interfaces\ExceptionInterface;

/**
 * @author Jérôme Tamarelle <jerome@tamarelle.net>
 */
class RuntimeException extends \RuntimeException implements ExceptionInterface
{
}
