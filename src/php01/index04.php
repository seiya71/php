<?php
$a = 7;

if ($a === 5) {
    echo "\$aは5です";
} elseif ($a === 7) {
    echo "\$aは7です";
} else {
    echo "\$aは5と7以外です";
}
?>

<?php
$a = 7;

$b = ($a === 7) ? "TRUE" : "FALSE";

echo $b;
