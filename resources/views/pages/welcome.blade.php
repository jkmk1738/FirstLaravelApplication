@extends('main')

@section('title', '| Home')


@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                  <h1>Hello Laravel!</h1>
                  <p>Nice to see you here!</p>
                  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
                </div>
            </div>
        </div><!-- End of header -->
        <div class="row">
            <div class="col-md-8">
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris feugiat sodales sollicitudin. Integer sit amet pretium leo.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <hr>
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris feugiat sodales sollicitudin. Integer sit amet pretium leo.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <hr>
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris feugiat sodales sollicitudin. Integer sit amet pretium leo.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <hr>
                <div class="post">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris feugiat sodales sollicitudin. Integer sit amet pretium leo.</p>
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
                <hr>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <h2>Sidebar</h2>
            </div>
        </div>
@endsection