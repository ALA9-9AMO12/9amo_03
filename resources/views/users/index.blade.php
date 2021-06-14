@extends('base')

@section('main')
    <div class="row">
        <div class="col-sm-12">
            <h1 class="display-3">Users</h1>

                <div class="col-sm-12">

                    @if(session()->get('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                </div>

            <div>
                <a style="margin: 19px;" href="{{ route('users.create')}}" class="btn btn-primary">New user</a>
            </div>

            <table class="table table-striped">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Username</td>
                    <td>Password</td>
                    <td>Admin</td>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->username}}}</td>
                        <td>{{$user->password}}</td>
                        <td>{{$user->admin}}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                            <form action="{{ route('users.destroy', $user->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
            </div>
@endsection
