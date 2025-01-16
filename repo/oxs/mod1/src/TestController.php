<?php

declare(strict_types=1);

namespace OxidSupport\Mod1;

use OxidEsales\Eshop\Application\Controller\FrontendController;
use OxidEsales\EshopCommunity\Core\Di\ContainerFacade;

class TestController extends FrontendController
{
    public function render()
    {
        echo ContainerFacade::get(NameService::class)->getName();
        //echo ContainerFacade::get(NameService::class)->test(); // uncomment only if mod1decorator is active
    }
}
