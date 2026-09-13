<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AccountModel extends Model
{
    protected $table = 'accounts';   // o kung ano man ang table mo

   

    public function getByUsername($username)
    {
        return $this->db->table($this->table)->where('username', $username)->get();
    }
}