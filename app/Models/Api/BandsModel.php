<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BandsModel extends Model
{
    use HasFactory;

    public function getById($id)
    {
        $result = [];

        foreach ($this->getAll() as $row) {
            if ($row['id'] == $id) {
               $result = $row; 
            }
        }

        return count($result) ? $result: abort(404);
    } 

    public function getByGenderId($gender_id)
    {
        $result = [];

        foreach ($this->getAll() as $row) {
            if ($row['gender_id'] == $gender_id) {
               $result[] = $row; 
            }
        }

        return count($result) ? $result: abort(404);
    } 

    public function getAll()
    {
        return [
            [
                'id' => 1,
                'gender_id' => 1,
                'listeners' => 223.563,
                'name' => 'Turma do Pagode',
                'summary' => 'Turma do Pagode é um grupo brasileiro de pagode e samba formado em 1994 na Zona Norte de São Paulo.'
            ],
            [
                'id' => 2,
                'gender_id' => 1,
                'listeners' => 251.901,
                'name' => 'Exaltasamba',
                'summary' => 'Resumir uma carreira consagrada de mais de vinte anos em poucas linhas é, no mínimo, um desafio'
            ],
            [
                'id' => 3,
                'gender_id' => 1,
                'listeners' => 259.139,
                'name' => 'Grupo Revelação',
                'summary' => 'O Grupo Revelação começou na década de 90 com um pagode de mesa tipicamente carioca. Com a ajuda de João Carlos Silva Filho'
            ],
            [
                'id' => 4,
                'gender_id' => 1,
                'listeners' => 156.197,
                'name' => 'Dilsinho',
                'summary' => 'Completando 10 anos de carreira em 2023, Dilsinho é hoje um dos principais nomes da cena do pagode nacional e se destaca pela perfil irreverente'
            ],
            [
                'id' => 5,
                'gender_id' => 2,
                'listeners' => 176.837,
                'name' => 'Sorriso Maroto',
                'summary' => 'O Sorriso Maroto é um grupo de pagode carioca, que começou com uma brincadeira no Grajaú em 1997. Com 5 integrantes o trabalho de Bruno'
            ],
            [
                'id' => 6,
                'gender_id' => 2,
                'listeners' => 170.673 ,
                'name' => 'Thiaguinho',
                'summary' => 'Thiago André Barbosa nasceu em Presidente Prudente, interior de São Paulo, mas passou a infância na cidade de Ponta Porã no Mato Grosso do Sul'
            ],
            [
                'id' => 7,
                'gender_id' => 2,
                'listeners' => 148.272,
                'name' => 'Ferrugem',
                'summary' => 'Batizado como Jheison Failde de Souza, Ferrugem, do bairro de Campo Grande, Rio de Janeiro, com 27 anos traz sua paixão pelo samba desde criança'
            ],
            [
                'id' => 8,
                'gender_id' => 2,
                'listeners' => 202.731,
                'name' => 'Pixote',
                'summary' => 'O Pixote é um grupo de pagode criado em 1993 na cidade de São Paulo por amigos que tocavam por diversão numa praça.'
            ],
            [
                'id' => 9,
                'gender_id' => 2,
                'listeners' => 186.013,
                'name' => 'Raça Negra',
                'summary' => 'Liderado pelo vocalista Luiz Carlos, seu início se deu na periferia da Zona Leste de São Paulo, Brasil em 1983, como um trio'
            ],
            [
                'id' => 10,
                'gender_id' => 2,
                'listeners' => 114.002,
                'name' => 'Belo',
                'summary' => 'Marcelo Pires Vieira mais conhecido por Belo, 28 anos, é um cantor e compositor brasileiro.'
            ]
        ];
    
    } 
}
