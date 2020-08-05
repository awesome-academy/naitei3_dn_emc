<div class="row" id="{{"content-".$comment_content->id}}">
    <div class="col-md-2 ">
        <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid" />
        <p class="text-secondary text-center timeline-comment">{{Helper::time_of_comment($comment_content->created_at)}}
        </p>
    </div>
    <div class="col-md-10">
        <p>
            <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html">
                <strong>{{$comment_content->comment->user->name}}</strong>
            </a>
        </p>
        <div class="clearfix"></div>
        <p id={{"content-update".$comment_content->id}}>{{$comment_content->content}}</p>
        @if (Auth::check() && Auth::user()->id === $comment_content->comment->user->id)
        <p>
            <a class="float-right btn btn-outline-primary ml-2" onclick="toogleEditCommentForm({{$comment_content->id}}, '{{$comment_content->content}}')">
                <i class="fa fa-edit"></i>
            </a>
            <a class="float-right btn text-white btn-danger" onclick="deleteComment({{$comment_content->comment->user->id}}, {{$comment_content->id}})">
                <i class="fa fa-trash"></i>
            </a>
        </p>
        @endif
    </div>
    <div class="card-body" id="{{"edit-comment".$comment_content->id}}" hidden>
            <label class="col-form-label">{{trans('comment.edit-comment')}}</label>
            <textarea class="form-control" id="{{"comment-content-edit-text".$comment_content->id}}" name="comment" cols="50" rows="3"></textarea>
            <p>
                <button type="submit"
                id="{{"submit-comment-edit-text".$comment_content->id}}" class="float-right text-light btn btn-success ml-2 mt-2 mb-2"
                onclick="editComment({{$comment_content->comment->user->id}}, {{$comment_content->id}})"
                >
                    <i class="fa fa-save"></i> {{trans('comment.save')}}
                </button>
            </p>
    </div>
</div>

