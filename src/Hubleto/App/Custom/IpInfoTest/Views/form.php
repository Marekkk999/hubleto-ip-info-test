<h2>IP Info</h2>

<?php 
                // vypisat error ak je
if (!empty($error)): ?>
    <p style="color:red;"><?= $error ?></p>
<?php endif; ?>

                <!-- form - napis ip -->
<form method="POST" action="/ipinfo">
    <label>Type IP address:</label><br>
    <input type="text" name="ip" required>
    <br>
    <button type="submit">Search</button>
</form>
