<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->paginate(20);
        return view('admin.users.index', compact('users'));
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        $permissions = Permission::all();
        return view('admin.users.edit', compact('user', 'roles', 'permissions'));
    }

    public function update(Request $request, User $user)
    {
        try {
            DB::beginTransaction();
            $request->validate([
                'cellphone' => 'required|iran_mobile'
            ]);

            $user->update([
                'name' => $request->name,
                'cellphone' => $request->cellphone,
            ]);

            $user->syncRoles($request->role);

            $permissions = $request->except('_token', 'cellphone', 'role', 'name', '_method');
            $user->syncPermissions($permissions);

            DB::commit();
        } catch (\Exception $ex) {
            DB::rollBack();
            alert()->error('مشکل در ویرایش نقش', $ex->getMessage())->persistent('حله');
            return redirect()->back();
        }

        alert()->success('کاربر مورد نظر ویرایش شد', 'باتشکر');
        return redirect()->route('admin.users.index');
    }
}
alert()->success('ورود شما موفقیت آمیز بود', 'باتشکر') ->persistent('حله');
