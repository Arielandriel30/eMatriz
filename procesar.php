<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
<?php  
//se inicia el array 
$arr = array(1, 2, 3, 4, 5);   
//cantidad de veces que se rota ingresado por teclado 
$n = $_POST['numero'];
//$n= 8; esta opción es si se determina un numero fijo de veces para rotar
   
//se muestra el array original
print("Matriz original: <br>");  
for ($i = 0; $i < count($arr); $i++) {   
    print($arr[$i] . " ");   
}    
      
//se rota el array 
for ($i = 0; $i < $n; $i++){  
   
    $first = $arr[0];  
      
    for($j = 0; $j < count($arr)-1; $j++){  
       //se cambia el elemento de la matriz  
        $arr[$j] = $arr[$j+1];  
    }  
   //primer elemento de la matriz al final  
    $arr[$j] = $first;  
}  
   
print("<br>");  
   
//se muestra el array rotado  
print("La matriz rot&oacute; $n veces a la izquierda <br>");  
for ($i = 0; $i < count($arr); $i++) {   
    print($arr[$i] . " ");   
}      

?>

<form action="index.php" method="post">
 
 <input type="submit" value="Volver"/>
</form>
</body>
</html>