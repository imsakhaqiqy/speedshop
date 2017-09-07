<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Yajra\Datatables\Datatables;

use App\Role;
use App\User;

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
}
