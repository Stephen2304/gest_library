@extends('layouts.master')

@section('livre')

<div class="">
    <div class="card">
      <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Users</h3>
          </div>
          <div class="col text-right">


            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Add user
              </button>

            <!-- Modal -->
            <form method="POST" action="{{route('admin.users.store')}}">
              @csrf
              @include('users_book.form', ['user' => null])
            </form>
          </div>
        </div>
      </div>
      <div class="table-responsive">
        @if(session()->has('message'))
            <p class="alert alert-class">{{ session('message')}}</p>
        @endif
        <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
          <thead>
            <tr>
              <th>Firstname</th>
              <th>Last name</th>
              <th>Phone</th>
              <th>Sexe</th>
              <th>E-mail</th>
              <th>Rôle</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
              <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->lastname }}</td>
                <td>{{ $user->telephone }}</td>
                <td>{{ $user->sexe }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->roles[0]->name }}</td>
                <td class="text-center">
                  <button class="btn btn-icon btn-primary btn-sm user_dialog" type="button" data-toggle="modal" data-target="#exampleModal{{ $user->id }}" data-id="{{ $user->id }}">
                      <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
                      <span class="btn-inner--text">Edit</span>
                  </button>
                  @include('users_book.form', ['user' => $user])
                  <button class="btn btn-icon btn-danger btn-sm" type="button">
                      <span class="btn-inner--icon"><i class="fas fa-trash"></i></span>
                      <span class="btn-inner--text">Delete</span>
                  </button>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        <div class="mt-3">
        {!! $users->links() !!}
        </div>
      </div>
    </div>
  </div>

@endsection

<script>
  $(document).on("click", ".user_dialog", function() {
    var Name = $(this).data('id');
    $(".modal-body #name").val(Name);
  })
</script>