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
                    <h3 class="dark-color">Welcome : < username ></h3>
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
<hr class="mt-5">
<section class="bg-primary">
    <form action="" method="post">
        <div class="container me-5 mt-5">
            <div class="form-row">
                
                <div class="form-group col-md-6">
                    <label class="mt-3">FullName</label>
                    <input placeholder="lastname" class="form-control" type="text" name="lastname" required>
                </div>
            </div>
            
            <div class="form-group col-md-6">
                <label>Email</label>
                <input placeholder="Email" class="form-control" type="email" name="email" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Phone</label>
                    <input placeholder="Phone" class="form-control" type="number" name="phone" required>
                </div>
                 <div class="form-group col-md-4">
                    <label for="inputState">City</label>
                    <select id="inputState" class="form-control">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div> 
            </div>
            <button type="submit" name="save" class="form-group btn btn-primary">Add New Student</button>


            <!-- <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div> -->

        </div>
    </form>


    



</section>
@endsection
