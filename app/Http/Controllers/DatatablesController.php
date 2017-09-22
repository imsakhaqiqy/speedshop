<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Yajra\Datatables\Datatables;

use App\Role;
use App\User;
use App\Menu;
<<<<<<< HEAD
use App\Units;
=======
use App\Family;
>>>>>>> 9f8169ae67eb8b043bcc7597d45d07b3796d9fab

class DatatablesController extends Controller
{
    public function getRoles(Request $request){
      \DB::statement(\DB::raw('set @rownum=0'));
      $roles = Role::select([
        \DB::raw('@rownum := @rownum + 1 AS rownum'),
        'id',
        'code',
        'name',
        'label',
      ]);
      $datatables = Datatables::of($roles)
        ->addColumn('actions', function($roles){
          // $actions_html ='<a href="'.url('role/'.$roles->id.'').'" class="btn btn-info btn-xs" title="Click to view the detail">';
          // $actions_html .=    '<i class="fa fa-external-link-square"></i>';
          // $actions_html .='</a>&nbsp;';
          $actions_html ='<a href="'.url('role/'.$roles->id.'/edit').'" class="btn btn-success btn-xs" title="Click to edit this role">';
          $actions_html .=    '<i class="fa fa-edit"></i>';
          $actions_html .='</a>&nbsp;';
          $actions_html .='<button type="button" class="btn btn-danger btn-xs btn-delete-role" data-id="'.$roles->id.'" data-text="'.$roles->name.'">';
          $actions_html .=    '<i class="fa fa-trash"></i>';
          $actions_html .='</button>';
          return $actions_html;
        });
        if($keyword = $request->get('search')['value']){
          $datatables->filterColumn('rownum', 'whereRaw', '@rownum + 1 like ?', ["%{$keyword}%"]);
        }
        return $datatables->make(true);
    }

    public function getUsers(Request $request){
      \DB::statement(\DB::raw('set @rownum=0'));
      $users = User::with('roles')->select([
        \DB::raw('@rownum := @rownum + 1 AS rownum'),
          'users.*',
      ]);
      $datatables = Datatables::of($users)
        ->editColumn('role', function($users){
          return $users->roles->name;
        })
        ->addColumn('actions', function($users){
          $actions_html ='<a href="'.url('user/'.$users->id.'/edit').'" class="btn btn-success btn-xs" title="Click to edit this user">';
          $actions_html .=    '<i class="fa fa-edit"></i>';
          $actions_html .='</a>&nbsp;';
          $actions_html .='<button type="button" class="btn btn-danger btn-xs btn-delete-role" data-id="'.$users->id.'" data-text="'.$users->name.'">';
          $actions_html .=    '<i class="fa fa-trash"></i>';
          $actions_html .='</button>';
          return $actions_html;
        });
        if($keyword = $request->get('search')['value']){
          $datatables->filterColumn('rownum', 'whereRaw', '@rownum + 1 like ?', ["%{$keyword}%"]);
        }
        return $datatables->make(true);
    }

    public function getMenus(Request $request){
      \DB::statement(\DB::raw('set @rownum=0'));
      $menus = Menu::select([
        \DB::raw('@rownum := @rownum + 1 AS rownum'),
          'id',
          'modules',
          'link_modules',
          'urutan',
          'parent',
          'icon',
          'description',
      ]);
      $datatables = Datatables::of($menus)
        ->addColumn('actions', function($menus){
          $actions_html ='<a href="'.url('menu/'.$menus->id.'/edit').'" class="btn btn-success btn-xs" title="Click to edit this menu">';
          $actions_html .=    '<i class="fa fa-edit"></i>';
          $actions_html .='</a>&nbsp;';
          $actions_html .='<button type="button" class="btn btn-danger btn-xs btn-delete-role" data-id="'.$menus->id.'" data-text="'.$menus->menu.'">';
          $actions_html .=    '<i class="fa fa-trash"></i>';
          $actions_html .='</button>';
          return $actions_html;
        });
        if($keyword = $request->get('search')['value']){
          $datatables->filterColumn('rownum', 'whereRaw', '@rownum + 1 like ?', ["%{$keyword}%"]);
        }
        return $datatables->make(true);
    }

<<<<<<< HEAD

    public function getUnits(Request $request){
      \DB::statement(\DB::raw('set @rownum=0'));
      $units = Units::with('users')->select([
        \DB::raw('@rownum := @rownum + 1 AS rownum'),
          'units.*',
      ])->where(['deleted'=>'0']);
      $datatables = Datatables::of($units)
        ->editColumn('creator',function($units){
          if(empty($units->users->name)){
            return 'null';
          }else{
            return $units->users->name;
          }
        })
        ->addColumn('actions', function($units){
          $actions_html ='<a href="'.url('unit/'.$units->id.'/edit').'" class="btn btn-success btn-xs" title="Click to edit this units">';
          $actions_html .=    '<i class="fa fa-edit"></i>';
          $actions_html .='</a>&nbsp;';
          $actions_html .='<button type="button" class="btn btn-danger btn-xs btn-delete-unit" data-id="'.$units->id.'" data-text="'.$units->name.'">';
          $actions_html .=    '<i class="fa fa-trash"></i>';
          $actions_html .='</button>';
          return $actions_html;
        });
        if($keyword = $request->get('search')['value']){
          $datatables->filterColumn('rownum', 'whereRaw', '@rownum + 1 like ?', ["%{$keyword}%"]);
        }
        return $datatables->make(true);
    }

=======
    public function getFamilies(Request $request){
      \DB::statement(\DB::raw('set @rownum=0'));
      $families = Family::with('user')->select([
        \DB::raw('@rownum := @rownum + 1 AS rownum'),
        'families.*'
      ]);
      $datatables = Datatables::of($families)
      ->editColumn('creator', function($families){
        return strtoupper($families->user->name);
      })
      ->addColumn('actions', function($families){
        $actions_html ='<a href="'.url('family/'.$families->id.'/edit').'" class="btn btn-success btn-xs" title="Click to edit this family">';
        $actions_html .=    '<i class="fa fa-edit"></i>';
        $actions_html .='</a>&nbsp;';
        $actions_html .='<button type="button" class="btn btn-danger btn-xs btn-delete-family" data-id="'.$families->id.'" data-text="'.$families->name.'">';
        $actions_html .=    '<i class="fa fa-trash"></i>';
        $actions_html .='</button>';
        return $actions_html;
      });
      if($keyword = $request->get('search')['value']){
          $datatables->filterColumn('rownum', 'whereRaw', '@rownum + 1 like ?', ["%{$keyword}%"]);
      }
      return $datatables->make(true);
    }
>>>>>>> 9f8169ae67eb8b043bcc7597d45d07b3796d9fab
}
