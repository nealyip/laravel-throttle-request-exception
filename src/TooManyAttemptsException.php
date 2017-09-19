<?php
/**
 * Created by PhpStorm.
 * User: neal.yip
 * Date: 19/9/2017
 * Time: 17:22
 */

namespace Nealyip\LaravelThrottleRequestException;

class TooManyAttemptsException extends \Exception
{

    /**
     * @var int
     */
    public $retryAfter;

    /**
     * @var int
     */
    public $maxAttempts;

    /**
     * @var int
     */
    public $remaining;

    /**
     * TooManyAttemptsException constructor.
     *
     * @param int $retryAfter  The number of seconds until the "key" is accessible again.
     * @param int $maxAttempts Max attempts
     * @param int $remaining   Remaining count
     */
    public function __construct($retryAfter, $maxAttempts, $remaining)
    {

        $this->retryAfter  = $retryAfter;
        $this->maxAttempts = $maxAttempts;
        $this->remaining   = $remaining;

        parent::__construct('Too Many Attempts.');
    }
}