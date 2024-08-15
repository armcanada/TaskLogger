
# Very short description of the package

This package allows us to write the execution of our task to a centralised log for auditing purposes.

## Installation

You can install the package via composer:

```bash
composer require armcanada/tasklogger
```

## Usage
Extend your command class with Armcanada\TaskLogger\Commands\LoggableCommand and then wrap your task handling code in the `logExecution` method.
```php
<?php

namespace  App\Console;
 
use Armcanada\TaskLogger\Commands\LoggableCommand;

class SendTelusLineReport extends LoggableCommand
{
	protected $signature = 'task_signature';
	protected $description = 'Task description';

	public function handle()
	{
		$this->logExecution(function () {
			// Your code goes here
		});
	}
}
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.


### Security

If you discover any security related issues, please email aduhaime@armcanada.ca instead of using the issue tracker.

## Credits

-   [Anthony Duhaime](https://github.com/armcanada)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
