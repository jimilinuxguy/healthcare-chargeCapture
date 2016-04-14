<?php

class User_model extends MY_Model
{
    public $_table = 'user';
    public $primary_key = 'userId';
    public $validate = array(
            array(
                'field' => 'accountId',
                'label' => 'Account Id',
                'rules' => 'required'
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
                'rules' => 'trim|required|min_length[8]'
            ),
        );
}
