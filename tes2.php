<!DOCTYPE html>
<html><body>
    <h1><?php
        $var1 = 10;
        $var2 = 20;
        echo "server output:", $var1 * var2;
    ?>
    <div id = "client"></div>
    <script>
        var var1 = 10;
        var var2 = 30;
        var hasil = "client output: " + var1 *var2;
        document.querySelector(#client").innerHTML = hasil;
    </script>
</body></html>