<?php

include_once("KVReader.php");

class SteamDocs {
  
  /**
    * GetHeadData
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
      $html[] = '<meta name="og:title" content="'.$pd['title'].'">';
    }
    if ( !empty($pd['desc']) ) {
      $html[] = '<meta name="description" content="'.$pd['desc'].'">';
      $html[] = '<meta name="og:description" content="'.$pd['desc'].'">';
    }
    
    $html[] = '<meta name="fb:app_id" content="250811168365558">';
    $html[] = '<meta property="og:type" content="website" />';
    $html[] = '<meta property="og:site_name" content="Steam WebAPI Proposal by Seg" />';
    $html[] = '<meta name="twitter:creator" content="@TheSeg" />';
    $html[] = '<link rel="publisher" href="https://plus.google.com/113283982336373378707/" />';
    $html[] = '<meta name="twitter:card" content="summary" />';
    
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
      
      // Post-processing of value, if needed.
      if ( $key == "json" ) {
        $value = htmlentities( $value , ENT_XML1 );
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
    if ( $optional ) {
      if ( strlen($type) > 12 ) {
        // This is put in when the type is too long and horriable wrapping occurs.
        $returnHTML[] = '<br>';
      }
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
  
  public static function seeRoles() {
    return '<div class="well well-small alert alert-info">See <a class="enableScroll" href="#General_MemberRoleValues">Member Role Values</a> for member roll return values.</div>';
  }
  
  public static function useGuidAppid() {
    return '<div class="well alert alert-info">Method will take <em>either</em> <span class="label label-inverse">guid</span> <em>or</em> <span class="label label-inverse">appid</span> parameters.</div>';
  }
  
  /**
    *
    * placeholderBlock
    *
    *
  */
  
  public static function placeholderBlock($width,$height,$text=null,$theme="SteamDocs") {
    
    if ( $text == "" ) {
      $text = $width."x".$height;
    }
    
    $html = array();
    $html[] = '<div class="row-fluid">';
    $html[] = '<div class="span10 offset2">';
    $html[] = '<img data-src="holder.js/'.$width.'x'.$height.'/'.$theme.'/text:'.$text.'">';
    $html[] = '</div>';
    $html[] = '</div>';
    
    return implode("\n",$html);
  }
  
  /**
    *
  */
  public static function htmlText($input) {
    //$returnString = htmlentities($input,ENT_QUOTES,"UTF-8");
    $returnString = str_replace("\t","",$input);
    return $returnString;
  }
  
  /**
    *
    * convertToJSON
    * 
    * @param Std $input
    *             The input string
    * @return string
    *             A formatted JSON string based on $input.
  */
  public static function convertToJSON($input) {
    return json_encode($input,JSON_PRETTY_PRINT);
  }
  
  /**
    *
    * convertToVDF
    * 
    * Converts the input structure to the Valve Definition Format.
    * 
    * @param Std $input
    *             The input string
    * @return string
    *             A formatted VDF string based on $input.
  */
  public static function convertToVDF($input) {
    $KVReader = new KVReader();
    return $KVReader->write($input);
  }
  
  public static function convertToAll($input) {
    $JSON = self::convertToJSON($input);
    $VDF = self::convertToVDF($input);
    
    return array("json" => $JSON , "vdf" => $VDF );
    
  }
  
  public static function saveAll($input,$filename) {
    file_put_contents($filename.".js", $input['json']);
    file_put_contents($filename.".vdf", $input['vdf']);
    
    return true;
  }
  
  
}

?>