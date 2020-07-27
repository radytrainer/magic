<?php namespace App\Controllers;
use App\Models\SubjectModel;

class SubjectController extends BaseController
{
    protected $subject;

    public function __construct() 
    {
        $this->subject = new SubjectModel();
    }

	public function index()
	{
        $data = [
            'subjectData' => $this->subject->getAllSubject(),
            "copy" => "@copyright By Dy Dy"
        ];
		return view('subject', $data);
	}

    public function createSubject() 
    {
        $subject = $this->request->getVar('subname');
        $data = array(
            'subname' => $subject
        );
        $this->subject->insert($data);
        return redirect()->to("/subject");
    }

    public function deleteSubject($id) 
    {
        $this->subject->delete($id);
        return redirect()->to('/subject');
    }

    public function updateSubject()
    {
        $subId = $this->request->getVar('sub_id');
        $subject = $this->request->getVar('subname');
        $data = array(
            'subname' => $subject
        );
        $this->subject->update($subId, $data);
        return redirect()->to('/subject');
    }
	//--------------------------------------------------------------------

}
