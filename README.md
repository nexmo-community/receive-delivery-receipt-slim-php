![Vonage][logo]

# Receive SMS Delivery Receipt with Slim

This repository is the complete example for the accompanying post at: [Receiving SMS Delivery Receipts with PHP](https://www.nexmo.com/blog/2018/06/25/receiving-sms-delivery-receipts-with-php-dr)

**Table of Contents**

- [Prerequisites](#prerequisites)
- [Getting Started](#getting-started)
- [Code of Conduct](#code-of-conduct)
- [Contributing](#contributing)
- [License](#license)

## Prerequisites

- [A Vonage (formally Nexmo) account](https://dashboard.nexmo.com/sign-up?utm_source=DEV_REL&utm_medium=github&utm_campaign=https://github.com/nexmo-community/receive-delivery-receipt-slim-php)
- [Git](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git)
- [Composer](http://getcomposer.org/)
- [Nexmo CLI](https://github.com/Nexmo/nexmo-cli)

## Getting Started

* Run `composer install`
* Start the web server `php -t . -S 127.0.0.1:3000`
* Run Ngrok `ngrok http 3000`
* Update your `Delivery Recipients` field in your [Vonage settings](https://dashboard.nexmo.com/settings) to be your `Ngrok url` + `/webhooks/delivery-receipt`
* Run: `nexmo sms -f DLRTEST <your_personal_number> "Testing"` Replacing `<your_personal_number>` with a valid phone number

## Code of Conduct

In the interest of fostering an open and welcoming environment, we strive to make participation in our project and our community a harassment-free experience for everyone. Please check out our [Code of Conduct][coc] in full.

## Contributing
We :heart: contributions from everyone! Check out the [Contributing Guidelines][contributing] for more information.

[![contributions welcome][contribadge]][issues]

## License

This project is subject to the [MIT License][license]

[logo]: vonage_logo.png "Vonage"
[contribadge]: https://img.shields.io/badge/contributions-welcome-brightgreen.svg?style=flat "Contributions Welcome"

[coc]: CODE_OF_CONDUCT.md "Code of Conduct"
[contributing]: CONTRIBUTING.md "Contributing"
[license]: LICENSE "MIT License"

[issues]: ./../../issues "Issues"