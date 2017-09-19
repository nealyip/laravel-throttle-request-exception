## Description ##
This class will throw an exception instead of direct output, so that you can use the exception handler.

## Install ##
from app/Http/Kernel.php
replace or add 
 ```php
    'throttle' => \Illuminate\Routing\Middleware\ThrottleRequests::class,
    to 
    'throttle' => \Nealyip\LaravelThrottleRequestException::class;
 ```
 