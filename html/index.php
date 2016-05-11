<?php
  require 'include/header.php';
	require __DIR__ . '/vendor/autoload.php';
	$result = new WhichBrowser\Parser(getallheaders());

  //echo '<p>Browser: ' . $result->browser->toString() . '</p>';
  //echo $result->toString();
?>
<h1>Browser History</h1>

<?php
  require 'include/firefox/history.php';
  require 'include/footer.php';
?>
