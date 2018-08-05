@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                     @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   <!--  choose from the list of project you have -->
                    <a href="/posts/create" class="btn btn-primary">Create Project</a>
                    <h3>your cards</h3>
                    @if(count($posts)>0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>

                        </tr>
                        @foreach($posts as $post)
                            <tr>
                            <td>{{$post->title}}</td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default" style="background-color: orange;">Edit</a></td>
                            <td>
                                 {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
                                     {{Form::hidden('_method','DELETE')}}
                                      {{Form::submit('Delete',['class' =>'btn btn-danger'])}}
                                         {!!Form::close()!!}
                            </td>

                        </tr>
                        @endforeach
                    </table>
                    @else
                        <p>you have no cards</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
