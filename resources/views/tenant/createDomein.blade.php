<form method="post" action="{{ route('tenants.store') }}">
        @csrf
        
        <label for="tenant_id">Tenant ID:</label>
        <input type="text" name="tenant_id" id="tenant_id">
        
        <label for="domain">Domain:</label>
        <input type="text" name="domain" id="domain">
        
        <button type="submit">Create Tenant</button>
    </form>