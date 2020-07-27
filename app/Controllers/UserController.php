<?php namespace App\Controllers;
use App\Models\UserModel;
use App\Models\ProvinceModel;
use App\Models\SubjectModel;

class UserController extends BaseController
{
    protected $user;
    protected $province;
    protected $subject;

    public function __construct() 
    {
        $this->user = new UserModel();
        $this->province = new ProvinceModel();
        $this->subject = new SubjectModel();
    }

	public function index()
	{
        $data = [
            'userData' => $this->user->getUserInfo(),
            "provinceData" => $this->province->getAllProvinces(),
            "subjectData" => $this->subject->getAllSubject(),
            "copy" => "@copyright By Dy Dy",
        ];
		return view('index', $data);
	}

    public function createUser() 
    {
        $username = $this->request->getVar('username');
        $email = $this->request->getVar('email');
        $province = $this->request->getVar('province');
        $subject = $this->request->getVar('subject');
        $data = array(
            "username" => $username,
            "email" => $email,
            "pro_id" => $province,
            'sub_id' => $subject
        );
        if ($subject != "" and $province != "") {
            $this->user->insert($data);
        } else { 
            // message error here with session 
        }
        return redirect()->to("/");
    }

    public function deleteUser($id) 
    {
        $this->user->delete($id);
        return redirect()->to("/");
    }

    public function updateUser() 
    {
        $userId = $this->request->getVar('user_id');
        $username = $this->request->getVar('username');
        $email = $this->request->getVar('email');
        $province = $this->request->getVar('province');
        $subject = $this->request->getVar('subject');
        $data = array(
            "username" => $username,
            "email" => $email,
            "pro_id" => $province,
            'sub_id' => $subject
        );
        if ($subject != "" and $province != "") {
            $this->user->update($userId, $data);
        } else { 
            // message error here with session 
        }
        return redirect()->to("/");
    }
	//--------------------------------------------------------------------

}
