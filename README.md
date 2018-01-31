# service-config

Service config interface and attendant entities and their interfaces too.

# usage

````php
use deflou\components\services\configs\ServiceConfigBase;

$config = [...];// define service configuration
$serviceConfig = new ServiceConfigBase($config);

echo $serviceConfig->getSericeName() . '<pre>';
print_r($serviceConfig->__toArray());
````