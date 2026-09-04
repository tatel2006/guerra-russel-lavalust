<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class UsersModel extends Model
{
    protected $table = 'users';

    public function __construct()
    {
        parent::__construct();
        $this->call->database();   // <-- this line is required
    }

    public function getAll()
    {
        return $this->db->table($this->table)->get_all();
    }
}