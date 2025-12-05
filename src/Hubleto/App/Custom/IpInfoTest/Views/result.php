<h2>Your IP: <?= htmlspecialchars($ip) ?></h2>

<pre><?php print_r(value: $data); ?></pre>

<form method="POST" action="/favorites">

    <?php 
    foreach ($data as $key => $value): ?>
        <input type="hidden" 
               name="<?= $key ?>" 
               value="<?= htmlspecialchars($value) ?>">
    <?php endforeach; ?>

    <button type="submit">Add to favorites</button>
</form>
