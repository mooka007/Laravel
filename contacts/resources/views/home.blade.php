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
                            <a  class="btn btn-primary me-3" href="{{asset('add')}}">Add Contacts</a>
                            <a  class="btn btn-primary me-3" href="">Add Notes</a>
                            <a  class="btn btn-primary me-3" href="">Add Something</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
</div>
<hr class="mt-5">
<section class="bg-primary h-100">
    
    <div class="container-fluid  mt-5">
        <div class="row p-3 pt-4">
          <table class="table table-borderless spacing-table ms-1">
            <thead>
              <tr>
                <th scope="col"></th>
                <th scope="col" class="text-capitalize">name</th>
                <th scope="col" class="text-capitalize">email</th>
                <th scope="col" class="text-capitalize">phone</th>
                <th scope="col" class="text-capitalize">Address</th>
                <th scope="col" class="text-capitalize">City</th>
              </tr>
            </thead>

            <thead>
                <tr>
                  <td><img src="../images/prog.png" width="30px" alt=""></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <a href=""><i class="bi bi-pencil fs-5 text-info"></i></a>
                    <a href="" class="m-3"><i class="bi bi-trash fs-5 text-info"></i></a>
                  </td>
                </tr>
            </thead>
          </table>
        </div>
      </div>



</section>
@endsection
