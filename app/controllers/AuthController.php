<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class AuthController extends Controller
{
    public function __construct()
    {
        parent::__construct();
       
        $this->call->model('AccountModel');
    }

    public function login()
    {
        $this->call->view('auth/login');
    }

 public function authenticate()
{
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $user = $this->AccountModel->getByUsername($username);

    if ($user && $password === $user['password']) {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $user['username'];
        header('Location: /products');
        exit;
    }

    $_SESSION['login_error'] = 'Invalid username or password.';
    header('Location: /login');
    exit;
}
    public function logout()
    {
        session_destroy();
        redirect('/login');
    }
}