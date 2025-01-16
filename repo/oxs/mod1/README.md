```
composer config repositories.oxid-support/mod1 path repo/oxs/mod1
```
```
composer require oxid-support/mod1 --no-interaction && ./vendor/bin/oe-console o:m:d oxs_mod1 && ./vendor/bin/oe-console o:m:a oxs_mod1 && ./vendor/bin/oe-console o:c:c
```