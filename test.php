<?php
require_once("pg.php");
class PGTest extends PHPUnit_Framework_TestCase {
  public function test() {
    $pg = new PG();
    $doc = $pg->main();
    $this->assertNotEquals($doc, false);
  }
}
?>

