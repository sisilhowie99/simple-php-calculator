<html>
    <body>
        <!-- Print content of calculation -->
        <h1>Result</h1>
        <p>
        <?= "The output of ${_GET['num1']} / ${_GET['num2']} is "; ?>
        <?= $_GET['num1'] / $_GET['num2']; ?>
        </p>

        <p>Click the reset button below to restart</p>
        <a href="index.php">Reset</a>
    </body>
</html>