@extends('layouts.master_backend')
@section('contant')
                <div class="col-lg-12 grid-margin stretch-card mt-4">
                <div class="card mt-4">
                  <div class="card-body mt-4">
                    <h4 class="card-title">Product</h4>
                    <a href="{{ route('u.product.createform') }}" type="button" class="btn btn-outline-success btn-icon-text">
                    <i class="mdi mdi-alert btn-icon-prepend"></i> เพิ่มข้อมูล </a>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Count</th>
                            <th>Create_at</th>
                            <th>Update_at</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>บะหมี่</td>
                            <td>20</td>
                            <td class="text-danger"> 2022-07-25 12:46:29 <i class="mdi mdi-arrow-down"></i></td>
                            <td class="text-danger"> 2022-07-25 12:46:29 <i class="mdi mdi-arrow-down"></i></td>
                            <td class="text-danger">
                              <a href="{{ route('u.product.edit')}}" type="button" class="btn btn-dark btn-icon-text" > Edit <i class="mdi mdi-file-check btn-icon-append"></i></a>
                              <a href=" " type="button" class="btn btn-danger btn-icon-text btn-sm"><i class="mdi mdi-upload btn-icon-prepend"></i> Delete </a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
@endsection