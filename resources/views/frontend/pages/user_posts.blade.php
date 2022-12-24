@extends('front_layout')

@section('content')
     
    <section class="typography_area">
        <div class="container">
            <div class="row gy-lg-0">
                <table class="table table-hover">
                    <thead>
                        <tr>
                          <th scope="col">SL</th>
                          <th scope="col">Title</th>
                          <th scope="col">Category</th>
                          <th scope="col">Description</th>
                          <th scope="col">Image</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse ($questions as $item)
                            <tr>
                                <th scope="row">{{$loop->index + 1}}</th>
                                <td>{{$item->title}}</td>
                                <td>{{$item->category->name}}</td>
                                <td>{{$item->description}}</td>
                                <td><img width="100px" height="100px" src="/images/questions/{{$item->file}}" ></td>
                                <td>
                                    <a href="{{ route('question.details',$item->id) }}" class="btn btn-sm btn-primary">View</a>
                                    <a href="{{ route('question.edit',$item->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                                    <a onclick="return confirm('Are you sure?')" href="{{route('question.delete', $item->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>  
                        @empty
                            
                        @endforelse  
                           
                      </tbody>
                  </table>
            </div>
        </div>
    </section>

 
@endsection
