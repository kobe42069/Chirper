<?php

namespace App\Policies;

use App\Models\Chirp;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ChirpPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // Add your logic here. For now, return true or false based on your requirements.
        return true; // Placeholder: Allow all users to view any chirps
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Chirp $chirp): bool
    {
        // Add your logic here. For now, return true or false based on your requirements.
        return true; // Placeholder: Allow all users to view the specific chirp
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // Add your logic here. For example, check if the user has a specific role or permission.
        return true; // Placeholder: Allow all users to create chirps
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Chirp $chirp): bool
    {
        // Allow update only if the chirp belongs to the user
        return $chirp->user()->is($user);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Chirp $chirp): bool
    {
        // Reuse the update logic for deletion as well
        return $this->update($user, $chirp);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Chirp $chirp): bool
    {
        // Add your logic here. For now, return true or false based on your requirements.
        return false; // Placeholder: Disallow restoration of chirps
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Chirp $chirp): bool
    {
        // Add your logic here. For now, return true or false based on your requirements.
        return false; // Placeholder: Disallow permanent deletion of chirps
    }
}
