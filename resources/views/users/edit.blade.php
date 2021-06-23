@extends('base')
@section('main')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Update a user</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br />
            @endif
            <form method="post" action="{{ route('users.update', $user->id) }}">
                @method('PATCH')
                @csrf

                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" name="username" value={{ $user->username }} />
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password" value={{ $user->password }} />
                </div>

                <div class="form-group">
                    <label for="last_name">Admin:</label>
                    <input name="admin" type="hidden" value="0">
                    <input name="admin" type="checkbox" value="1">
                </div>


                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
