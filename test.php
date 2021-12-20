<?

require(__DIR__ . "/vendor/autoload.php");

$t = new tei187\Slownie\PL("1000", "cad", false, false);

echo $t->output();