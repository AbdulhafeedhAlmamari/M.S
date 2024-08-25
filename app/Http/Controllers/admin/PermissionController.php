<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Validation\Rules\Can;

class PermissionController extends Controller
{
    public $permission;

    public function __construct(Permission $permission)
    {
        $this->permission = $permission;
    }

    public function index()
    {
        $permissions = $this->permission->all();
        $roles = Role::all();

        return view('admin.permissions.index', compact('permissions','roles'));
    }

    public function store(Request $request)
    {
        Role::find($request->role_id)->permissions()->sync($request->permission);

        return back()->with('success', 'تم حفظ الصلاحيات الجديدة');
    }
}
