<?php

namespace Hubleto\App\Custom\IpInfoTest\Controllers;

use Hubleto\App\Custom\IpInfoTest\Models\FavoriteIp;

class FavoritesController
{
    public function __invoke()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                // ulozit info do db
            FavoriteIp::create([
                'ip'      => $_POST['ip'],
                'country' => $_POST['country'] ?? '',
                'region'  => $_POST['region'] ?? '',
                'city'    => $_POST['city'] ?? '',
                'timezone'=> $_POST['timezone'] ?? ''
            ]);

                // vratit fav ip
            return redirect('/favorites');
        }

                // pridat list z db - vsetky fav ip a zobrazit ich
        $list = FavoriteIp::all();
        
        return view('IpInfoTest::favorites', [
            'list' => $list
        ]);
    }
}
