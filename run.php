<?php  
function save($filename, $email)
{
    $save = fopen($filename, "a");
    fputs($save, "$email\r\n");
    fclose($save);
}
    function dot($str){  
        if ((strlen($str) > 1) && (strlen($str) < 31)) {  
            $ca = preg_split("//",$str);  
            array_shift($ca);  
            array_pop($ca);  
            $head = array_shift($ca);  
            $res = dot(join('',$ca));  
            $result = array();  
            foreach($res as $val){  
                $result[] = $head . $val;  
                $result[] = $head . '.' .$val;  
            }  
            return $result;  
        }  
        return array($str);  
    }  

$res = dot(readline("Username (tanpa @gmail.com): "));  
$sav = readline("Save kemana lur? (tanpa .txt): ");
foreach($res as $val){
    save($sav.".txt", $val); 
    echo $val."\n"; 
} 
?>
