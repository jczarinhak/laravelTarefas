<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            'name' => 'João Silva',
            'email' => 'joao@exemplo.com',
            'telefone' => '(00)1234-5678',
            'data_nascimento' => '1990-05-15',
        ]);

    
        DB::table('contacts')->insert([
            'name' => 'Maria Souza',
            'email' => 'maria@exemplo.com',
            'telefone' => '(00)9876-5432',
            'data_nascimento' => '1995-08-20',
        ]);
    }
}
