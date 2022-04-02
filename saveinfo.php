<?php
 
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
  
    $filename = getcwd() . "/soldcells.txt";
    $line_i_am_looking_for = $id-1;
    $lines = file( $filename , FILE_IGNORE_NEW_LINES );
    $lines[$line_i_am_looking_for] = '0';
    file_put_contents( $filename , implode( "\n", $lines ) );
    
    
    header("Location: https://forms.office.com/Pages/ResponsePage.aspx?id=CMLpDBt9rU-Cyxpwj4U9ESxi1HBvv6JOqLt6Ggc3H69UMVJBVk0yMjhONlExT0NRNDZCQko2SjI5Ti4u");
    exit;
    
    
} else {
    header("Location: http://www.andreasb.one/HUST/index.html");
    exti;
    
}

 
    
    
    

?>

