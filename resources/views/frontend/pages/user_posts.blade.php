@extends('front_layout')

@section('content')
     
    <section class=" user-details-area bg-disable pt-100 pb-120">
        <div class="container">
            <div class="row  gy-lg-0">
                <div class="col-lg-12 col-xl-10">
                    <div class="user-details-widget">
                        <div class="widget-body">
                            <table class="table table-dark table-hover">
                                <thead>
                                    <tr>
                                      <th scope="col">SL</th>
                                      <th scope="col">Title</th>
                                      <th scope="col">Category</th>
                                      <th scope="col">Description</th>
                                      <th scope="col">Image</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @forelse ($questions as $item)
                                        <tr>
                                            <th scope="row">{{$loop->index + 1}}</th>
                                            <td>{{$item->title}}</td>
                                            <td>{{$item->category->name}}</td>
                                            <td>{{$item->description}}</td>
                                            <td><img src="{{asset($item->file)}}" ></td>
                                        </tr>  
                                    @empty
                                        
                                    @endforelse  
                                       
                                  </tbody>
                              </table>
 
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </div>
    </section>
@endsection
