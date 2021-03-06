<?php

define("ELEMENT_TYPE_NULL",-1);
define("ELEMENT_TYPE_DEFAULT",0);
define("ELEMENT_TYPE_STANDALONE",1);
define("ELEMENT_TYPE_ONEARRAY",2);
define("ELEMENT_TYPE_BOOL",3);
define("ELEMENT_TYPE_APPS",4);
define("ELEMENT_TYPE_LANG",5);
define("ELEMENT_TYPE_CAMMALCASE",6);

class XMLSerializer extends DOMImplementation {
  
  /**
    * doCDATA
    *
  */
  private static function doCDATA($input) {
    $return = false;
    
    if ( gettype($input) == "string" ) {
      if (
          (stristr($input,"<") != false) ||
          (stristr($input,">") != false) ||
          (stristr($input,"\n") != false )
      ) {
        $return = true;
      }
    }
    
    return $return;
  }
  
  /**
    *
    *
  */
    private static function elementValue($doc, $field, $value=null,$options=0) {
        $return = null;
        
        if ( ($value != null && $value != "") || ( is_numeric($value) ) || ( is_bool($value) ) ) {
            if ( is_bool($value) ) {
              if ( $value === true ) {
                $returnValue = "true";
              } else {
                $returnValue = "false";
              }
            } else {
              $returnValue = $value;
            }
            
            if ( self::doCDATA($returnValue) ) {
              $return = $doc->createElement( $field );
              $returnCDATA = $doc->createCDATASection( htmlentities($returnValue) );
              $return->appendChild($returnCDATA);
            } elseif ( is_numeric($returnValue) ) {
              $return = $doc->createElement( $field , $returnValue );
            } else {
              $return = $doc->createElement( $field , htmlentities($returnValue) );
            }
        } else {
          $return = $doc->createElement( $field );
        }
        
        return $return;
    }
  
  /**
    * 
    * toSingular
    * 
  */
  private static function toSingular($input) {
    $output = array(
      "type" => ELEMENT_TYPE_DEFAULT,
      "elementString" => "",
      "elementSubString" => "",
      "defaultValueName" => "",
    );
    
    switch( strtolower($input) ) {
      case "result":
        $output["type"] = ELEMENT_TYPE_STANDALONE;
        break;
      case "members":
        $output["elementString"] = "member";
        break;
      case "ratings":
        $output["elementString"] = "rating";
        $output["type"] = ELEMENT_TYPE_ONEARRAY;
        break;
      case "events":
        $output["elementString"] = "event";
        $output["type"] = ELEMENT_TYPE_ONEARRAY;
        break;
      case "hubs":
        $output["elementString"] = "hub";
        $output["type"] = ELEMENT_TYPE_ONEARRAY;
        break;
      case "announcements":
        $output["elementString"] = "announcement";
        $output["type"] = ELEMENT_TYPE_ONEARRAY;
        break;
      case "screenshots":
        $output["elementString"] = "screenshot";
        $output["type"] = ELEMENT_TYPE_ONEARRAY;
        break;
      case "movies":
        $output["elementString"] = "movie";
        $output["type"] = ELEMENT_TYPE_ONEARRAY;
        break;
      case "system_req":
        $output["elementString"] = "system_req";
        $output["type"] = ELEMENT_TYPE_ONEARRAY;
        break;
      case "languages":
        $output["elementString"] = "language";
        $output["type"] = ELEMENT_TYPE_LANG;
        break;
      case "apps":
        $output["elementString"] = "app";
        $output["type"] = ELEMENT_TYPE_APPS;
        break;
      case "status":
        $output["type"] = ELEMENT_TYPE_STANDALONE;
        break;
      case "permissions":
        $output["type"] = ELEMENT_TYPE_STANDALONE;
        break;
      case "links":
        $output["elementString"] = "links";
        $output["type"] = ELEMENT_TYPE_STANDALONE;
        break;
      case "images":
        $output["elementString"] = "images";
        $output["type"] = ELEMENT_TYPE_STANDALONE;
        break;
      case "platforms":
        $output["elementString"] = "platform";
        $output["type"] = ELEMENT_TYPE_BOOL;
        break;
      case "attributes":
        $output["elementString"] = "attributes";
        $output["type"] = ELEMENT_TYPE_STANDALONE;
        break;
      case "strings":
        $output["elementString"] = "strings";
        $output["type"] = ELEMENT_TYPE_STANDALONE;
        break;
      case "genres":
        $output["elementString"] = "genres";
        $output["elementSubString"] = "genre";
        $output["type"] = ELEMENT_TYPE_ONEARRAY;
        break;
      case "websites":
        $output["elementString"] = "site";
        $output["elementSubString"] = "";
        $output["defaultValueName"] = "title";
        $output["type"] = ELEMENT_TYPE_ONEARRAY;
        break;
      case "features":
        $output["elementString"] = "feature";
        $output["type"] = ELEMENT_TYPE_BOOL;
        break;
      case "release_date":
        $output["elementString"] = "release_date";
        $output["type"] = ELEMENT_TYPE_STANDALONE;
        break;
      case "avatar":
        $output["elementString"] = "avatar";
        $output["type"] = ELEMENT_TYPE_CAMMALCASE;
        break;
      case null:
        $output["type"] = ELEMENT_TYPE_NULL;
        break;
      default:
        $output["elementString"] = $input;
        break;
    }
    
    return $output;
  }
  
