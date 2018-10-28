@extends('admin.layouts.main')

@section('content')

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Striped Table</h4>
                <p class="card-description">
                 <a class="menu-icon mdi mdi-plus-circle" href="{{url('admin/add_drivers')}}">Add new</a>
                    {{--<code>.table-striped</code>--}}
                </p>
   <div class="table-responsive">
 <table class="table table-striped">
        <thead>
          <tr>
              <th>Id</th>

              <th>Name</th>
              <th>Address</th>
              <th>Mobile</th>
              <th>Alt Mobile</th>
              <th>Created</th>
              <th>Updated</th>
           </tr>
         </thead>
         <tbody>

         @if($drivers)


             @foreach($drivers as $driver)


            <tr>
               <td>{{$driver->id}}</td>
                <td>{{$driver->name}}</td>
                <td>{!!html_entity_decode($driver->address)!!}</td>
                {{--<td class="py-1">--}}
                    {{--<img src="" alt="image" />--}}
                {{--</td>--}}
                {{--<td> <img height="50" src="{{$user->photo ? $user->photo->file : 'http://placehold.it/400x400'}}" alt="" ></td>--}}
               {{--<td><a href="{{route('admin.drivers.edit', $driver->id)}}">{{$driver->name}}</a></td>--}}
               <td>{{$driver->mobile}}</td>
                <td>{{$driver->alt_mobile}}</td>
               {{--<td>{{$user->role ? $user->role->name : 'User has no role'}}</td>--}}
                {{--<td>{{$user->is_active == 1 ? 'Active' : 'Not Active' }}</td>--}}
               <td>{{$driver->created_at->diffForHumans()}}</td>
               <td>{{$driver->updated_at->diffForHumans()}}</td>
            </tr>

             @endforeach


           @endif


      </tbody>
 </table>
         </div>
     </div>
   </div>




@endsection