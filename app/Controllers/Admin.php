<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{
    public function index(): string|ResponseInterface
    {
        $user = auth()->user();

        if ($user === null || ! $user->inGroup('admin')) {
            return redirect()->to('/')->with('error', 'Acesso restrito a administradores.');
        }

        if (! $user->can('admin.access')) {
            return redirect()->to('/')->with('error', 'Acesso não autorizado.');
        }

        return view('admin/index');
    }
}
