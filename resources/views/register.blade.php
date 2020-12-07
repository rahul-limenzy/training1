
<html>
<body>

<?php
if(isset($_GET['num']))
{
    $x = $_GET["num"];
    DB::insert('insert into inputnum (number) values (?)', [$x]);
for($z = 1; $z<=$x; $z++)
{
    for($y=1;$y<$z;$y++)
    echo "$y";
    echo "<br>";
}
}
else
{

    echo "today is ";
    echo date("d/m/y");
}

?>
</body>
</html>