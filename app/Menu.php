<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Menu;
use App\SubMenu;

class Menu extends Model
{
    protected $table = 'menus';

    protected $fillable = ['id', 'modules', 'link_modules', 'urutan', 'parent', 'icon', 'description'];

    // public function subMenu(){
    //   return $this->hasMany('App\SubMenu', 'id');
    // }
}
