@extends('layouts.master_backend')
@section('contant')
                <div class="col-lg-12 grid-margin stretch-card mt-4">
                <div class="card mt-4">
                  <div class="card-body mt-4">
                    <h4 class="card-title">Category</h4>
                    <a href="{{ route('u.category.createform') }}" type="button" class="btn btn-outline-success btn-icon-text">
                    <i class="mdi mdi-alert btn-icon-prepend"></i> เพิ่มข้อมูล </a>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Create_at</th>
                            <th>Update_at</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($category as $cat)
                          <tr>
                            <td>{{ $category->firstItem() + $loop->index}}</td>
                            <td>{{ $cat->name}}</td>
                            <td>{{ $cat->created_at}}</td>
                            <td>{{ $cat->updated_at}}</td>
                            <td class="text-danger">
                              <a href="{{ url('admin/user/category/edit/'.$cat->category_id) }}" type="button" class="btn btn-dark btn-icon-text" > Edit <i class="mdi mdi-file-check btn-icon-append"></i></a>
                              <a href="{{ url('admin/user/category/delete/'.$cat->category_id) }}" type="button" class="btn btn-danger btn-icon-text btn-sm"><i class="mdi mdi-upload btn-icon-prepend"></i> Delete</a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      <div class="mt-3 container">
                        {{ $category->links('pagination::bootstrap-5') }}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
@endsection