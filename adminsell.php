<?php
 
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
  
    $filename = getcwd() . "/soldcells.txt";
    $line_i_am_looking_for = $id-1;
    $lines = file( $filename , FILE_IGNORE_NEW_LINES );
    $lines[$line_i_am_looking_for] = '1';
    file_put_contents( $filename , implode( "\n", $lines ) );
    
    
    header("Location: http://www.andreasb.one/HUST/index.html");
    exit;
    
    
} else {
    header("Location: http://www.andreasb.one/HUST/index.html");
    exti;
    
}

 
    
    
    

?>

