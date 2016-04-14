<?php

class Account_model extends  MY_Model
{
    public $_table = 'account';
    public $primary_key = 'accountId';
    public $validate = array(
                array(
                    'field' => 'accountName',
                    'label' => 'Account Name',
                    'rules' => 'required'
                ),
            );
}
