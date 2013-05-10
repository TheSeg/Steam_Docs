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
  
  public static function CreateDocExampleFormats( $currentFilePath, $rootFileName ) {
    $files=array();
    $content=array();
    $html=array();
    
    // Check if files exist for that output, then make tab/content.
    $files['json'] = dirname($currentFilePath)."/examples/".$rootFileName.".js";
    $files['xml'] = dirname($currentFilePath)."/examples/".$rootFileName.".xml";
    $files['vdf'] = dirname($currentFilePath)."/examples/".$rootFileName.".vdf";
    
    if ( file_exists($files['json']) ) {
      $content['json'] = file_get_contents($files['json']);
    }
    if ( file_exists($files['xml']) ) {
      $content['xml'] = htmlentities(file_get_contents($files['xml'],ENT_XML1));
    }
    if ( file_exists($files['vdf']) ) {
      $content['vdf'] = file_get_contents($files['vdf']);
    }
    
    // 
    
    $html[] = '<div class="tabbable"><div class="tabbable"><div class="tabbable"><ul class="nav nav-tabs">';
    
    $firstTab = true;
    foreach ( $content as $key => $value ) {
      if ($firstTab) {
        $tabClassActive = " active";
        $firstTab = false;
      } else {
        $tabClassActive = " ";
      }
      $html[] = '<li class="'.$tabClassActive.'"><a href="#'.$rootFileName.'_'.$key.'" data-toggle="tab">'.strtoupper($key).'</a></li>';
    }
    $firtTab = true;
    $html[] = '</div>';
    $html[] = '<div class="tab-content">';
    $firstTab = true;
    foreach ( $content as $key => $value ) {
      if ($firstTab) {
        $tabClassActive = " active";
        $firstTab = false;
      } else {
        $tabClassActive = " ";
      }
      $html[] = '<div class="tab-pane '.$tabClassActive.'" id="'.$rootFileName.'_'.$key.'">
                  <pre class="prettyprint pre-scrollable">'.$value.'</pre>
                </div>';
    }
    $html[] = "</div></div>";
    
    return implode("\n",$html);
  }
  
  public static function param($type,$optional=false) {
    $returnHTML = array();
    $returnHTML[] = '<span class="text-info">('.strtolower($type).')</span>';
    if ( strlen($type) > 12 ) {
      // This is put in when the type is too long and horriable wrapping occurs.
      $returnHTML[] = '<br>';
    }
    if ( $optional ) {
      $returnHTML[] = ' <span class="text-warning">[optional]</span>';
    }
    return implode("",$returnHTML);
  }
  
  public static function seeInputs() {
    return '<div class="well well-small">All <a href="#General_CommonInputs">Common Inputs</a> are used for this method. Some may not effect response.</div>';
  }
  
  public static function seeOutputs() {
    return '<div class="well well-small">All <a href="#General_CommonOutputs">Common Outputs</a> are used for this method.</div>';
  }
  
}

?>