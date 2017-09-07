<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Role;

class Role extends Model
{
  protected $table = 'roles';

  protected $fillable = ['code', 'name', 'label'];
  
}
