@include('admin_top_menu')


<div class="container shadow p-3 mb-5 bg-white rounded">
<h3>All Users</h3>
@if(Session::has('approved'))
<div class="alert alert-primary alert-dismissible fade show " role="alert">
          <div class="font-medium text-600">
            <i class="fa-regular fa-bell"></i>
        <strong>Hello there!</strong> You have some feedbacks
        </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
           
            {!! session('approved') !!}
       
          </div>
    </div>
@endif


@if(Session::has('denied'))
<div class="alert alert-primary alert-dismissible fade show " role="alert">
          <div class="font-medium text-600">
            <i class="fa-regular fa-bell"></i>
        <strong>Hello there!</strong> You have some feedbacks
        </div>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
           
            {!! session('denied') !!}
       
          </div>
    </div>
@endif
<table class="table table-striped">
  <thead>
    <tr>
      <!-- <th scope="col">No</th> -->
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Marital Status</th>
      <th scope="col">E-mail</th>
      <th scope="col">Phone</th>
      <th scope="col">Salary</th>
      <th scope="col">Block</th>
      
    </tr>
  </thead>
  

  @foreach($employee_msts as $employee_mst)
    <tr>
      
      <td>{{$employee_mst->firstname}}</td>
      <td>{{$employee_mst->lastname}}</td>
      <td>{{$employee_mst->gender}}</td>
      <td>{{$employee_mst->marital_status}}</td>
      <td>{{$employee_mst->email}}</td>  
      <td>{{$employee_mst->phone}}</td> 
      <td>{{$employee_mst->net_salary}}</td>  
      <td>
         <span class="btn btn-success "><a href="" style="color:white">Yes</a></span>
         <span class="btn btn-danger "><a href="" style="color:white">NO</a></span>
</td>
      

    </tr>
   @endforeach  
  </tbody>
  </table>

</div>



@include('admin_bottom_menu')