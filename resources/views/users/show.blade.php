<head>
    <title>Ecommerce Website</title>
    <link rel="icon" href="{{asset('client/images/logo2.png')}}">
    <!-- //Meta tag Keywords -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Css & BS -->
    <link rel="stylesheet" href="{{mix('client/css/client.css')}}" type="text/css">
    <!-- //Css & BS -->
	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web fonts -->
</head>
<body>
    <div class="form-group">
    @include('client.layouts.shared.topbar')
    @include('client.layouts.shared.control')
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="login_form_inner">
                <h3>{{ trans('auth.profile') }}</h3>
                <form action="{{route('users.update', $user->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="col-md-12 form-group">
                        <label for="name">{{ trans('auth.name') }}</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{$user->name}}" autocomplete="name" required>
                    </div>

                    <div class="col-md-12 form-group">
                    <label for="username">{{ trans('auth.username') }}</label>
                    <input type="text" name="username" id="username" class="form-control" value="{{$user->username}}" autocomplete="username" readonly required>
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="email">{{ trans('auth.email') }}</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{$user->email}}" autocomplete="email" readonly required>
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="address">{{ trans('auth.address') }}</label>
                        <input type="text" name="address" id="address" class="form-control" value="{{$user->address}}" autocomplete="address">
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="phone">{{ trans('auth.phone') }}</label>
                        <input type="text" name="phone" id="phone" class="form-control" value="{{$user->phone}}" autocomplete="phone">
                    </div>

                    <div class="col-md-12 form-group">
                        <label for="">{{ trans('auth.gender') }}</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender1" value="1" {{$user->gender? "checked" : ""}}>
                            <label class="form-check-label" for="gender1">{{ trans('auth.men') }}</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender2" value="0" {{!$user->gender? "checked" : ""}}>
                            <label class="form-check-label" for="gender2">{{ trans('auth.women') }}</label>
                        </div>

                    </div>

                    <div class="col-md-12 form-group">
                        <label for="birthday">{{ trans('auth.birthday') }}</label>
                        <input type="date" name="birthday" id="birthday" class="form-control" value="{{$user->birthday}}">
                    </div>

                    <div class="col-md-12 form-group">
                        <button type="submit" class="btn btn-danger">{{ trans('auth.save') }}</button>
                        <button type="reset" class="btn btn-primary">{{ trans('auth.reset') }}</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget author_widget">
                        <img src="{{asset('client/images/user.jpg')}}" alt="" class="img-fluid">
                        <h4 class="text-bold">{{$user->name}}</h4>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
