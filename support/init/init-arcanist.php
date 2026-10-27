<?php

require_once dirname(__FILE__).'/init-script.php';

$runtime = new ArcanistRuntime();
$err = $runtime->execute($argv);
if ($err === null) {
  $err = 0;
}

exit($err);
