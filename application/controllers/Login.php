<?php
class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');

		$this->load->library('encryption');
	}

	function index()
	{
		$this->load->view('login');
	}

	function aksi_login()
	{
		$username = $this->security->xss_clean($this->input->post('username'));
		$password = $this->security->xss_clean($this->input->post('password'));

		$data = $this->Login_model->cek_login($username);
		$passb = $this->encryption->decrypt($data['password']);

		if (isset($_POST['siswa'])) {
			$datas = $this->Login_model->cek_logins($username);
			$passs = $this->encryption->decrypt($datas['password']);

			if ($password == $passs) {
				$data_session = array(
					'username' => $username,
					'status' => "login",
					'sebagai' => "siswa",
					'nama' => $datas['nama'],
					'nisn' => $datas['nisn'],
				);
				$this->session->set_userdata($data_session);
				redirect('dashboard');
			} else {
				redirect(base_url(''));
			}
		}
		else {
			if ($password == $passb) {
				$data_session = array(
					'username' => $username,
					'status' => "login",
					'sebagai' => "admin",
					'nama' => $data['nama'],
					'id' => $data['id'],
					'level' => $data['level'],
				);
				$this->session->set_userdata($data_session);
				redirect('dashboard');
			} else {
				redirect(base_url(''));
			}
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
