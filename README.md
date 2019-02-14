# unifonic
The Unifonic integration for the Yii framework

### Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).
To install it, either run
```
$ composer require alaaaq80/yii2-unifonic:master-dev
```
or add
```
"alaaaq80/yii2-unifonic":"master-dev"
```
to the require section of your composer.json file.

### Usage
```
use alaaaq80\unifonic\src\API\Client;

   $client = new Client('YOUR_APPSID');
   $client->Messages->Send('00962XXXXX', 'Your Message', 'Sender');

```
