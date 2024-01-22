@extends('layouts.master_backend')
@section('contant')
                <div class="col-lg-12 grid-margin stretch-card mt-4">
                        <div class="card mt-4">
                        <div class="card-body mt-4">
                        <div class="row">
                                <h5 class="card-header">Edit</h5>
                                <div class="card-body">
                                  <div>
                                  <form method="POST" action="{{ url('admin/user/category/update/'.$cat->category_id) }}">
                                   @csrf
                                    <label for="defaultFormControlInput" class="form-label">Name</label>
                                    <input
                                      type="text"
                                      name="name"
                                      value="{{$cat->name}}"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกประเภทสินค้า"
                                      aria-describedby="defaultFormControlHelp"/>
                                    <input type="submit" value="อัพเดท" class="btn btn-primary mt-3"></input>
                                    <a href="{{ route('u.category') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                                  </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
@endsection