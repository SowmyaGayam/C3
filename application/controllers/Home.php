<?php

class Home extends CI_Controller
{
	public function index()
	{
		//echo "this is Home Controller";
		//$this->load->view('home_view');


		/* User Defined Library
		$this->load->library('mylibrary');
		$sowmya = $this->mylibrary->my_first_call();
		echo $sowmya;*/
		$data['main_view'] = "home_view";
		$this->load->view('layouts/main',$data);
	}

	
	public function insertdata()
	{

		$name='Test';
		$password='12345';



	}
}


//Santosh API

/*$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost/localapi/test_insert_api?name='.$name.'&password='.$paasword.'',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

	}*/