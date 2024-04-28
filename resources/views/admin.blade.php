@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> --}}
            {{-- @dd($userAll) --}}
            <section class="vh-100" style="background-color: #f4f5f7;">
                <div class="container py-5 h-100">
                  <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-lg-6 mb-4 mb-lg-0">
                        <table class="table align-middle mb-0 bg-white">
                            <thead class="bg-light">
                              <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Number</th>
                                {{-- <th>Position</th>
                                <th>Actions</th> --}}
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($userAll as $userDetails)

                                <tr>
                                    <td>
                                    <div class="d-flex align-items-center">
                                        <img
                                            src="https://mdbootstrap.com/img/new/avatars/8.jpg"
                                            alt=""
                                            style="width: 45px; height: 45px"
                                            class="rounded-circle"
                                            />
                                        <div class="ms-3">
                                        <p class="fw-bold mb-1">{{$userDetails->name}}</p>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                        <p class="text-muted mb-0">{{$userDetails->email}}</p>
                                    </td>
                                    <td>
                                     <p class="text-muted mb-0">{{$userDetails->number}}</p>
                                    </td>
                                </tr>
                              @endforeach
                            </tbody>
                          </table>
                    </div>
                  </div>
                </div>
              </section>
        </div>
    </div>
</div>
@endsection
