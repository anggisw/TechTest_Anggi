<div align="center" style="padding-top:50px">
<form method="post" action="3_operator_logic.php" >
<table>
<tr>
					<td width="45%">Nilai 1</td>
					<td width="55%"><input type="number" name="a" required></td>
				</tr>
				<tr>
					<td>Nilai 2</td>
					<td><input type="number" name="b" required></td>
				</tr>
                <tr>
					<td colspan="2" align="center" style="padding-top:20px">
						<input type="submit" name="submit" value="Hitung">
						<input type="reset" name="reset" value="Reset">
					</td>
				</tr>
</table>	
</form>
<!-- </div> -->
<?php

//$a = 9;
//$b = 29;
if(isset($_POST['submit'])){
    $a = $_POST['a'];
    $b = $_POST['b'];

if($a > $b )
{

    $c = $b;
    for ($i=1; $b <= $a ; $i++) { 
        $b= $c*$i;
        $cetak=$i;
        //echo $i.' x '.$c.' = '.$b.'<br>';
    }
        $cetak = $cetak - 1 ;
        echo 'hasil dari '.$a.' dibagi '.$c.' adalah '.$cetak ;

}else {

$c = $a;
for ($i=1; $a <= $b ; $i++) { 
    $a= $c*$i;
    $cetak=$i;
    //echo $i.' x '.$c.' = '.$a.'<br>';
}
    $cetak = $cetak - 1 ;
    //$cetak = abs($cetak);
    echo 'hasil dari '.$b.' dibagi '.$c.' adalah '.$cetak ;
}}
?>