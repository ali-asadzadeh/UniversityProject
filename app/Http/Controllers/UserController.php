<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use App\Models\User;

class UserController extends Controller
{
    public function index(): View
    {
        $users = DB::table('users')->get();
        return view('admin.users.index', ['users' => $users]);
    }

    public function create(): View
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        // اعتبارسنجی اطلاعات ورودی
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'role' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // ورود اطلاعات به پایگاه داده
        DB::table('users')->insert([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'role' => $request->role,
            'password' => bcrypt($request->password), // رمزگذاری رمز عبور
            'created_at' => now(), // اضافه کردن created_at
            'updated_at' => now(), // اضافه کردن updated_at
        ]);

        return redirect()->route('admin.users.index')->with('success', 'کاربر با موفقیت ایجاد شد.');
    }

    public function edit($id): View
    {
        $user = DB::table('users')->where('id', $id)->first();
        return view('admin.users.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        // اعتبارسنجی اطلاعات ورودی
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'role' => 'required|string',
            'password' => 'nullable|string|min:8|confirmed', // رمز عبور می‌تواند خالی باشد
        ]);

        // ورود اطلاعات به پایگاه داده
        DB::table('users')->where('id', $id)->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'role' => $request->role,
            'updated_at' => now(), // به‌روزرسانی updated_at
            'password' => $request->password ? bcrypt($request->password) : DB::raw('password'), // تنها در صورت وارد کردن رمز عبور جدید آن را به‌روزرسانی کن
        ]);

        return redirect()->route('admin.users.index')->with('success', 'کاربر با موفقیت ویرایش شد.');
    }

    public function destroy($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('admin.users.index');
    }
}
