<?php
include('../../Conection/bd.php');
$idcl=$_POST['lbidcl'];
$iddg=$_POST['lbiddg'];
$nom=$_POST['txt1'];
$app=$_POST['txt2'];
$apm=$_POST['txt3'];
$cor=$_POST['txt4'];
$tel=$_POST['txt5'];
$ident=$_POST['txt6'];
$idtipoiden=$_POST['cbx1'];
echo $idtipoiden;
$query="call pc_ecl('$idcl','$idtipoiden','$iddg','$nom','$app','$apm','$cor','$tel','$ident');";
try {
    $result=mysqli_query($conn,$query) or $r=mysqli_error($conn);
} catch (Exception $r) {
    
}
return header("Location:cliente.php");
?>
