<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sound extends Model
{
    //Tout les champs associés
    protected $fillable = [
    'picture',
    'title',
    'description',
    'author',
    'date',
    ];

    /**
    * Nom de la table.
    *
    * @var string
    */
    protected $table = 'sound';

    /**
     * Clé primaire.
     *
     * @var string
     */
    protected $primaryKey = 'id_sound';

    /**
    * Active le timestamped automatique.
    * 
    * @var bool
    */
    public $timestamps = false;
}