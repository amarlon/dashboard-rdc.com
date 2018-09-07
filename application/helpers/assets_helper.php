<?php
 
/**
  *@var insert ton url sur base_url
  *{ca permet de recevoir ton url, tu dois ecrire cela car c'est important, sans / au dernier}
*/

/** 

/**
  *@function le type la variable 
  *{css_url : pour le varible css , il suffit de mettre css_url('style') sans le css et lui meme va faire les chemin }
*/

if ( ! function_exists('css_url'))

{

    function css_url($nom)

    {

        return base_url() . 'assets/css/' . $nom . '.css';

    }

}
if ( ! function_exists('vendors'))

{

    function vendors($nom)

    {

        return base_url() . '/assets/vendors/' . $nom . '.css';

    }

}
if ( ! function_exists('vendors_jss'))

{

    function vendors_jss($nom)

    {

        return base_url() . '/assets/vendors/' . $nom . '.js';

    }

}
if ( ! function_exists('build_js'))

{

    function build_js($nom)

    {

        return base_url() . '/assets/build/' . $nom . '.js';

    }

}
if ( ! function_exists('build'))

{

    function build($nom)

    {

        return base_url() . '/assets/build/' . $nom . '.css';

    }

}


/**
  *@function pour javascript
  *{css_url : pour le varible css , il suffit de mettre css_url('script') sans le js et lui meme va faire les chemin }
*/

if ( ! function_exists('js_url'))

{

    function js_url($nom)

    {

        return base_url() . 'assets/js/' . $nom . '.js';

    }

}
/**
  *@function pour les images 
  *{css_url : pour le varible css , il suffit de le mettre dans les src en images lui meme il fera le chemein donc c est src= '<?php img_url()?> ' }
*/

if ( ! function_exists('img_url'))

{
    function img_url($nom)

    {
        return base_url() . 'assets/uploads/img/' . $nom;
    }

}

/**
  *@function pour les images 
  *{css_url : pour le varible css , il suffit de le mettre dans les src en images lui meme il fera le chemein donc c est src= '<?php img_url()?> ' il est indetique au premier mais unpeu different}
*/

if ( ! function_exists('img'))

{

    function img($nom, $alt = '', $className='', $width="", $height="")

    {

        return '<img class="'.$className.'" src="' . img_url($nom) . '" alt="' . $alt . '" width="' . $width . '" height="' . $height . '" />';

    }

}
/**
  *@function view  
  * il sera utiliser apres ' }
*/
if ( ! function_exists('view'))

{
    function view($nom)

    {
        return base_url() . '/views/' . $nom . '.php';
    }

}
/**
  *@function pour le comptage du temps 
  * il sera utiliser apres ' }
*/
if ( ! function_exists('view'))

{
    function view($nom)

    {
        return base_url() . '/views/' . $nom . '.php';
    }

}

if(!function_exists('comptime')){
    function comptime($time){
        $old_date=strtotime($time);
        $dif=time()-$old_date;
        $hour=$dif/3600;
        if($hour<=24){
            if($hour>=1){
                $var = $hour;
                $whole = floor($var);     // 1
                $decimal = fmod($var, 1);
                return floor($hour).'h ';
            }
            else{
               if($dif>=60){
                   $min=$dif/60;
                   return floor($min).' min';
               }else{
                return $dif.' sec';
               }
            }
        }else{
            $day= $hour/24;
            if($day<2){
            $c='day';
            }else{
                 $c='days';
            }
            if($day>30){
                $month=$day/30;
                return floor($month). 'month';
            }else{
                return floor($day).' '.$c;
            }
        } 
    }
}
 /**
 * Permet de sécuriser une chaine de caractères
 * @param $string
 * @return string
 */
function str_secur($string) {
    return trim(htmlspecialchars($string));
}

/**
 * Debug plus lisible des différentes variables
 * @param $var
 */
function debug($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}