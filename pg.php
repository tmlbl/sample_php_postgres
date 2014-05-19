<?php
class PG {
  public static function main() {
    if (!extension_loaded("pgsql")) {
      dl("pgsql.so");
    }
    $con=pg_connect("host=127.0.0.1 dbname=test user=postgres");
    $q="DROP TABLE IF EXISTS things";
    pg_query($con, $q);
    $q="CREATE TABLE things (name varchar(20))";
    pg_query($con, $q);
    $q="INSERT INTO things(name) VALUES('Dre')";
    pg_query($con, $q);
    $q="SELECT * FROM things";
    return pg_query($con, $q);
  }
}
?>

