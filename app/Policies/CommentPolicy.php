<?php

namespace App\Policies;

use App\User;
use App\Comment;
use Illuminate\Auth\Access\HandlesAuthorization;


class CommentPolicy
{
    use HandlesAuthorization;
    public function accept(User $user, Comment $comment)
    {
        return $user->owns($comment->post);
    }
}