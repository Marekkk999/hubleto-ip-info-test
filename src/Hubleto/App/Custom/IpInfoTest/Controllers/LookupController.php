<?php

namespace Hubleto\App\Custom\IpInfoTest\Controllers;

class LookupController
{
    public function __invoke()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return view('IpInfoTest::form');
        }

                // ziskat len Ip z formulara
        $ip = $_POST['ip'] ?? null;

                // Ip musi byt zadana, inak vratit 'error'
        if (!$ip) {
            return view('IpInfoTest::form', [
                'error' => 'Prosím zadajte IP adresu.'
            ]);
        }

                // pridat externe api
        $json = @file_get_contents("https://api.techniknews.net/ipgeo/$ip");

        $data = json_decode($json, true);

                // zobrazit data v resulte
        return view('IpInfoTest::result', [
            'data' => $data,
            'ip' => $ip
        ]);
    }
}
