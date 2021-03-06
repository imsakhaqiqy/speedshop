<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Yajra\Datatables\Datatables;

use App\Role;
use App\User;
use App\Menu;
use App\Units;
use App\Family;
use App\Product;
use App\Category;

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
      ])->where('deleted',0);
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
      ])->where('deleted',0);
      $datatables = Datatables::of($users)
        ->editColumn('role', function($users){
          return $users->roles->name;
        })
        ->addColumn('actions', function($users){
          $actions_html ='<a href="'.url('user/'.$users->id.'/edit').'" class="btn btn-success btn-xs" title="Click to edit this user">';
          $actions_html .=    '<i class="fa fa-edit"></i>';
          $actions_html .='</a>&nbsp;';
          $actions_html .='<button type="button" class="btn btn-danger btn-xs btn-delete-user" data-id="'.$users->id.'" data-text="'.$users->name.'">';
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

    public function getFamilies(Request $request){
      \DB::statement(\DB::raw('set @rownum=0'));
      $families = Family::with('user')->select([
        \DB::raw('@rownum := @rownum + 1 AS rownum'),
        'families.*'
      ])->where('deleted',0);
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

    public function getCategories(Request $request){
      \DB::statement(\DB::raw('set @rownum=0'));
      $categories = Category::with('user','family')->select([
        \DB::raw('@rownum := @rownum + 1 AS rownum'),
        'categories.*'
      ])->where('deleted',0);
      $datatables = Datatables::of($categories)
      ->editColumn('creator', function($categories){
        return strtoupper($categories->user->name);
      })
      ->editColumn('family', function($categories){
        return $categories->family->name;
      })
      ->addColumn('actions', function($categories){
        $actions_html ='<a href="'.url('category/'.$categories->id.'/edit').'" class="btn btn-success btn-xs" title="Click to edit this family">';
        $actions_html .=    '<i class="fa fa-edit"></i>';
        $actions_html .='</a>&nbsp;';
        $actions_html .='<button type="button" class="btn btn-danger btn-xs btn-delete-category" data-id="'.$categories->id.'" data-text="'.$categories->name.'">';
        $actions_html .=    '<i class="fa fa-trash"></i>';
        $actions_html .='</button>';
        return $actions_html;
      });
      if($keyword = $request->get('search')['value']){
          $datatables->filterColumn('rownum', 'whereRaw', '@rownum + 1 like ?', ["%{$keyword}%"]);
      }
      return $datatables->make(true);
    }

    public function getProducts(Request $request){
      \DB::statement(\DB::raw('set @rownum=0'));
      $product = Product::with(['family','category','unit','user'])->select([
        \DB::raw('@rownum := @rownum + 1 AS rownum'),
        'products.*'
      ]);
      $datatables = Datatables::of($product)
      ->editColumn('family', function($product){
        return strtoupper($product->family->name);
      })
      ->editColumn('category', function($product){
        return strtoupper($product->category->name);
      })
      ->editColumn('unit', function($product){
        return strtoupper($product->unit->name);
      })
      ->editColumn('creator', function($product){
        return strtoupper($product->user->name);
      })
      ->addColumn('actions', function($product){
        $actions_html ='<a href="'.url('family/'.$product->id.'/edit').'" class="btn btn-success btn-xs" title="Click to edit this family">';
        $actions_html .=    '<i class="fa fa-edit"></i>';
        $actions_html .='</a>&nbsp;';
        $actions_html .='<button type="button" class="btn btn-danger btn-xs btn-delete-family" data-id="'.$product->id.'" data-text="'.$product->name.'">';
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
