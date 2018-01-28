<?php

class Vladimir_EmailSender_Model_Cron{


	public function sendEmailNow(){


    //    echo Mage::getStoreConfig('email_cron_sender/email_cron_sender/receiver_email');

	//  echo Mage::getStoreConfig('trans_email/ident_general/name')."\n";


	//  echo Mage::getStoreConfig('trans_email/ident_general/email');


     $bodytext = "Some Message to User TEXT TEXT TEXT"; 
     $emailfrom =  Mage::getStoreConfig('trans_email/ident_general/email');
     $username = Mage::getStoreConfig('trans_email/ident_general/name');
     $receiverEmail = Mage::getStoreConfig('email_cron_sender/email_cron_sender/receiver_email');
    
     $config = array(
	 'host' => 'smtp.gmail.com',
     'port' => 587,
     'ssl' => 'tls',
     'auth' => 'login',
     'username' => 'realffootball@gmail.com',
     'password' => 'herepassword');     // воспользуйтей моим паролем 

$transport = new Zend_Mail_Transport_Smtp('smtp.gmail.com', $config);

$mail = new Zend_Mail();
$mail->setBodyHtml($bodytext);
$mail->setFrom($emailfrom, $username);
$mail->addTo($receiverEmail);
$mail->setSubject('Title of Email');
$mail->send();

 //  echo 'I Send';

		
	}


}

?>
