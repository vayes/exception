<?php

namespace Vayes\Exception;

/**
 * Exception thrown when a required option is missing.
 *
 * Add the option to the passed options array.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class MissingOptionsException extends InvalidArgumentException
{
}
