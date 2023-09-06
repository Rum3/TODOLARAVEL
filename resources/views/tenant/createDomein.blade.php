@extends('auth.layouts')

@section('content')
<form method="post" action="{{ route('tenants.store') }}">
        @csrf     
        <input type="text" name="user_id" value="{{ $user_id }}">
        <label for="tenant_id">DataBase:</label>
        <input type="text" name="tenant_id" id="tenant_id">
        <button type="submit">Create Tenant</button>
</form>
 @endsection