@extends('layouts.master_backend')
@section('contant')
<div class="col-lg-12 grid-margin stretch-card mt-4">
                <div class="card mt-4">
                  <div class="card-body mt-4">
                    <h4 class="card-title">ตารางผู้ใช้</h4>
                    </p>
                    <div class="table-responsive">
                      <table class="table table-dark">
                        <thead>
                          <tr>
                            <th> No </th>
                            <th> Name </th>
                            <th> phone </th>
                            <th> Email </th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($u as $users)
                          <tr>
                          <td>{{ $user->firstItem() + $loop->index}}</td>
                            <td>{{ $users -> name}}</td>
                            <td>{{ $users -> phone}}</td>
                            <td>{{ $users -> email}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
@endsection