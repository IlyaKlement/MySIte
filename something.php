<form action="">
    <input type="text" name="text">
    <input type="submit">
</form>

<?php


    if (isset($_REQUEST['text'])) {
        $array = preg_split('/ /', $_REQUEST['text']);
        
        $min = min($array);
        $max = max($array);
        
        foreach($array as $key => $element) {
            if($element > $max = max($array)) {
                $max = $element;
            }
    
            if($element < $min = min($array)) {
                $min = $element;
            }   
        }
    }
echo "Минимальное значение: $min <br>";
echo "Максимальное занчение: $max" ;



?>