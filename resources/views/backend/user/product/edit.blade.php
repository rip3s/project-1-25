@extends('layouts.master_backend')
@section('contant')
                <div class="col-lg-12 grid-margin stretch-card mt-4">
                        <div class="card mt-4">
                        <div class="card-body mt-4">
                        <div class="row">
                                <h5 class="card-header">Edit</h5>
                                <div class="card-body">
                                  <div>
                                    <label for="defaultFormControlInput" class="form-label">Name</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      id="defaultFormControlInput"
                                      placeholder="กรุณากรอกประเภทสินค้า"
                                      aria-describedby="defaultFormControlHelp"/>
                                    <a href="" class="btn btn-primary mt-3">แก้ไข</a>
                                    <a href="{{ route('u.product') }}" class="btn btn-danger mt-3 mx-2">ย้อนกลับ</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
@endsection