<?php

namespace Vayes\Exception;

/**
 * Exception class thrown when a cache file couldn't be written.
 *
 * @author Yahya Erturan <yahya@erturan.com.tr>
 */
class CacheWriteFailException extends IOException
{
    public function __construct(string $message = null, int $code = 0, \Throwable $previous = null, string $path = null)
    {
        if (null === $message) {
            if (null === $path) {
                $message = 'Cache file could not be written.';
            } else {
                $message = sprintf('Cache file "%s" could not be written.', $path);
            }
        }

        if (function_exists('trans')) {
            $message = trans($message);
        }

        parent::__construct($message, $code, $previous, $path);
    }
}
