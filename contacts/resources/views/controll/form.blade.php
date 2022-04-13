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
                    <h3 class="dark-color">Welcome : {{ Auth::user()->name }}</h3>
                    <h6 class="theme-color lead">A Lead UX &amp; UI designer based in Canada</h6>
                    <p>I <mark>design and develop</mark> services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores. My passion is to design digital user experiences through the bold interface and meaningful interactions.</p>
                    <div class="row about-list">
                        <div class="mt-4">
                            <a  class="btn btn-primary me-3" href="">Add Contacts</a>
                            <a  class="btn btn-primary me-3" href="">Add Notes</a>
                            <a  class="btn btn-primary me-3" href="">Add Something</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
</div>
{{-- <hr class="mt-5"> --}}
<section class="bg-light" style="height: 400px;">
    <div class="container  mt-5 ">
        <div class="row h-100 justify-content-center align-items-center">
            <div class=" col-md-6 mt-5">
            <form action="store" method="post">
                @csrf
                        <label class="mt-3">FullName</label>
                        <input placeholder="Name" class="form-control @error('name') is_invalid @enderror"  value="{{ old('name')}}" type="text" name="name" >
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <label class="mt-3">Email</label>
                        <input placeholder="Email" class="form-control @error('email') is_invalid @enderror"  value="{{ old('email')}}" type="email" name="email" >
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <label class="mt-3">Phone</label>
                        <input placeholder="Phone" class="form-control @error('phone') is_invalid @enderror"  value="{{ old('phone')}}" type="number" name="phone" >
                        @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                        {{-- <div class="form-group col-md-4">
                            <label for="inputState">City</label>
                            <select id="inputState" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>  --}}
                        <label for="inputState">City</label>
                            <select name="city" id="inputState" class="form-control">
                                <option  selected>Choose...</option>
                                @foreach ($cities as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            </select>
                        <input type="submit" name="save" class="form-group btn btn-danger mt-3"/>
                    <!-- <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                        </div>
                    </div> -->
                </form>
            </div>
        </div>
    </div>


    



</section>
@endsection
