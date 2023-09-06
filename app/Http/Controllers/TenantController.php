<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TenantController extends Controller
{
    public function show()
    {
        $users = User::all();
        return view('admin', compact('users'));
    }
    
    public function showTenant($id) {
        return view('tenant.createDomein', ['user_id' => $id]);
    }
    

    public function storeTenant(Request $request)
    {
        $request->validate([
            'tenant_id' => 'required|unique:tenants,id',
            'user_id' => 'required|exists:users,id',
        ]);
    
        $tenant = new Tenant(['id' => $request->input('tenant_id')]);
        $tenant->save();
    
        $user_id = $request->input('user_id');
        $user = User::find($user_id); 
        $user->tenant_id = $request->input('tenant_id');
        $user->save();
    
        return redirect()->back()->with('success', 'Тенантът и потребителят са запазени успешно');
    }
    

}
