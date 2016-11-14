<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnaAssociati extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'AnaAssociati';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'avatar',
        'cap',
        'codicefiscale',
        'codicegarista',
        'cognome',
        'datanascita',
        'datascadlicenza',
        'indirizzo',
        'localita',
        'luogonascita',
        'nlicenza',
        'nome',
        'ntesseraagonista',
        'ntesserafipsas',
        'provincia',
        'provincianascita',
        'attivo'
    ];

    protected $casts = [
        'attivo' => 'boolean',
        'codicegarista' => 'integer',
    ];

    protected $dates = [
        'datanascita',
        'datascadlicenza'
    ];

    public static function boot(){
        parent::boot();

        static::creating(function($model){
            foreach ($model->attributes as $key => $value) {
                $model->{$key} = empty($value) ? null : $value;
            }
        });

//        static::updating(function($model){
//            foreach ($model->attributes as $key => $value) {
//                $model->{$key} = empty($value) ? null : $value;
//            }
//        });
    }
}
