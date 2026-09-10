<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AccountModel extends Model
{
    protected $table = 'accounts';   // o kung ano man ang table mo

    public function __construct()
    {
        parent::__construct();
        $this->call->database();   // <-- ITO ang kulang, idagdag
    }

    public function getByUsername($username)
    {
        return $this->db->table($this->table)->where('username', $username)->get();
    }
}