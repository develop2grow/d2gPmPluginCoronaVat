<?php

namespace d2gPmPluginCoronaVat\Containers;

use Plenty\Plugin\Templates\Twig;

class VatWidgetContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('d2gPmPluginCoronaVat::VatContainer');
    }
}