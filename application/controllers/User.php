<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        check_not_login();
        check_admin();

        $this->load->model('user_m');
        $this->load->library('form_validation');
    }

	public function index()
	{
        $data['row'] = $this->user_m->get();
		$this->template->load('template', 'user/user_data', $data);
	}

    public function add() {
        $this->form_validation->set_rules('fullname', 'Nama', 'required|min_length[5]|alpha_numeric_spaces');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[tbl_user.username]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('passconf', 'Confirm Password', 'required|matches[password]',
                array('matches' => '%s tidak sesuai dengan Password')
        );
        $this->form_validation->set_rules('level', 'Level', 'required');

        $this->form_validation->set_message('required', '%s Masih Kosong, Silahkan Di isi..');

        $this->form_validation->set_message('min_length', '{field} Minimal 5 karakter!');
        $this->form_validation->set_message('max_length', '{field} Maximal 12 Karakter!');
        $this->form_validation->set_message('is_unique', '{field} Sudah ada, silahkan menggunakan {field} lain!');
        
        $this->form_validation->set_error_delimiters('<div class="help-block">', '</div>');
        
        if ($this->form_validation->run() == FALSE){
            $this->template->load('template', 'user/user_form_add');
        } else {
            $post = $this->input->post(null, TRUE);
            $this->user_m->add($post);

            if ($this->db->affected_rows() > 0) {
                echo "
                    <script>
                        alert('Data Berhasil disimpan!!');
                        window.location.href='".site_url('user')."';
                    </script>  
                ";
            } else {
                echo "
                    <script>
                        alert('Data Gagal disimpan!!');
                        window.location.href='".site_url('user/user_form_add')."';
                    </script>  
                ";
            }
        }
    }

    public function edit($id) {
        $this->form_validation->set_rules('fullname', 'Nama', 'required|min_length[5]|alpha_numeric_spaces');
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|callback_username_check');
        
        if ($this->input->post('password')) {
            $this->form_validation->set_rules('password', 'Password', 'min_length[5]|max_length[12]');
            $this->form_validation->set_rules('passconf', 'Confirm Password', 'matches[password]',
                    array('matches' => '%s tidak sesuai dengan Password')
            );
        }

        if ($this->input->post('passconf')) {
            $this->form_validation->set_rules('passconf', 'Confirm Password', 'matches[password]',
                    array('matches' => '%s tidak sesuai dengan Password')
            );
        }

        $this->form_validation->set_rules('level', 'Level', 'required');

        $this->form_validation->set_message('required', '%s Masih Kosong, Silahkan Di isi..');

        $this->form_validation->set_message('min_length', '{field} Minimal 5 karakter!');
        $this->form_validation->set_message('max_length', '{field} Maximal 12 Karakter!');
        $this->form_validation->set_message('is_unique', '{field} Sudah ada, silahkan menggunakan {field} lain!');
        
        $this->form_validation->set_error_delimiters('<div class="help-block">', '</div>');
        
        if ($this->form_validation->run() == FALSE){
            $query = $this->user_m->get($id);

            if ($query->num_rows() > 0) {
                $data['row'] = $query->row();
                $this->template->load('template', 'user/user_form_edit', $data);
            } else {
                echo "
                    <script>
                        alert('Data Tidak Ditemukan!!');
                        window.location.href='".site_url('user')."';
                    </script>  
                ";
            }
        } else {
            $post = $this->input->post(null, TRUE);
            $this->user_m->edit($post);

            if ($this->db->affected_rows() > 0) {
                echo "
                    <script>
                        alert('Data Berhasil disimpan!!');
                        window.location.href='".site_url('user')."';
                    </script>  
                ";
            } else {
                echo "
                    <script>
                        alert('Data Gagal disimpan!!');
                        window.location.href='".site_url('user/user_form_add')."';
                    </script>  
                ";
            }
        }
    }

    function username_check() {
        $post = $this->input->post(null, TRUE);
        $query = $this->db->query("SELECT * FROM tbl_user WHERE username = '$post[username]' AND user_id != '$post[user_id]' ");
        
        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('username_check', '{field} ini sudah dipakai, silahkan ganti!');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function del() {
        $id = $this->input->post('user_id');
        $this->user_m->del($id);

        if ($this->db->affected_rows() > 0) {
            echo "
                <script>
                    alert('Data Berhasil dihapus!!');
                    window.location.href='".site_url('user')."';
                </script>  
            ";
        } else {
            echo "
                <script>
                    alert('Data Gagal dihapus!!');
                    window.location.href='".site_url('user')."';
                </script>  
            ";
        }
    }
}
