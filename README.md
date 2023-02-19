# PPMarket Claim License Helper

This library is created for those of you who sell PHP library packages on [PPMarket.org](https://ppmarket.org/) (PHP Package Market) to protect your library packages from piracy, etc. You can start protecting your application by implementing various logical methods that take into account the license status of the consumer's purchase.

On the PPMarket site, there are two types of licenses that can be purchased by consumers, namely:

- **Single License** : a license that can only be created once.
- **Unlimited License** : a license that can be created more than once.

Of the two types of licenses above, both can only be claimed once, so make sure you run the claim function only in production mode. Alternatively, you can explain to your customers to make a claim in production mode only if you create manual claims.

Install via composer

```bash
composer require ppm/license
```

Claim license

```php

use Exception;
use PpMarket\License\PpmLicense;

. . . 

try {
    
    $ppm = (new PpmLicense)->claim('6fcb7536-bff222-56223a-4835a71913f800db5060');
    
    // Claim success, and run your program logic to protect your package

} catch (Exception $err) {

    // Claim failed, and run your program logic to protect your package
    

}
```