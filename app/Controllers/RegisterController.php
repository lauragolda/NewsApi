<?php declare(strict_types=1);

namespace App\Controllers;

use App\Services\RegisterService;
use App\Services\RegisterServiceRequest;
use App\Template;
use App\Redirect;

class RegisterController
{
    public function showForm(): Template
    {
        return new Template('register.twig');
    }

    public function register():Redirect
    {

        $registerService = new RegisterService();
        $registerService->execute(
            new RegisterServiceRequest(
                $_POST['name'],
                $_POST['email'],
                $_POST['password']
            )
        );
        return new Redirect('/login');
    }
}
