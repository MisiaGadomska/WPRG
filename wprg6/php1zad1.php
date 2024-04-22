<?php 
function liczby_pierwsze($liczba){
	if ($liczba <=1) {
	return false;
    }
for ($i = 2; $i <= sqrt($liczba); $i++)		{
	if ($liczba % $i == 0){
	return false;
	}
}
return true;
}

function pokaz_pierwsze($a, $b){
	for ($i = $a; $i <= $b; $i++){
    	if(liczby_pierwsze($i)){
        echo $i . " ";
        }
    }
}

$a = 1;
$b = 50;
echo "Liczby pierwsze to: \n";
pokaz_pierwsze($a, $b);

?>
