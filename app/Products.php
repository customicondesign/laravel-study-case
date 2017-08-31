<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Products extends Model
{
    use Sortable;

    protected $fillable = ['name', 'details'];

    public $sortable = ['id', 'name', 'details', 'create_at', 'update_at'];
}
