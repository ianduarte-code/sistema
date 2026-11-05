<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

/**
 * Cria a tabela "Conteudo" usada pelo ConteudoModel.
 *
 * O segundo parâmetro de createTable() evita erro se a tabela já
 * existir — importante no servidor da faculdade, onde ela já está
 * criada com os dados do aluno.
 *
 * Não há seeder: os dados do servidor não devem ser sobrescritos.
 */
class CreateConteudo extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'Id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'Titulo' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => false,
            ],
            'Texto' => [
                'type' => 'TEXT',
                'null' => false,
            ],
        ]);

        $this->forge->addKey('Id', true);
        $this->forge->createTable('Conteudo', true);
    }

    public function down()
    {
        $this->forge->dropTable('Conteudo', true);
    }
}
