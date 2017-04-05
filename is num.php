<?php
foreach($authors as $auth)
{
                
    //con el is_numeric($auth['mid']) miramos si es un numero ya que los miembros del grupo tienen un numero y los externos al grupo no. 
                
    if(is_numeric($auth['mid'])){
        $authorsHTML[] = JHTML::_('select.option', $auth['mid'], $auth['member_name']); 
    } 
}
?>