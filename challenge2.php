<?php
function IsPalindrome($string){
        if(strrev($string) == $string){
            echo('yes');
        }
        else{
            echo('no!');
        }
    }
    
    IsPalindrome("joao"); //no
    IsPalindrome("ana"); //yes
?>
