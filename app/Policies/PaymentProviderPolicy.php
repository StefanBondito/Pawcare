<?php

namespace App\Policies;

use App\Models\PaymentProvider;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PaymentProviderPolicy
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
     * @param  \App\Models\PaymentProvider  $paymentProvider
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, PaymentProvider $paymentProvider)
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
     * @param  \App\Models\PaymentProvider  $paymentProvider
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, PaymentProvider $paymentProvider)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PaymentProvider  $paymentProvider
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, PaymentProvider $paymentProvider)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PaymentProvider  $paymentProvider
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, PaymentProvider $paymentProvider)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\PaymentProvider  $paymentProvider
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, PaymentProvider $paymentProvider)
    {
        //
    }
}
