@extends('layouts.master')
@section('title')
    {{$title}}
@endsection
@section('body')
<div class="container">
    <div class="row vh-100 align-items-center justify-content-center">
        <div class="col-lg-5 ">
            <div class="p-4 rounded-3 shadow ">
                <h4 class="text-center mb-4">Inready Workgroup</h4>
                <form class="px-4" action="/regis" method="post">
                    @csrf
                    <div class="form-outline mb-3">
                        <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" autocomplete="off" placeholder="Email" value="{{old('email')}}">
                        @error('email')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                        
                    </div>
                    <div class="mb-3">
                        <input type="text" name="fullname" id="fullname" class="form-control @error('fullname') is-invalid @enderror" autocomplete="off" placeholder="Fullname" value="{{old('fullname')}}">
                        @error('fullname')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-outline mb-3">
                        <input type="text" name="passwd" id="passwd" class="form-control @error('passwd') is-invalid @enderror" autocomplete="off" placeholder="Password">
                        @error('passwd')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-outline mb-3">
                        <input type="text" name="confirmpasswd" id="confirmpasswd" class="form-control @error('confirmpasswd') is-invalid @enderror" autocomplete="off" placeholder="Confirm Password">
                        @error('passwd')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                        
                    </div>
                    <button class="btn btn-success">Sign Up</button>
                    {{-- <i class="fas fa-eye"></i> --}}
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection