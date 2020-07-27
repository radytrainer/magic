<?php namespace App\Controllers;

class SendEmail extends BaseController
{
	public function index()
	{
        return view('email');

    }
    
    public function sendEmail()
    {
        if ($this->request->getMethod() == "post")
        {
            $subject = $this->request->getVar('subname');
            $email = $this->request->getVar('email');
            $username = substr($email, 0, strpos($email, '@'));
            $takeBeforedot = substr($username, 0, strpos($username, '.'));
            $takeAfterOneletter = substr($username, 0, strpos($username, '.'));
            $take = substr($takeAfterOneletter, 1, strpos($takeAfterOneletter, " "));

            echo $take;
            exit;
            $name = str_split($takeBeforedot);
            $char = $name[0];
            $user = strtoupper($char);
  
            $sms = $this->request->getVar('message');
            $types = $this->request->getVar('kinds');
           
            $respect = $this->request->getVar('respect');
            $message = '<fieldset style="border:1px dotted teal;">'.$types.' '. $user.', <br><br> 
            '.$sms.'
            .<br><br> 
            <a href="'.base_url().'/testmail/verify" target="_blank" 
            style="padding:5px 20px 5px 20px; background:teal; text-decoration:none; color:white;font-size:12px;border-radius:40px;">Confirm</a> 
            <br><br> 
            '.$respect.',
            <br><br>
            </fieldset>';
            $to = $email;
            $subject = $subject;
            $message = $message;
            $email = \Config\Services::email();
            $email->setTo($to);
            $email->setFrom('rady.y95@gmail.com', 'Information');
            $email->setSubject($subject);
            $email->setMessage($message);
           
            if ($email->send())
            {
                echo "Account activated";
            }else{
                $data = $email->printDebugger(['headers']);
                print_r($data);
            }
        }
    }
	//--------------------------------------------------------------------

}
