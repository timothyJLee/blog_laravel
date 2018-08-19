@extends('layouts.app')

@section('content')
        <title>Timothy Lee's Blog</title>

       
    </head>
    <body>



            <div class="content">
                <div class="title m-b-md">
                    Tim's Blog
                </div>

                <div class="index">
		    @include('index')
                </div>

                <div class="links">
                    <a href="{{ url('/about') }}">About</a>
		    <a href="{{ url('/news') }}">News</a>
		    <a href="{{ url('/projects') }}">Projects</a>
		    <a href="{{ url('/contact') }}">Contact </a>
                    <a href="https://www.linkedin.com/in/timothy-lee-233769b9/"> Linkedin</a>
                    <a href="https://github.com/timothyJLee">Github</a>
                    <a href="https://twitter.com/timothyJLeeCS">Twitter</a>
		    <a href="https:/timsshowcase.wordpress.com">Wordpress</a>		    
                </div>
            </div>
        </div>
    </body>
@endsection
