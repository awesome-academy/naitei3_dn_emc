@extends('admin.index')

@section('content')
<section class="wrapper">
    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">{{ trans('category.list_category') }}</div>
            <div class="row w3-res-tb">
                <div class="col-sm-5 m-b-xs">
                    <a href="" class="active" ui-toggle-class="">
                        <button type="submit" class="btn btn-sm btn-primary">{{ trans('category.create_category') }}</button>
                    </a>
                </div>
                <div class="col-sm-4"></div>
                <div class="col-sm-3">
                    <div class="input-group">
                        <input type="text" class="input-sm form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-sm btn-default" type="button">{{ trans('category.search') }}</button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                    <tr>
                        <th>{{ trans('category.stt') }}</th>
                        <th>{{ trans('category.name') }}</th>
                        <th>{{ trans('category.description') }}</th>
                        <th>{{ trans('category.action') }}</th>
                    </tr>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->description}}</td>
                                <td>
                                    <div class="form-group">
                                        <div class="col-sm-1">
                                            <a href="{{ route('show_categories', $category->id) }}" class="active" >
                                                <i class="fa fa-info"></i>
                                            </a>
                                        </div>
                                        <div class="col-sm-2">
                                            <a href="" class="active">
                                                <i class="fa fa-pencil text-warning text"></i>
                                            </a>
                                        </div>
                                        <div class="col-sm-3">
                                            <a href="" class="active" ui-toggle-class="">
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
        </div>
        <div class="mb-3 mt-3 float-right">
            {{$categories->links()}}
        </div>
    </div>
</section>
@endsection
