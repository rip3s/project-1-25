@extends('layouts.master_backend')
@section('contant')
                <div class="col-lg-12 grid-margin stretch-card mt-4">
                        <div class="card mt-4">
                        <div class="card-body mt-4">
                        <div class="row">
                        <form method="POST" action="{{ url('admin/user/category/insert') }}">
                            @csrf
                                <h5 class="card-header">เพิ่มข้อมูล</h5>
                                <div class="card-body">
                                  <div>
                                    <label for="defaultFormControlInput" class="form-label">Name</label>
                                    <input
                                      type="text"
                                      name="name"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกประเภทสินค้า"
                                      aria-describedby="defaultFormControlHelp"
                                    />
                                    <div class="mt-3">
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                    <input type="submit" value="บันทึก" class="btn btn-primary mt-3"/>
                                    <a href="{{ route('u.category') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
@endsection