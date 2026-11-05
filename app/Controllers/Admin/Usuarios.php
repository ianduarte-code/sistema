<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Shield\Entities\User;

class Usuarios extends BaseController
{
    public function index(): string|ResponseInterface
    {
        if (! $this->temAcessoAdministrativo()) {
            return redirect()->to('/')->with('error', 'Acesso não autorizado.');
        }

        $users = auth()->getProvider()->withGroups()->findAll();

        return view('admin/usuarios/index', [
            'users' => $users,
        ]);
    }

    public function create(): string|ResponseInterface
    {
        if (! $this->temAcessoAdministrativo()) {
            return redirect()->to('/')->with('error', 'Acesso não autorizado.');
        }

        return view('admin/usuarios/create');
    }

    public function store(): string|ResponseInterface
    {
        // Autorização: somente quem tem a permissão users.create pode cadastrar.
        $user = auth()->user();
        if ($user === null || ! $user->can('users.create')) {
            return redirect()->back()->with('error', 'Acesso não autorizado.');
        }

        $rules = [
            'username' => 'required|min_length[3]|max_length[30]|is_unique[users.username]',
            'email'    => 'required|valid_email|is_unique[auth_identities.secret]',
            'password' => 'required|min_length[8]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $users = auth()->getProvider();
        $newUser = new User([
            'username' => $this->request->getPost('username'),
            'email'    => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
        ]);

        $users->save($newUser);

        $newUser = $users->findById($users->getInsertID());
        $newUser->addGroup('user');

        return redirect()->to('/admin/usuarios')->with('message', 'Usuário criado com sucesso.');
    }

    private function temAcessoAdministrativo(): bool
    {
        $user = auth()->user();

        return $user !== null
            && $user->inGroup('admin')
            && $user->can('admin.access');
    }
}
