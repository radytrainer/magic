<?php namespace App\Controllers;
use App\Models\ProvinceModel;

class ProvinceController extends BaseController
{
    protected $province;

    public function __construct() 
    {
        $this->province = new ProvinceModel();
    }

	public function index()
	{
        $data = [
            'provinceData' => $this->province->getAllProvinces(),
            "copy" => "@copyright By Dy Dy"
        ];
		return view('province', $data);
	}

    public function createProvince() 
    {
        $province = $this->request->getVar('proname');
        $data = array(
            'proname' => $province
        );
        $this->province->insert($data);
        return redirect()->to("/province");
    }

    public function deleteProvince($id) 
    {
        $this->province->delete($id);
        return redirect()->to('/province');
    }

    public function updateProvince()
    {
        $provinceId = $this->request->getVar('pro_id');
        $province = $this->request->getVar('proname');
        $data = array(
            'proname' => $province
        );
        $this->province->update($provinceId, $data);
        return redirect()->to('/province');
    }
	//--------------------------------------------------------------------

}
