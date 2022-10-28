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
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Add User </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    
                    <div class="modal-body">
                      <form method="POST" action="{{route('admin.users.store')}}">
                        @csrf
                        <div class="row">
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <input class="form-control" placeholder="Name" name="name" id="name" value="">
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <input class="form-control" placeholder="Last Name" name="lastname" id="lastname">
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <input class="form-control" placeholder="Phone Number" name="telephone">
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <input class="form-control" type="email" placeholder="Email" name="email">
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="form-group ">
                              <select name="role" class="form-control">
                                @foreach ($roles as $role)
                                  <option disabled selected hidden>Rôle</option>
                                  <option value="{{$role->name}}"> {{$role->name}} </option>
                                  {{-- <option value="Féminin">Féminin</option> --}}
                                @endforeach
                              </select>
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="form-group ">
                                <select name="sexe" class="form-control">
                                    <option disabled selected hidden>Sexe ...</option>
                                    <option value="Masculin">Masculin</option>
                                    <option value="Féminin">Féminin</option>
                                </select>
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <input class="form-control" type="date"  placeholder="Date de Naissance" name="date_naissance">
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <input type="password" class="form-control"  placeholder="Password" name="password">
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <input type="password" class="form-control"  placeholder="confirmed password" name="confirmedpassword">
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <input type="submit" class="btn btn-primary" value="save"></button>
                        </div>
                      </form>
                    </div>
                    
                  </div>
                </div>
            </div>
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
                  <button class="btn btn-icon btn-primary btn-sm user_dialog" type="button" data-toggle="modal" data-target="#exampleModal" data-id="{{ $user->id }}">
                      <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
                      <span class="btn-inner--text">Edit</span>
                  </button>
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