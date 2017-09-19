<?php
/**
 * Created by PhpStorm.
 * User: neal.yip
 * Date: 19/9/2017
 * Time: 17:13
 */

namespace Nealyip\LaravelThrottleRequestException;

use \Illuminate\Routing\Middleware\ThrottleRequests;

class ThrottleRequestsEx extends ThrottleRequests
{


    /**
     * @inheritdoc
     */
    protected function buildResponse($key, $maxAttempts)
    {

        $retryAfter = $this->limiter->availableIn($key);

        throw new TooManyAttemptsException($retryAfter, $maxAttempts, $this->calculateRemainingAttempts($key, $maxAttempts, $retryAfter));
    }
}