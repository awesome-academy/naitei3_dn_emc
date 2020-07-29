@extends('admin.index')

@section('content')
<section class="wrapper">
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">{{ trans('user.user_list') }}</div>
            <div class="row w3-res-tb">
                <div class="col-sm-5 m-b-xs">
                    <a href="{{ route('create_users') }}" class="active" ui-toggle-class="">
                        <button type="submit" class="btn btn-sm btn-primary">{{ trans('user.create_user') }}</button>
                    </a>
                </div>
                <div class="col-sm-4"></div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-sm btn-default" type="button">{{ trans('user.search') }}</button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                        <tr>
                            <th>{{ trans('user.stt') }}</th>
                            <th>{{ trans('user.name') }}</th>
                            <th>{{ trans('user.username') }}</th>
                            <th>{{ trans('user.email') }}</th>
                            <th>{{ trans('user.created_at') }}</th>
                            <th>{{ trans('user.action') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>
                                    <div class="form-group">
                                        <div class="col-sm-1">
                                            <a href="{{ route('show_users', $user->id) }}" class="active" >
                                                <i class="fa fa-info"></i>
                                            </a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="{{ route('edit_users', $user->id) }}" class="active">
                                                <i class="fa fa-pencil text-warning text"></i>
                                            </a>
                                        </div>
                                        <div class="col-sm-3">
                                            <a href="{{ route('delete_users', $user->id) }}" class="active" ui-toggle-class="">
                                                <i class="fa fa-times text-danger text"></i>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                </table>
            </div>
            <div class="mb-3 mt-3 float-right">
                {{$users->links()}}
            </div>
        </div>
    </div>
</section>
@endsection
