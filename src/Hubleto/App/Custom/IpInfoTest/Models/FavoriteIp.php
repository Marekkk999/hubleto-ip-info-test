<?php

namespace Hubleto\App\Custom\IpInfoTest\Models;

use Hubleto\Framework\Database\Model;

class FavoriteIp extends Model
{
    // pridat nazov table do db - fav ips a vyplnit stlpce
    protected $table = 'favorite_ips';
    protected $fillable = [
        'ip',
        'country',
        'region',
        'city',
        'timezone'
    ];
}
