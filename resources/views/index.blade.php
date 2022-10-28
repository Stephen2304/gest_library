@extends('layouts.master')

@section('content')

    <div class="">
      <div class="card">
        <div class="card-header border-0">
          <div class="row align-items-center">
            <div class="col">
              <h3 class="mb-0">Liste Book</h3>
            </div>
            <div class="col text-right">


              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Add Book
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Add Book</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <div class="row">
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <input class="form-control" placeholder="Name of Book" name="name_book">
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <input class="form-control" placeholder="Title of Book" name="title_book">
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <input class="form-control" placeholder="Author of Book" name="author_book">
                            </div>
                          </div>
                          <div class="col-12 col-md-6">
                            <div class="form-group">
                              <input class="form-control" placeholder="Edition of Book" name="edition_book">
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
            <thead>
              <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
                <th>Extn.</th>
                <th>E-mail</th>
              </tr>
            </thead>
            <tbody>
            <tr>
              <td>Yuri</td>
              <td>Berry</td>
              <td>Chief Marketing Officer (CMO)</td>
              <td>New York</td>
              <td>40</td>
              <td>2009/06/25</td>
              <td>$675,000</td>
              <td>6154</td>
              <td>y.berry@datatables.net</td>
            </tr>
            <tr>
              <td>Caesar</td>
              <td>Vance</td>
              <td>Pre-Sales Support</td>
              <td>New York</td>
              <td>21</td>
              <td>2011/12/12</td>
              <td>$106,450</td>
              <td>8330</td>
              <td>c.vance@datatables.net</td>
            </tr>
            <tr>
              <td>Doris</td>
              <td>Wilder</td>
              <td>Sales Assistant</td>
              <td>Sydney</td>
              <td>23</td>
              <td>2010/09/20</td>
              <td>$85,600</td>
              <td>3023</td>
              <td>d.wilder@datatables.net</td>
            </tr>
            <tr>
              <td>Tiger</td>
              <td>Nixon</td>
              <td>System Architect</td>
              <td>Edinburgh</td>
              <td>61</td>
              <td>2011/04/25</td>
              <td>$320,800</td>
              <td>5421</td>
              <td>t.nixon@datatables.net</td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  
@endsection