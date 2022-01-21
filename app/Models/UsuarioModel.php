<?php namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model {
    protected $table = 'usuarios';

    protected $allowedFields = [
        'nome',
        'email',
        'senha'
    ];

    public function getByEmail(string $email) : array {


        $rq = $this->where('email', $email)->first();

        return is_null($rq) ? [] : $rq;
    }
}