<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMsAverageIncomeTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'BIGINT',
                'constraint'     => 20,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'payment_date' => [
                'type'       => 'DATE',
            ],
            'payment_price' => [
                'type'       => 'INT',
                'constraint' => 20,
            ],
            'buruh1_percent' => [
                'type'       => 'INT',
                'constraint' => 4,
            ],
            'buruh1_price' => [
                'type'       => 'INT',
                'constraint' => 20,
            ],
            'buruh2_percent' => [
                'type'       => 'INT',
                'constraint' => 4,
            ],
            'buruh2_price' => [
                'type'       => 'INT',
                'constraint' => 20,
            ],
            'buruh3_percent' => [
                'type'       => 'INT',
                'constraint' => 4,
            ],
            'buruh3_price' => [
                'type'       => 'INT',
                'constraint' => 20,
            ],
            'status' => [
                'type'       => 'BOOLEAN',
                'default'    => false,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('ms_average_income');
    }

    public function down()
    {
        $this->forge->dropTable('ms_average_income');
    }
}
