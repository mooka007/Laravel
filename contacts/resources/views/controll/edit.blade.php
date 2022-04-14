@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row align-items-center flex-row">
            <div class="col-md-4 mt-5 ms-5 ">
                <div class="about-avatar">
                    <img class="rounded-circle border border-dark"  src="https://bootdey.com/img/Content/avatar/avatar7.png" title="" alt="">
                </div>
            </div>
            <div class="col-md-6 ms-5 mt-5">
                <div class="about-text go-to">
                    @foreach ($users as $user)
                        
                    <h3 class="dark-color"> Welcome :  <input value="{{$user->name}}" placeholder="Name" class="p-1 outline-offset" style="width: 150px; height:30px;" type="name" name="name"/> </h3>
                    <h6 class="theme-color lead"><input placeholder="Email" type="email" name="email" /></h6>
                    <p>I <mark>design and develop</mark> services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores. My passion is to design digital user experiences through the bold interface and meaningful interactions.</p>
                    <div class="row about-list">
                        <div class="mt-4">
                            <a  class="btn btn-primary me-3" href="{{asset('form')}}">Add Contacts</a>
                            <a  class="btn btn-primary me-3" href="">Add Notes</a>
                            <a  class="btn btn-primary me-3" href="">Save</a>
                        </div>
                        
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
</div>
{{-- <hr class="mt-5"> --}}

@endsection
