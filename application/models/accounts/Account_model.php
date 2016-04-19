<?php

class Account_model extends  MY_Model
{
    public $_table = 'account';
    public $primary_key = 'accountId';
    public $before_create = array( 'timestamps' );
    public $validate = array(
                array(
                    'field' => 'accountName',
                    'label' => 'Account Name',
                    'rules' => 'required'
                ),
            );
}
