<div class="modal fade" id="exampleModal{{ $user->id ?? '' }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{ $user ? 'Update User' : 'Add User' }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        {{ $user ?? '' }}
        
        <div class="modal-body">
          
            <div class="row">
              <div class="col-12 col-md-6">
                <div class="form-group">
                  <input class="form-control" placeholder="Name" name="name" id="name" value="{{ $user->name ?? '' }}">
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="form-group">
                  <input class="form-control" placeholder="Last Name" name="lastname" id="lastname" value="{{ $user->lastname ?? '' }}">
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="form-group">
                  <input class="form-control" placeholder="Phone Number" name="telephone" value="{{ $user->telephone ?? '' }}">
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="form-group">
                  <input class="form-control" type="email" placeholder="Email" name="email" value="{{ $user->email ?? '' }}">
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="form-group ">
                  <select name="role" class="form-control">
                    @foreach ($roles as $role)
                      <option disabled selected hidden> {{$user->roles[0]->name ?? 'Rôle'}}</option>
                      <option value="{{$role->name}}"> {{$role->name}} </option>
                      {{-- <option value="Féminin">Féminin</option> --}}
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="form-group ">
                    <select name="sexe" class="form-control">
                        <option disabled selected hidden>{{$user->sexe ?? 'Sexe ...'}}</option>
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
              <input type="submit" class="btn btn-primary" value="{{ $user ? 'Update': 'Save' }}"></button>
            </div>
          
        </div>
        
      </div>
    </div>
</div>