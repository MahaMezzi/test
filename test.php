<?php


    function astrologie_signe( $date )
    {
       $astrologie_signe = '';
            
       list ( $annee, $mois, $jour ) = explode ( "-", $date );
            
       if     ( ( $mois == 3 && $jour > 20 ) || ( $mois == 4 && $jour < 20 ) ) {
 
    $astrologie_signe = "Bélier"; }
       elseif ( ( $mois == 4 && $jour > 19 ) || ( $mois == 5 && $jour < 21 ) ) {
 
    $astrologie_signe = "Taureau"; }
       elseif ( ( $mois == 5 && $jour > 20 ) || ( $mois == 6 && $jour < 21 ) ) {
 
    $astrologie_signe = "Gémeaux"; }
       elseif ( ( $mois == 6 && $jour > 20 ) || ( $mois == 7 && $jour < 23 ) ) {
 
    $astrologie_signe = "Cancer"; }
       elseif ( ( $mois == 7 && $jour > 22 ) || ( $mois == 8 && $jour < 23 ) ) {
 
    $astrologie_signe = "Lion"; }
       elseif ( ( $mois == 8 && $jour > 22 ) || ( $mois == 9 && $jour < 23 ) ) {
 
    $astrologie_signe = "Vierge"; }
       elseif ( ( $mois == 9 && $jour > 22 ) || ( $mois == 10 && $jour< 23 ) ) {
 
    $astrologie_signe = "Balance"; }
       elseif ( ( $mois ==10 && $jour > 22 ) || ( $mois == 11 && $jour< 22 ) ) {
 
    $astrologie_signe = "Scorpion"; }
       elseif ( ( $mois ==11 && $jour > 21 ) || ( $mois == 12 && $jour< 22 ) ) {
 
    $astrologie_signe = "Sagittaire"; }
       elseif ( ( $mois ==12 && $jour > 21 ) || ( $mois == 1 && $jour < 20 ) ) {
 
    $astrologie_signe = "Capricorne"; }
       elseif ( ( $mois == 1 && $jour > 19 ) || ( $mois == 2 && $jour < 19 ) ) {
 
    $astrologie_signe = "Verseau"; }
       elseif ( ( $mois == 2 && $jour > 18 ) || ( $mois == 3 && $jour < 21 ) ) {
 
    $astrologie_signe = "Poisson"; }

       return $astrologie_signe;
    }
?>