<?php

namespace Vayes\Exception;

use Vayes\Exception\Interfaces\ExceptionInterface;

/**
 * @author Jérôme Tamarelle <jerome@tamarelle.net>
 */
class LogicException extends \LogicException implements ExceptionInterface
{
}
