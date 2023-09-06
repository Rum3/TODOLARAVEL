@extends('auth.layouts')

@section('content')
<br><br><br>    
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Add DataBase</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        @if ($user->role === 'user')
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('tenant', ['id' => $user->id]) }}" class="btn btn-primary">Add</a>
                    </td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>
@endsection