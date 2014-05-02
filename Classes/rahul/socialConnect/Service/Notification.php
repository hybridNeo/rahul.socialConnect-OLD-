<?php
  namespace rahul\socialConnect\Service;
  
  class Notification{
   function sendSocialConnect(NodeInterface $node){
      $content = "some text here";
      $fp = fopen($_SERVER['DOCUMENT_ROOT'] . "/myText.txt","wb");
      echo $content;
      
      fwrite($fp,$content);
      fclose($fp);
  
 }
  }
?>
