# Send an SMS with PHP and Twilio's Programmable Messaging API

[![License](https://img.shields.io/badge/License-Apache--2.0-blue)](#license)
[![Issues](https://img.shields.io/github/issues/settermjd/send-sms-with-php-and-twilio)](https://github.com/settermjd/send-sms-with-php-and-twilio/issues)
![GitHub Release](https://img.shields.io/github/v/release/settermjd/send-sms-with-php-and-twilio)

See how to send an SMS with PHP in one function call; or about seven nicely formatted lines of code.

## Getting Started

### Requirements

To use the code, you need the following:

- [PHP](https://php.net) 8.3
- [Composer](https://getcomposer.org) installed globally
- A Twilio account (free or paid). If you are new to Twilio, [click here to create a free account](https://www.twilio.com/referral/QlBtVJ)

### Setup the code

To use the project only requires three things:

1. Clone the code
1. Install the required dependencies
1. Create a _.env_ file from _.env.example_
1. Set your Twilio credentials and mobile phone number in _.env_
1. Run the code

Do steps 1 - 3 with the following commands:

```php
# Clone the source code locally into a directory named send-sms-with-php-and-twilio
git clone git@github.com:settermjd/send-sms-with-php-and-twilio.git

# Install PHP's dependencies
composer install

cp -v .env.example .env
```

You can retrieve your Twilio credentials and phone number from the [Twilio Console](https://console.twilio.com/).

After running the code, you should receive an SMS to your mobile/cell phone.

## Contributing

This repository is Open Source under the [Apache License 2.0](LICENSE), and is the [copyright of its contributors](NOTICE). 
If you would like to contribute to the software, you must:

1. Read the [Developer Certificate of Origin Version 1.1]()
2. Sign all commits to the project

This ensures that users, distributors, and other contributors can rely on all the software related to Daytona being contributed under the terms of the [License](LICENSE). No contributions will be accepted without following this process.

Afterward, navigate to the [contributing guide](CONTRIBUTING.md) to get started.

## License

This repository is covered under the [Apache License 2.0](LICENSE), except where noted.

## Code of Conduct

This project has adapted the Code of Conduct from the [Contributor Covenant](https://www.contributor-covenant.org/). For more information see the [Code of Conduct](CODE_OF_CONDUCT.md) or contact [matthew@matthewsetter.com](mailto:matthew@matthewsetter.com) with any additional questions or comments.