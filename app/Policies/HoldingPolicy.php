<?php

namespace App\Policies;

use App\User;
use App\Holding;
use Illuminate\Auth\Access\HandlesAuthorization;

class HoldingPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any holdings.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the holding.
     *
     * @param  \App\User  $user
     * @param  \App\Holding  $holding
     * @return mixed
     */
    public function view(User $user, Holding $holding)
    {
        return in_array($user->email, [
            'admin@mail.com',
        ]);
    }

    /**
     * Determine whether the user can create holdings.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return in_array($user->email, [
            'admin@mail.com',
        ]);
    }

    /**
     * Determine whether the user can update the holding.
     *
     * @param  \App\User  $user
     * @param  \App\Holding  $holding
     * @return mixed
     */
    public function update(User $user, Holding $holding)
    {
        //
    }

    /**
     * Determine whether the user can delete the holding.
     *
     * @param  \App\User  $user
     * @param  \App\Holding  $holding
     * @return mixed
     */
    public function delete(User $user, Holding $holding)
    {
        //
    }

    /**
     * Determine whether the user can restore the holding.
     *
     * @param  \App\User  $user
     * @param  \App\Holding  $holding
     * @return mixed
     */
    public function restore(User $user, Holding $holding)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the holding.
     *
     * @param  \App\User  $user
     * @param  \App\Holding  $holding
     * @return mixed
     */
    public function forceDelete(User $user, Holding $holding)
    {
        //
    }
}
