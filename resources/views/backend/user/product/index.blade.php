@extends('layouts.master_backend')
@section('contant')
                <div class="col-lg-12 grid-margin stretch-card mt-4">
                <div class="card mt-4">
                  <div class="card-body mt-4">
                    <h4 class="card-title">Product</h4>
                    <a href="{{ route('u.product.createform') }}" type="button" class="btn btn-outline-success btn-icon-text">
                    <i class="mdi mdi-plus btn-icon-prepend"></i> เพิ่มข้อมูล </a>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>category_id</th>
                            <th>price</th>
                            <th>description</th>
                            <th>image</th>
                            <th>created_at</th>
                            <th>update_at</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($product as $pro)
                          <tr>
                          <td>{{ $product->firstItem() + $loop->index}}</td>
                            <td>{{ $pro->name}}</td>
                            <td>{{ $pro->category->name}}</td>
                            <td>{{ $pro->price}}</td>
                            <td>{{ $pro->description}}</td>
                            <td>
                              <img src=" {{ asset('backend/product/resize/'.$pro->image) }}" alt="">
                            </td>
                            <td>{{ $pro->created_at}}</td>
                            <td>{{ $pro->updated_at}}</td>
                            <td class="text-danger">
                              <a href="{{ url('admin/user/product/edit/'.$pro->product_id) }}" type="button" class="btn btn-dark btn-icon-text" > Edit <i class="mdi mdi-file-check btn-icon-append"></i></a>
                              <a href="{{ url('admin/user/product/delete/'.$pro->product_id) }}" type="button" class="btn btn-danger btn-icon-text btn-sm"><i class="mdi mdi-upload btn-icon-prepend"></i> Delete </a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
@endsection