<?php

class SteamDocs {
  
  /**
    *
    *
    * @param pd - The Page Data array as set on the page.
    * @return HTML String return of inputs.
  */
  
  public static function GetHeadData($pd) {
    $html = array();
    $returnString = null;
    $html[] = "    ";
    
    if ( !empty($pd['title']) ) {
      $html[] = '<title>'.$pd['title'].'</title>';
    }
    if ( !empty($pd['desc']) ) {
      $html[] = '<meta name="description" content="'.$pd['desc'].'">';
    }
    
    $html[] = "";
    
    return implode("\n    ",$html);
  }
  
  
}

?>