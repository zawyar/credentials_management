<?php

namespace App\Policies;

use App\Models\User;
use App\Models\VOIPSIPTrunk;
use Illuminate\Auth\Access\HandlesAuthorization;

class VOIPSIPTrunkPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\VOIPSIPTrunk  $vOIPSIPTrunk
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, VOIPSIPTrunk $vOIPSIPTrunk)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\VOIPSIPTrunk  $vOIPSIPTrunk
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, VOIPSIPTrunk $vOIPSIPTrunk)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\VOIPSIPTrunk  $vOIPSIPTrunk
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, VOIPSIPTrunk $vOIPSIPTrunk)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\VOIPSIPTrunk  $vOIPSIPTrunk
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, VOIPSIPTrunk $vOIPSIPTrunk)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\VOIPSIPTrunk  $vOIPSIPTrunk
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, VOIPSIPTrunk $vOIPSIPTrunk)
    {
        //
    }
}
