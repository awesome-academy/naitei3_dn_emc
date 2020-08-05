<?php

namespace App\Policies;

use App\Models\Comment;
use App\Models\CommentContent;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommentPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function destroy(User $user, CommentContent $comment_content)
    {
        $comment = Comment::find($comment_content->comment_id);

        return $user->id === $comment->user_id;
    }

}
