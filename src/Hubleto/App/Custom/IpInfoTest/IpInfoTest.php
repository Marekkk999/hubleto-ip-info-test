<?php

namespace Hubleto\App\Custom\IpInfoTest;

use Hubleto\Framework\App\BaseApp;

class IpInfoTestApp extends BaseApp
{
                // pridat nazov aplikacie
    public function getName(): string
    {
        return "IpInfoTest";
    }

    public function boot(): void
    {
                // pridat dva routy app + kam sa co savne
                // ipinfo - lookupcontroller
        $this->route('/ipinfo', Controllers\LookupController::class);

                // /favorites - favoritescontroller
        $this->route('/favorites', Controllers\FavoritesController::class);
    }
}
