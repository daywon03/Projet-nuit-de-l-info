$name = $_POST["name"];

$hostname = "postgres://zzzzzz-5572.postgresql.a.osc-fr1.scalingo-dbs.com";
$base = "zzzzzz_5572";
$loginBD = "testtest";
$passBD = "testtest";

$bdd = new PDO ( "mysql:server=$hostname; dbname=$base;sslmode=require;sslrootcert=[path]/ca.crt", "$loginBD", "$passBD"));

$request = $bdd.prepare("select * from utilisateur");
$request->execute();
$result = $request->fetchAll();

echo $result;
