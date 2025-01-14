<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

use Schmeits\FilamentPanAnalyticsWidget\FilamentPanAnalyticsWidgetPlugin;
use Schmeits\FilamentPanAnalyticsWidget\Widgets as PanAnalyticsWidgets;

use Schmeits\FilamentUmami\FilamentUmamiPlugin;
use Schmeits\FilamentUmami\Widgets\UmamiWidgetGraphEvents;
use Schmeits\FilamentUmami\Widgets\UmamiWidgetGraphPageViews;
use Schmeits\FilamentUmami\Widgets\UmamiWidgetGraphSessions;
use Schmeits\FilamentUmami\Widgets\UmamiWidgetStatsBounces;
use Schmeits\FilamentUmami\Widgets\UmamiWidgetStatsGrouped;
use Schmeits\FilamentUmami\Widgets\UmamiWidgetStatsLiveVisitors;
use Schmeits\FilamentUmami\Widgets\UmamiWidgetStatsPageViews;
use Schmeits\FilamentUmami\Widgets\UmamiWidgetStatsTotalTime;
use Schmeits\FilamentUmami\Widgets\UmamiWidgetStatsVisitors;
use Schmeits\FilamentUmami\Widgets\UmamiWidgetStatsVisits;
use Schmeits\FilamentUmami\Widgets\UmamiWidgetTableBrowser;
use Schmeits\FilamentUmami\Widgets\UmamiWidgetTableCity;
use Schmeits\FilamentUmami\Widgets\UmamiWidgetTableCountry;
use Schmeits\FilamentUmami\Widgets\UmamiWidgetTableDevice;
use Schmeits\FilamentUmami\Widgets\UmamiWidgetTableEvents;
use Schmeits\FilamentUmami\Widgets\UmamiWidgetTableGroupedClientInfo;
use Schmeits\FilamentUmami\Widgets\UmamiWidgetTableGroupedGeo;
use Schmeits\FilamentUmami\Widgets\UmamiWidgetTableGroupedPages;
use Schmeits\FilamentUmami\Widgets\UmamiWidgetTableLanguage;
use Schmeits\FilamentUmami\Widgets\UmamiWidgetTableOs;
use Schmeits\FilamentUmami\Widgets\UmamiWidgetTableQuery;
use Schmeits\FilamentUmami\Widgets\UmamiWidgetTableReferrers;
use Schmeits\FilamentUmami\Widgets\UmamiWidgetTableRegion;
use Schmeits\FilamentUmami\Widgets\UmamiWidgetTableScreen;
use Schmeits\FilamentUmami\Widgets\UmamiWidgetTableTitle;
use Schmeits\FilamentUmami\Widgets\UmamiWidgetTableUrls;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                // Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                // Widgets\AccountWidget::class,
                // Widgets\FilamentInfoWidget::class,

                // this is the grouped stats widget
                // UmamiWidgetStatsGrouped::class,

                // these are the separate stats widgets
                // UmamiWidgetStatsLiveVisitors::class,
                // UmamiWidgetStatsPageViews::class,
                // UmamiWidgetStatsVisitors::class,
                // UmamiWidgetStatsVisits::class,
                // UmamiWidgetStatsBounces::class,
                // UmamiWidgetStatsTotalTime::class,

                // and some table widgets
                // UmamiWidgetTableUrls::class,
                // UmamiWidgetTableTitle::class,
                // UmamiWidgetTableReferrers::class,
                // UmamiWidgetTableCountry::class,
                // UmamiWidgetTableRegion::class,
                // UmamiWidgetTableCity::class,
                // UmamiWidgetTableDevice::class,
                // UmamiWidgetTableOs::class,
                // UmamiWidgetTableBrowser::class,
                // UmamiWidgetTableLanguage::class,
                // UmamiWidgetTableScreen::class,
                // UmamiWidgetTableEvents::class,
                // UmamiWidgetTableQuery::class,

                // grouped table widgets
                // UmamiWidgetTableGroupedPages::class,
                // UmamiWidgetTableGroupedGeo::class,
                // UmamiWidgetTableGroupedClientInfo::class,

                // chart widgets
                // UmamiWidgetGraphPageViews::class,
                // UmamiWidgetGraphSessions::class,
                // UmamiWidgetGraphEvents::class,

                // this is the pan analytics widget
                PanAnalyticsWidgets\PanAnalyticsTableWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])->plugin(
                // FilamentUmamiPlugin::make(),
                FilamentPanAnalyticsWidgetPlugin::make()->searchable(),
            );
    }
}
