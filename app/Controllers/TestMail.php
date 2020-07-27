<?php namespace App\Controllers;

class TestMail extends BaseController
{
	public function index()
	{
		$to = "rady.y@passerellesnumeriques.org";
		$subject = "Send Email From Codeigniter 4";
		$message = 'Hi Rady, <br><br> Thank You for send me an email. <br><br> <a href="'.base_url().'/testmail/verify" target="_blank">Activate</a> <br> <br> Best Regards, <br><br>';
		 $email = \Config\Services::email();
		 $email->setTo($to);
		 $email->setFrom('rady.y95@gmail.com', 'Information');
		 $email->setSubject($subject);
		 $email->setMessage($message);
		//  $fileAttach = 'public/images/1.png';
		//  $email->attach($fileAttach);
		 if ($email->send())
		 {
			 echo "Account activated";
		 }else{
			 $data = $email->printDebugger(['headers']);
			 print_r($data);
		 }

	}
	public function verify()
	{
		return "Thank You";
	}

	//--------------------------------------------------------------------

}
