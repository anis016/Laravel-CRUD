<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';

    /* By creating const CREATED_AT And UPDATED_AT the eloquent automatically inserts data */
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $fillable = [
      'name',
      'description',
      'quantity',
      'price',
      'user_id'
    ];

}
