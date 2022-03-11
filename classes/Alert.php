<?php
class Alert{
    
    static function message(string $message , $Fontcolor ,$background ){
    return '<p style=background-color:'.$background.';color:'.$Fontcolor.';text-align:center;padding:10px 0">'.$message.'</p>';

    }
}
?>