<!DOCTYPE html>
<html lang="en">
<?php
\runner::route("head");
?>
<body>

<?php
\runner::route("body");
?>

<?php
\runner::route("foot");
?>
<?php
echo \runner::js_after();
?>
<noscript>Nincs engedélyezve a Javascript használata! Enélkül az oldal nem működőképes!</noscript>

</body>
</html>