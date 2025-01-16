```
composer config repositories.oxid-support/mod1decorator path repo/oxs/mod1decorator
```
```
composer require oxid-support/mod1decorator --no-interaction && ./vendor/bin/oe-console o:m:d oxs_mod1deco && ./vendor/bin/oe-console o:m:a oxs_mod1deco && ./vendor/bin/oe-console o:c:c
```