<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnaAssociazione extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'anaassociazione';

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
    protected $fillable = ['associazione', 'cap', 'localita', 'provincia', 'indirizzo', 'indirizzo2', 'presidente', 'logo'];
}
