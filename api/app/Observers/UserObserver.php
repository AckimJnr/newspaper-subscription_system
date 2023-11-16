<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{
    /**
     * Create a unique id for an account
     */
    public function creating(User $user)
    {
        $user->account_id = 'nss' . uniqid();
    }


    /**
     * Handle the User "updated" event.
     */
    public function updated(User $user): void
    {
        //
    }

    /**
     * Handle the User "deleted" event.
     */
    public function deleted(User $user): void
    {
        //
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}
