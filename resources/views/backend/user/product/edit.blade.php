@extends('layouts.master_backend')
@section('contant')
                <div class="col-lg-12 grid-margin stretch-card mt-4">
                        <div class="card mt-4">
                        <div class="card-body mt-4">
                        <div class="row">
                                <h5 class="card-header">Edit</h5>
                                <div class="card-body">
                                  <div>
                                  <form method="POST" enctype="multipart/form-data" action="{{ url('admin/user/product/update/'.$pro->product_id) }}">
                                   @csrf
                                   <label for="defaultFormControlInput" class="form-label">Name</label>
                                    <input
                                      type="text"
                                      name="name"
                                      value="{{ $pro->name}}"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกชื่อสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />
                                    <div class="mt-3">
                                        @error('name')
                                          <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                      </div>
                                    <label for="defaultFormControlInput" class="form-label">Price</label>
                                    <input
                                      type="text"
                                      name="price"
                                      value="{{ $pro->price }}"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกราคาสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />

                                    <label for="defaultFormControlInput" class="form-label">Description</label>
                                    <input
                                      type="text"
                                      name="description"
                                      value="{{ $pro->description }}"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกรายละเอียดสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />

                                    <label for="exampleFormControlSelect1" class="form-label">Category</label>
                                    <select name="category_id" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                    @foreach ($cat as $c)
                                    <option value ="{{ $pro->category_id}}"
                                     @if ($c->category_id == $pro->category_id)
                                    selected
                                    @endif>
                                    {{$c->name}}
                                    </option>
                                    @endforeach
                                    </select>

                                    <div class="mt-4">
                                      <img src="{{ asset('backend/product/resize/'.$pro->image) }}" alt="">
                                    </div>

                                    <label for="defaultFormControlInput" class="form-label">Images</label>
                                      <div class="input-group">
                                        <input name="image" value="{{$pro->image}}" type="file" class="form-control" id="inputGroupFile02" />
                                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                      </div>

                                      <input type="submit" value="อัพเดท" class="btn btn-primary mt-3"></input>
                                    <a href="{{ route('u.product') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                                  </div>
                                </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
@endsection