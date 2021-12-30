<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelLogProdutor extends Model
{
    protected $fillable = [
    	'id',
    	'id_produtor',
        'created_at',
    	'updated_at',

    ]; 

    //nome da tabela
    protected $table = 'log_produtor';
}
