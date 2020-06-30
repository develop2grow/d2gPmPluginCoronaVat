<?php

namespace d2gPmPluginCoronaVat\Widgets;

use Ceres\Widgets\Helper\BaseWidget;
use Ceres\Widgets\Helper\Factories\WidgetSettingsFactory;
use Ceres\Widgets\Helper\WidgetCategories;
use Ceres\Widgets\Helper\Factories\WidgetDataFactory;
use Ceres\Widgets\Helper\WidgetTypes;

class VatWidget extends BaseWidget
{
    protected $template = "d2gPmPluginCoronaVat::Widgets.VatWidget";

    protected function getPreviewData($widgetSettings)
    {

    }

    public function getData():array
    {
        return WidgetDataFactory::make("d2gPmPluginCoronaVat::vatWidget")
            ->withLabel("Widget.vatWidgetLabel")
            ->withPreviewImageUrl("/images/CoronaVAT.svg")
            ->withType(WidgetTypes::DEFAULT)
            ->withCategory(WidgetCategories::TEXT)
            ->withPosition(900)
            ->toArray();
    }

    public function getSettings():array
    {
        /** @var WidgetSettingsFactory $settings */
        $settings = pluginApp(WidgetSettingsFactory::class);

        $settings->createCustomClass();
        $settings->createSpacing();

        return $settings->toArray();
    }
}
