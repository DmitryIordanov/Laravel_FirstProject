@extends('templates.admin')

@section('content')

    <div style="display: none">
        {{ $titlePage = 'All users' }}
    </div>

    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th scope="col">Created</th>
                <th scope="col">Destroy</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <select class="form-select" aria-label="Default select example" name="roleSelect">
                            <option selected="{{ $user->role }}" disabled>{{ $user->role }}</option>
                            <option value="user">user</option>
                            <option value="admin">admin</option>
                        </select>
                    </td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <div style="display: flex">
                            <form action="{{ route('admin.user.delete', $user->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-primary">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="mt-3">
            {{ $users->withQueryString()->links() }}
        </div>
    </div>

@endsection
