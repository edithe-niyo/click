@include('layouts.admintop')
<!--============ Page Title =========================================================================-->
<div class="page-title">
   <div class="container">
      <h1>District</h1>
   </div>
   <!--end container-->
</div>
<!--============ End Page Title =====================================================================-->
<div class="background"></div>
<!--end background-->
</div>
<!--end hero-wrapper-->
</header>
<section class="content">
      <div class="container">
         <div class="row">
            <div class="col-md-3">
               <nav class="nav flex-column side-nav">
                    <a class="nav-link  icon" href="{{url('/home')}}">
                        <i class="fa fa-user"></i>My Profile
                    </a>
                    <a class="nav-link  icon" href="{{url('/province')}}">
                        <i class="fa fa-heart"></i>Province
                    </a>
                <a class="nav-link  active icon" href="{{url('/district')}}">
                        <i class="fa fa-star"></i>district
                    </a>
                    <a class="nav-link icon" href="{{url('/sector')}}">
                        <i class="fa fa-recycle"></i>Sector
                    </a>
                <a class="nav-link icon" href="{{url('/category')}}">
                        <i class="fa fa-check"></i>Category
                    </a>
               </nav>
            </div>
            <!--end col-md-3-->
            <div class="col-md-9">
               <div class="row">
                  <div class="col-md-8">
                    <a href="{{ url ('district/create')}}" class="btn btn-primary">Add New District</a><br>
                                                <br>
                     <span class="col-md-4" style="font-size:18px;">
                        @if(count($districts) > 0)
                        <table class="table">
                           <thead class="thead-dark">
                              <tr>
                                 <th scope="col">No</th>
                                 <th scope="col">Province</th>
                                 <th scope="col">District</th>
                                 <th scope="col">Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              @foreach($districts as $index => $district)
                              <tr>
                                 <th scope="row">{{$index+1}}</th>
                                 <td>{{$district->province->name}}</td>
                                 <td>{{$district->name}}</td>
                                 <td>
                                    {!! Form::open(['action'=>['DistrictController@destroy', $district->id ],'method'=>'POST','class'=>'pull-right']) !!} 
                                    {{ Form::hidden('_method','DELETE') }} 
                                    {{ Form::submit('Delete',['class'=>'btn btn-danger']) }}
                                    {!!Form::close() !!}
                                 </td>
                              </tr>
                              @endforeach
                           </tbody>
                        </table>
                        @else
                            <h3>No data</h3> 
                        @endif 
                                 
                     </span>
                  </div>
               </div>
               <!--end col-md-8-->
               <!--end col-md-3-->
            </div>
         </div>
      </div>
      <!--end row-->
      </div>
      <!--end container-->
   </section>
   <!--end block-->
</section>
<!--end content-->
@include('layouts.bottom')