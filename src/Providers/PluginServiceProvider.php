<?php

namespace d2gPmPluginCoronaVat\Providers;

use d2gPmPluginCoronaVat\Widgets\VatWidget;
use IO\Helper\ResourceContainer;
use Plenty\Modules\ShopBuilder\Contracts\ContentWidgetRepositoryContract;
use Plenty\Plugin\Events\Dispatcher;
use Plenty\Modules\Webshop\Template\Providers\TemplateServiceProvider;
use Plenty\Plugin\Templates\Twig;

class PluginServiceProvider extends TemplateServiceProvider
{
    const PRIORITY = 0;

    public function register()
    {

    }

    public function boot(Twig $twig, Dispatcher $eventDispatcher)
    {
        $eventDispatcher->listen('IO.Resources.Import', function (ResourceContainer $container){
            $container->addStyleTemplate('d2gPmPluginCoronaVat::stylesheet');

        }, self::PRIORITY);

        /** @var ContentWidgetRepositoryContract $widgetRepository */
        $widgetRepository = pluginApp(ContentWidgetRepositoryContract::class);
        $widgetRepository->registerWidget(VatWidget::class);
    }
}