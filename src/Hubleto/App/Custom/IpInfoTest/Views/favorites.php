<h2>Your favorite Ip's</h2>

                <!--zobrazit vsetky fav ip-->
<ul>
    <!--zoznam ip + podrobne udaje -->
<?php foreach ($list as $item): ?>
    <li>
        <strong><?= $item->ip ?></strong>
        – <?= $item->country ?>, <?= $item->city ?>, <?= $item->region ?>, <?= $item->timezone ?>
    </li>
<?php endforeach; ?>
</ul>