  private static function createElement($doc, $inputVal, $inputKey, $occ=null,$elementName=null) {
    
      foreach ($inputVal as $fieldname => $fieldvalue) {
        
        if ( ( is_array($fieldvalue) || is_object($fieldvalue) ) && getType($fieldname) != "integer" ) {
          
          $newOcc = self::elementValue($doc, $fieldname );
          $newOcc = $occ->appendChild($newOcc);
          foreach( $fieldvalue as $subFieldName => $subFieldValue ) {
            
            // get value for element.
            $returnElementStats = self::toSingular($fieldname);
            if ( isset($subFieldValue['steamid']) ) {
              $createElementValue = $subFieldValue['steamid'];
            } else {
              $createElementValue = $subFieldName;
            }
            
            if ( $returnElementStats["type"] === ELEMENT_TYPE_STANDALONE ) {
              
              $childElement = self::elementValue($doc, $subFieldName , $subFieldValue );
              
            } elseif ( $returnElementStats["type"] == ELEMENT_TYPE_CAMMALCASE ) {
              
              echo("$fieldname: ELEMENT_TYPE_CAMMALCASE\n");
              
            } elseif ( $returnElementStats["type"] == ELEMENT_TYPE_BOOL ) {
              
              $newChildElement = self::elementValue($doc, $newSubChildElementType["elementString"] );
              foreach( $subSubFieldValue as $thatA => $thisA ) {
                if ( $thisA === true ) {
                  $newSubChildElement = self::elementValue($doc, $thatA );
                  $newChildElement->appendChild($newSubChildElement);
                } else {
                  // Note: If false, then field shouldn't exist for this type.
                }
              }
              
            } elseif ( $returnElementStats["type"] === ELEMENT_TYPE_ONEARRAY ) {
              
              $childElement = self::elementValue($doc, $returnElementStats["elementString"] );
              
              if ( !empty($subFieldName) && !is_numeric($subFieldName) ) {
                $childAtt = $doc->createAttribute( "name" );
                $childAtt->value = $subFieldName;
                $childElement->appendChild($childAtt);
              }
              
              foreach( $subFieldValue as $subSubFieldName => $subSubFieldValue ) {
                if ( gettype($subSubFieldValue) == "array" ) {
                  $newChildElement = self::elementValue($doc, $subSubFieldName );
                  foreach( $subSubFieldValue as $thisA => $thatA ) {
                    if ( gettype($thatA) == "array" ) {
                      // It's an array. Pick a main field, then attribute the rest.
                      $fieldName = self::toSingular($subSubFieldName);
                      if ( isset($fieldName['defaultValueName']) && !empty($fieldName['defaultValueName']) ) {
                        $newSubChildElementValue = $thatA[$fieldName['defaultValueName']];
                      } else {
                        $newSubChildElementValue = null;
                      }
                      $newSubChildElement = self::elementValue($doc, $fieldName['elementString'] , $newSubChildElementValue );
                      foreach( $thatA as $thatB => $thisB ) {
                        if ( strtolower($thatB) != $fieldName['defaultValueName'] ) {
                          $childAtt = $doc->createAttribute( $thatB );
                          $childAtt->value = $thisB;
                          $newSubChildElement->appendChild($childAtt);
                        }
                      }
                    } else {
                      $subSubFieldName_Return = self::toSingular($subSubFieldName);
                      // One field one value.
                      if ( $subSubFieldName_Return['type'] == ELEMENT_TYPE_CAMMALCASE ) {
                        $newSubChildElement = self::elementValue($doc, $thisA , $thatA );
                      } else {
                        $newSubChildElement = self::elementValue($doc, $subSubFieldName."_item" , $thatA );
                      }
                    }
                    $newChildElement->appendChild($newSubChildElement);
                  }
                } else {
                  $newChildElement = self::elementValue($doc, $subSubFieldName, $subSubFieldValue );
                }
                $valueChildElement = $childElement->appendChild( $newChildElement );
              }
              
            } elseif ( $returnElementStats["type"] === ELEMENT_TYPE_APPS ) {
              
              $childElement = self::elementValue($doc, $returnElementStats["elementString"] );
              
              if ( !empty($subFieldName) ) {
                $childAtt = $doc->createAttribute( "appid" );
                $childAtt->value = $subFieldName;
                $childElement->appendChild($childAtt);
              }
              
              foreach( $subFieldValue as $subSubFieldName => $subSubFieldValue ) {
                
                if ( gettype($subSubFieldValue) == "array" ) {
                  
                  $newSubChildElementType = self::toSingular($subSubFieldName);
                  
                  if ( $newSubChildElementType["type"] == ELEMENT_TYPE_STANDALONE ) {
                    
                    $newChildElement = self::elementValue($doc, $newSubChildElementType["elementString"] );
                    foreach( $subSubFieldValue as $thatA => $thisA ) {
                      if ( $thisA != false ) {
                        if ( is_numeric($thatA) === true ) {
                          $newSubChildElement = self::elementValue($doc, $newSubChildElementType["elementSubString"] );
                        } else {
                          $newSubChildElement = self::elementValue($doc, $thatA , $thisA );
                        }
                        $newChildElement->appendChild($newSubChildElement);
                      }
                    }
                    
                  } elseif ( $newSubChildElementType["type"] == ELEMENT_TYPE_BOOL ) {
                    
                    $newChildElement = self::elementValue($doc, $newSubChildElementType["elementString"] );
                    foreach( $subSubFieldValue as $thatA => $thisA ) {
                      if ( $thisA === true ) {
                        $newSubChildElement = self::elementValue($doc, $thatA );
                        $newChildElement->appendChild($newSubChildElement);
                      }
                    }
                    
                  } elseif ( $newSubChildElementType["type"] == ELEMENT_TYPE_ONEARRAY ) {
                    
                    $newChildElement = self::elementValue($doc, $newSubChildElementType["elementString"] );
                    foreach( $subSubFieldValue as $thatA => $thisA ) {
                      if ( is_numeric($thatA) ) {
                        $newSubChildElement = self::elementValue($doc, $newSubChildElementType["elementSubString"] , $thisA );
                      } else {
                        $newSubChildElement = self::elementValue($doc, $thatA );
                        foreach( $thisA as $thatB => $thisB ) {
                          $newSubSubChildElement = self::elementValue($doc, $thatB , $thisB );
                          $newSubChildElement->appendChild($newSubSubChildElement);
                        }
                      }
                      $newChildElement->appendChild($newSubChildElement);
                    }
                    
                  } elseif ( $newSubChildElementType["type"] == ELEMENT_TYPE_LANG ) {
                    
                    $newChildElement = self::elementValue($doc, $subSubFieldName );
                    
                    foreach($subSubFieldValue as $fieldKey ) {
                      $newChildChildEelement = self::elementValue($doc, $newSubChildElementType["elementString"], $fieldKey['iso'] );
                      foreach($fieldKey as $thatC => $thisC ) {
                        if ( strtolower($thatC) != "iso" ) {
                          $childAtt = $doc->createAttribute( $thatC );
                          $childAtt->value = $thisC;
                          $newChildChildEelement->appendChild($childAtt);
                        }
                      }
                      $newChildElement->appendChild( $newChildChildEelement );
                    }
                    
                  } else {
                    echo("<pre>NO TYPE: $subSubFieldName</pre>");
                  }
                } else {
                  $newChildElement = self::elementValue($doc, $subSubFieldName, $subSubFieldValue );
                }
                $valueChildElement = $childElement->appendChild( $newChildElement );
                
              }
              
            } else {
              
              $childElement = self::elementValue($doc, $returnElementStats["elementString"] , $createElementValue );
              foreach( $subFieldValue as $subSubFieldName => $subSubFieldValue ) {
                if ( $subSubFieldName == "steamid" ) {
                  $childElement->value = $subSubFieldValue;
                } elseif ( $subSubFieldName == "desc" ) {
                  //
                } else {
                  $childAttribute = $doc->createAttribute($subSubFieldName);
                  $childAttribute->value = $subSubFieldValue;
                  $childElement->appendChild($childAttribute);
                }
              }
              
            }
            if ( $childElement ) {
              $value = $newOcc->appendChild($childElement);
            }
          }
        } else {
          $child = self::elementValue($doc, $fieldname);
          if ( $occ != null ) {
            $child = $occ->appendChild($child);            
          } else {
            $child = $doc->appendChild($child);   
          }
          $value = $doc->createTextNode($fieldvalue);
          $value = $child->appendChild($value);
        }
      }
  }
  
  public static function createXML($input,$prettyPrint=true) {
    $docImp = new DOMImplementation();
    $doctype = $docImp->createDocumentType("response"); 
    $doc = $docImp->createDocument(null, null, $doctype);
    $root = $doc->createElement('response');
    $root = $doc->appendChild($root);
    $signed_values = $input;
    foreach ($signed_values as $key => $val) {
      self::createElement($doc, $val, $key, $root);
    }
    
    // get completed xml document
    $doc->preserveWhiteSpace = $prettyPrint;
    $doc->formatOutput = $prettyPrint;
    $xml_string = $doc->saveXML();
    
    return $xml_string;
  }
  
}
?>