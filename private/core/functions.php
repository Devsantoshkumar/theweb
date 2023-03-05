<?php


function show($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}


function get_val($key, $default="")
{
  if(isset($_POST[$key]))
  {
    return $_POST[$key];
  }
  return $default;
}

function get_select($key,$value)
{ 
   if(isset($_POST[$key]))
   {
     if($_POST[$key] == $value)
     {
        return "selected";
     }
   }
   return "";
}


function get_date($date)
{
   return date("jS M Y",strtotime($date));
}


function slug($text){
    $text = preg_replace('~[^\\pL\d]+~u','-',$text);
    $text = trim($text,'-');
    $text = iconv('utf-8','us-ascii//TRANSLIT',$text);
    $text = strtolower($text);
    $text = preg_replace('~[^-\w]+~','',$text);
    if(empty($text)){
        return 'n-a';
    }else{
        return $text;
    }
}



function token($length)
{
   $array = array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
   $text = "";
   for($x=0; $x <$length; $x++)
   {
    $random = rand(0,61);
    $text .= $array[$random];
   }
   return $text;
}

?>