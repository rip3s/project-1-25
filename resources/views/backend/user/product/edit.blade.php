@extends('layouts.master_backend')
@section('contant')
                <div class="col-lg-12 grid-margin stretch-card mt-4">
                        <div class="card mt-4">
                        <div class="card-body mt-4">
                        <div class="row">
                                <h5 class="card-header">Edit</h5>
                                <div class="card-body">
                                  <div>
                                  <form method="POST" action="{{ url('admin/user/product/update/'.$pro->product_id) }}">
                                   @csrf
                                   <label for="defaultFormControlInput" class="form-label">Name</label>
                                    <input
                                      type="text"
                                      value="{{$pro->name}}"
                                      name="name"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกชื่อสินค้า"
                                      aria-describedby="defaultFormControlHelp"/>
                                      <label for="defaultFormControlInput" class="form-label">Price</label>
                                    <input
                                      type="text"
                                      value="{{$pro->price}}"
                                      name="price"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกราคาสินค้า"
                                      aria-describedby="defaultFormControlHelp"/>
                                      <label for="defaultFormControlInput" class="form-label">Description</label>
                                    <input
                                      type="text"
                                      value="{{$pro->description}}"
                                      name="description"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกรายละเอียด"
                                      aria-describedby="defaultFormControlHelp"/>
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