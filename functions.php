<?php
require_once("test.php");
//renvoi la longueur tableau 
function long_chaine($chaine){
$i=0;                         
while(isset($chaine[$i])){
$i++;
}
return $i;
}
//permet de tester si la caractere passee est en chiffre
    function is_car_numeric ($c){
        if ($c >= '0' &&  $c <= '9'){
            return true;
        }
        return false;
    }
    //permet de tester si un caractere est alphabetique
    function is_car_alpha($car){
        if( long_chaine($car)==1 && ($car >='a' && $car <='z') || ($car>='A' && $car<='Z')){
            return true;
        }
        return false;
    }
    //permet de tester si une chaine est alphabetique
    function is_chaine_alpha($chaine){
        for($i=0;$i<long_chaine($chaine);$i++){
        If (!is_car_alpha($chaine[$i])){
        
        return false;
        }
        
        }
        return True ;
        }
        //permet de tester si une chaine est numeric
        function is_chaine_numeric($chaine){
            for ($i=0;$i<long_chaine($chaine);$i++){
                if (!is_car_numeric($chaine[$i])){
                    return false;
                }
            }
            return true;
        }
        //qui permet d'inverser la casse d'une lettre
        function invers_car_case($car){
            $min='a';
            $maj='A';
            if(long_chaine($car)==1){
            for($i=0;$i<26;$i++){
                if($car==$maj){
                    return $min;
                }elseif($car==$min){
                    return $maj;
                }
                $min++;
                $maj++;
            }
            return$car;
        }
    }
    //permet de tester si une chaine est ide ou pas
    function is_empty($chaine){
        $vid=0;
        if(long_chaine($chaine)==$vid){
            return true;
        }
        return false;
    }
    //présence de caractere dans une chaine
    function is_car_present_in_chaine($car,$chaine){
        for ($i=0;$i<long_chaine($chaine);$i++){
            if ($chaine[$i] == $car || $chaine[$i] == invers_car_case($car)){
                return true;
            }
        }
        return false;
    }
        
    //permet de supprimer les espaces de devant ou de derriere d'une chaine 
    function delete_spc_before_after($chaine){
          $debut=0;
          $fin=long_chaine($chaine)-1;
          $newchaine="";
          if($chaine==""){
              return $chaine;
          }
          while($chaine[$debut]==''){
              $debut++;
         
          if(!isset($chaine[$debut])){
              return "";  
            }
          }
          while($chaine[$fin]==''){
              $fin--;
          }
          for($i=$debut;$i<=$fin;$i++){
              $newchaine=$chaine[$i];
          }
          return $newchaine;
    }
    //function nbr_caractere ($c){

    //     if (strlen($c) <= 200 ){
    //         $bool= true;
    //     }else{
    //         $bool = false;
    //     }
    //     return $bool;
    // }
    //fonctionnalité f1
    function is_chaine_setence($phrase){
           if(isset($phrase)){
               if(preg_match('#^[A-Z](.){1,}[\.\!\?]$#',$phrase)){
                   return $phrase;
               }
           }
           
       }
       //fonctionnalité f2
       function is_cut_sentence($phrases){
           $sentences=[];
           //if( is_chaine_setence($phrase)){
              $tabphrases=preg_split("/([.?!])+/",$phrases,-1,PREG_SPLIT_DELIM_CAPTURE); 
             for ($i=0; isset($tabphrases[$i]); $i++){
                 if(!is_empty($tabphrases[$i])){
                     if($tabphrases[$i]!='.' && $tabphrases[$i]!='!' && $tabphrases[$i]!= '?'  ){
                         if(isset($tabphrases[$i+1])){
                                    $sentences[]=$tabphrases[$i].$tabphrases[$i+1];
                         }
                         else
                         {
                            $sentences[]=$tabphrases[$i];
                         }
                     }
                 }
             }
        //}
            return $sentences;
       }
       //fonctionnalité f3
       function is_space_sentence($phrase ){
         if( is_chaine_setence($phrase)){
            $pattern='%\s+%';
            $replacement=" ";
            $replacement=preg_replace($pattern,$replacement,$phrase);
           
       }
       return $replacement;
    }
    function print_error($tab){
        $chaine = "";
        foreach ($tab as $t){
            $chaine .= $t."";
        }
        return $chaine;
    }