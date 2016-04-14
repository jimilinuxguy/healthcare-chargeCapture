<?php

class  AccountRegister extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('accounts/Account_model');
        $this->load->model('users/User_model');

    }

    public function index()
    {
        $data['title'] = 'Account Registration';
        $validate = array(
                array(
                    'field' => 'accountName',
                    'label' => 'Account Name',
                    'rules' => 'required|is_unique[account.accountName]'
                ),
                array(
                    'field' => 'firstName',
                    'label' => 'First Name',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'lastName',
                    'label' => 'Last Name',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'emailAddress',
                    'label' => 'Email Address',
                    'rules' => 'required|valid_email|is_unique[user.emailAddress]'
                ),
                array(
                    'field' => 'passPhrase',
                    'label' => 'Passphrase',
                    'rules' => 'trim|required|min_length[8]|matches[confPassword]'
                ),
                array(
                    'field' => 'confPassword',
                    'label' => 'Confirmation Passphrase',
                    'rules' => 'required'
                ),
            );
        $this->form_validation->set_rules($validate);
    
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('accounts/register', $data);            
        } else {
            $this->db->trans_start();
            $accountId = $this->Account_model->insert(
                array(
                    'accountName' => $this->input->post('accountName')
                    )
                );
            if ($accountId) {
                $this->load->library('encryption');
                $userId = $this->User_model->insert(
                    array(
                        'accountId' => $accountId,
                        'firstName' => $this->input->post('firstName'),
                        'lastName' => $this->input->post('lastName'),
                        'emailAddress' => $this->input->post('emailAddress'),
                        'passphrase' => $this->encryption->encrypt($this->input->post('passPhrase'))
                        )
                    );
            }
            $this->db->trans_complete();
            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
            } else {
                $this->db->trans_commit();
            }
        }
    }

}
