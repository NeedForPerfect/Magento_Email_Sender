<?php

class Vladimir_EmailSender_Model_Config_Cron extends Mage_Core_Model_Config_Data

{


    protected function _afterSave(){


        $path_to_config = $_SERVER['DOCUMENT_ROOT'].'/app/code/local/Vladimir/EmailSender/etc/config.xml';

        $dom = new DOMDocument();

        $dom->load($path_to_config);

        $root = $dom->documentElement;

        $markers = $root->getElementsByTagName('cron_expr');


        $markers->item(0)->nodeValue = $this->getValue();
        
        // Mage::getStoreConfig('email_cron_sender/email_cron_sender/cron_settings');

        //  $dom->saveXML();

        // $path_to_experimental = $_SERVER['DOCUMENT_ROOT'].'/app/code/local/Vladimir/EmailSender/etc/experimental.xml';

        $dom->Save($path_to_config);


    }



}