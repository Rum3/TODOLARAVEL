@extends('auth.layouts')

@section('content')
<br><br><br>    


<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">dataBase</th>
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