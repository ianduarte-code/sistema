<?php

namespace App\Controllers;

use App\Models\ConteudoModel;

class ConteudoController extends BaseController
{
    protected $helpers = ['url'];

    public function index(): string
    {
        return $this->pagina(1, 'home');
    }

    public function quemsou(): string
    {
        return $this->pagina(3, 'quemsou');
    }

    public function produtos(): string
    {
        return $this->pagina(4, 'produtos');
    }

    public function contato(): string
    {
        return $this->pagina(5, 'contato');
    }

    /**
     * Busca o conteúdo de uma página no banco e envia para a view.
     * Se o registro não existir, a view mostra um texto padrão.
     */
    private function pagina(int $id, string $view): string
    {
        $conteudoModel = new ConteudoModel();

        return view($view, [
            'conteudo' => $conteudoModel->find($id),
        ]);
    }
}
