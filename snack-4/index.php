<!-- Scrivi una funzione che accetti tre argomenti:
un array e due numeri ("a" più piccolo di "b" e "b" grande al massimo quanto il numero di elementi dell'array).

La funzione ritornerà un nuovo array con i valori che hanno la posizione compresa 
tra "a" e "b" -->

<?php 

    function catchElement($array, $startIndex, $finalIndex){
        $result = [];
        $resultLength = $finalIndex - $startIndex;
        $index = $startIndex;
        for($i=0; $i<$resultLength; $i++){
            array_push($result, $array[$index]);
            $index++;
        };
        return $result;
    };

    $exampleArray = [0,1,2,3,4,5,6,7,8,9,10];
    var_dump(catchElement($exampleArray, 3, 8));
?>