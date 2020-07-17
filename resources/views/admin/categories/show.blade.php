@extends('admin.index')
@section('content')
    <section class="wrapper">
        <div class="form-w3layouts">
            <div class="table-agile-info">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('category.detail') }}</div>
                </div>
                @if (isset ($message) )
                <div class="col-sm-12">
                    <div class="alert alert-success" role="alert">
                        <span class="badge badge-pill badge-success">{{ trans('category.success') }}</span> {{ $message }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
                @elseif ($errors->any())
                    <div class="col-sm-12">
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">
                                <span class="badge badge-pill badge-danger">{{ trans('category.error') }}</span> {{ $error }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endforeach
                    </div>
                @endif
                <div class="panel-body panel panel-default">
                    <div class="position-center">
                        <form action="" class="card-body card-block" method="GET">
                            @csrf
                            <div class="form-group">
                                <div class="col-sm-1 form-group">
                                    <label for="name">{{ trans('category.name') }}</label>
                                </div>
                                <div class="col-sm-11 form-group">
                                    <p id="name">{{$category->name}}</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-1 form-group">
                                    <label for="categoryname">{{ trans('category.description') }}</label>
                                </div>
                                <div class="col-sm-11 form-group">
                                    <p id="categoryname">{{$category->description}}</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-1 form-group"></div>
                                <div class="col-sm-4 form-group">
                                    <a href="" class="btn btn-primary">
                                        <i class="fa fa-pencil"></i>{{ trans('category.edit') }}
                                    </a>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <a href="{{ route('manage_categories') }}" class="btn btn-danger">
                                        <i class="fa fa-mail-reply"></i>{{ trans('category.return') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
