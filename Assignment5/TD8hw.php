<html>

<body>
<?php 


function isPrime($number){
    if ($number == 1){
    return 0;
    }
    for ($i = 2; $i < $number; $i++){
        if ($number % $i == 0)
        return 1;
    }
    return 0;
 }
if($_POST!=null){
if(is_numeric($_POST['number'])){
    $number=$_POST['number'];
    $prime=isPrime($number);
    if($prime==0){
        echo "Prime";
    }
    else{
        echo "Not Prime";
    }
}
else{
    echo "Not Number";
}
}


?>
<form method="post">

<p>Please enter a whole number</p>

<p><input type="text" name="number"></p>

<p><input type="submit" value="Submit"></p>


</form>
</body>

    </html>
