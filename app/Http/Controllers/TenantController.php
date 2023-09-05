<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;
use App\Models\User;


class TenantController extends Controller
{
    public function show()
    {
        $users = User::all();
        return view('admin', compact('users'));
    }
    
    public function showTenant() {
        return view('tenant.createDomein');
    }

    public function storeTenant(Request $request)
{
    // Валидация на входните данни
    $request->validate([
        'tenant_id' => 'required|unique:tenants,id',
        'domain' => 'required|unique:domains,domain',
    ]);
    
    // Създаване на нов наемател и домейн
    $tenant = new Tenant(['id' => $request->input('tenant_id')]);
    $domain = new Tenant(['domain' => $request->input('domain')]);
    
    // Съхранение на данните в базата данни
    $tenant->save();
    $tenant->domains()->save($domain);
    
    return redirect()->back();
}

}
