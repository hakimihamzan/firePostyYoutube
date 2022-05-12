<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

// who can do what with post resource!
class PostPolicy
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

    // by default the policy get passed currently authenticated user
    public function delete(User $user, Post $post)
    {
        return $user->id === $post->user_id;
    }
}
