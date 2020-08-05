<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="{{asset('client/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="{{asset('client/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="{{asset('client/css/fontawesome-all.css')}}">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="{{asset('client/css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="{{asset('client/css/menu.css')}}" rel="stylesheet" type="text/css" media="all" />
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
