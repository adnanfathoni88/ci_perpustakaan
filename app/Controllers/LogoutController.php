<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LogoutController extends BaseController
{
    function logout()
    {
		session()->destroy();
		return redirect()->to(base_url('login'));
    }
}
