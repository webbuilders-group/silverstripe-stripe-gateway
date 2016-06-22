Stripe Payment Gateway
=================
Stripe payment gateway for the SilverStripe payment module

## Maintainer Contact
* Ed Chipman ([UndefinedOffset](https://github.com/UndefinedOffset))

## Requirements
* SilverStripe Framework 3.1+
* [SilverStripe Payment 1.0.x](https://github.com/silverstripe-labs/silverstripe-payment/tree/1.0)


## Installation
* Download the module from here https://github.com/webbuilders-group/silverstripe-stripe-gateway/archive/master.zip
* Extract the downloaded archive into your site root so that the destination folder is called stipe-gateway, opening the extracted folder should contain _config.php in the root along with other files/folders
* Run dev/build?flush=all to regenerate the manifest

If you prefer you may also install using composer:
```
composer require webbuilders-group/silverstripe-stripe-gateway
```


## Usage
To use Stripe as the payment gateway you need to retrive your api key from your [account settings](https://dashboard.stripe.com/account/apikeys) then in your site's config.yml you need to add the following:

```yml
PaymentProcessor:
    supported_methods:
        dev:
            - 'StripePaymentGateway'
        live:
            - 'StripePaymentGateway'

StripeGateway:
    test_api_secret: "YOUR TEST SECRET KEY"
    api_secret: "YOUR LIVE SECRET KEY"
```
