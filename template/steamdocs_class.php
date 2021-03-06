<?php

include_once("KVReader.php");
include_once("XMLSerializer.php");

class SteamDocs {
  
  
  public static function full_url()
  {
    $s = empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "s" : "";
    $sp = strtolower($_SERVER["SERVER_PROTOCOL"]);
    $protocol = substr($sp, 0, strpos($sp, "/")) . $s;
    $port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]);
    return $protocol . "://" . $_SERVER['SERVER_NAME'] . $port . $_SERVER['REQUEST_URI'];
  }
  
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
      $html[] = '<meta property="og:title" content="'.$pd['title'].'">';
    }
    if ( !empty($pd['desc']) ) {
      $html[] = '<meta name="description" content="'.$pd['desc'].'">';
      $html[] = '<meta property="og:description" content="'.$pd['desc'].'">';
    }
    $html[] = '<meta property="og:url" content="'.self::full_url().'">';
    
    $html[] = '<meta property="fb:app_id" content="250811168365558">';
    $html[] = '<meta property="og:type" content="website">';
    $html[] = '<meta property="og:site_name" content="Steam WebAPI Proposal by Seg">';
    $html[] = '<meta name="twitter:creator" content="@TheSeg">';
    $html[] = '<link rel="publisher" href="https://plus.google.com/113283982336373378707/">';
    $html[] = '<meta name="twitter:card" content="summary">';
    $html[] = '<meta property="og:image" content="http://steam.segonmedia.com/img/proposal_steam_webapi_logo.png" >';
    $html[] = '<meta name="twitter:image" content="http://steam.segonmedia.com/img/proposal_steam_webapi_logo.png" >';
    $html[] = '<meta property="og:image:width" content="512" >';
    $html[] = '<meta property="og:image:height" content="512" >';
    
    $html[] = "";
    
    return implode("\n    ",$html);
  }
  
  public static function CreateDocExampleFormats( $currentFilePath, $rootFileName ) {
    $files=array();
    $content=array();
    $html=array();
    $fileExtention = array(
      "json" => ".js",
      "xml" => ".xml",
      "vdf" => ".vdf",
    );

    $dirname = dirname($currentFilePath);
    $interfaceName = substr($dirname,(strrpos($dirname,'/') + 1));
    
    // Check if files exist for that output, then make tab/content.
    $files['json'] = $dirname."/examples/".$rootFileName.$fileExtention['json'];
    $files['xml'] = $dirname."/examples/".$rootFileName.$fileExtention['xml'];
    $files['vdf'] = $dirname."/examples/".$rootFileName.$fileExtention['vdf'];
    
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
    
    $html[] = '<div class="examplesTabs"><div class="tabbable tabs-left"><ul class="nav nav-tabs">';
    
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
    $html[] = '</ul>';

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
      
      $html[] = '<div class="tab-pane '.$tabClassActive.'" id="'.$rootFileName.'_'.$key.'">';
      $html[] = '<div class="preArea"><pre class="prettyprint pre-scrollable">'.$value.'</pre></div>';
      $html[] = '<div class="externalLinks"><a href="./docs/'.$interfaceName.'/examples/'.$rootFileName.$fileExtention[$key].'" target="_blank" data-toggle="tooltip" title="View in separate window." data-placement="bottom"><i class="icon-external-link"></i></a></div>';
      $html[] = '</div>';
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
    * convertToXML
    * 
    * @param Std $input
    *             The input string
    * @return string
    *             A formatted XML string based on $input.
  */
  public static function convertToXML($input,$prettyPrint=true) {
    return XMLSerializer::createXML($input,$prettyPrint);
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
    $XML = self::convertToXML($input);
    
    return array("json" => $JSON , "vdf" => $VDF , "xml" => $XML );
    
  }
  
  public static function saveAll($input,$filename) {
    
    //print("\n<pre>".htmlentities($input['json'])."</pre>\n");
    file_put_contents($filename.".js", $input['json']);
    
    //print("\n<pre>".htmlentities($input['vdf'])."</pre>\n");
    file_put_contents($filename.".vdf", $input['vdf']);
    
    //print("\n<pre>".htmlentities($input['xml'])."</pre>\n");
    file_put_contents($filename.".xml", $input['xml']);
        
    return true;
  }
  
  
}

?>