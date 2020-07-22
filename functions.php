<?php
    //To explode by multi charactor
    function multiexplode ($delimiters,$string) {
        $ready = str_replace($delimiters, $delimiters[0], $string);
        $launch = explode($delimiters[0], $ready);
        return  $launch;
    }

    //To remove empty words
    function removeEmptyWords($words){
        for($i=0; $i<count($words); $i++){
            if($words[$i] == ""){
                \array_splice($words, $i, 1);
                $i--;
            }
        }
        return $words;
    }

    //To compare function
    function compareFullnames($ffname, $sfname){
        //get words from fullnames
        $fWords = removeEmptyWords(multiexplode(array(",", " ", "."), strtoupper($ffname)));
        $sWords = removeEmptyWords(multiexplode(array(",", " ", "."), strtoupper($sfname)));
        //check is valid
        
        var_dump($sWords);
        return false;
    }
?>