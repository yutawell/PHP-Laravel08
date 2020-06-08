<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//4【応用】 artisanを使って、Admin/ProfileControllerを作成しましょう。
//5【応用】 Admin/ProfileControllerに、以下のadd, create, edit, update それぞれのActionを追加してみましょう。
class ProfileController extends Controller
{
    public function add()
    {
        return view('admin.profile.create');
    }

    public function create()
    {
        return redirect('admin/profile/create');
    }

    public function edit()
    {
        return view('admin.profile.edit');
    }

    public function update()
    {
        return redirect('admin/profile/edit');
    }
}
