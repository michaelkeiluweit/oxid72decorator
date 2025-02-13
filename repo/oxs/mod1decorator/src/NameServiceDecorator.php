<?php
declare(strict_types=1);


namespace OxidSupport\Mod1Decorator;

class NameServiceDecorator
{
    use HelperTrait;
    
    public function getName(): string
    {
        return 'mod1decorator';
    }
}
