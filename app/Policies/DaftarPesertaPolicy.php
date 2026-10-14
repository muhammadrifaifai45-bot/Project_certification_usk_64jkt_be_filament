<?php

namespace App\Policies;

use App\Models\User;
use App\Models\daftarpeserta;
use Illuminate\Auth\Access\Response;

class DaftarPesertaPolicy
{
    /**
     * Determine whether the user can view any models.
     */


     public function before(User $user, string $ability): ?bool{
        if (strtolower($user->role) === 'admin') { 
            return true;
        }
        return null;
     }

    public function viewAny(User $user): bool
    {
         return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, daftarpeserta $daftarpeserta): bool
    {
        return $user->role == 'admin' || $user->id === $daftarpeserta->user_id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->role == 'admin';
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, daftarpeserta $daftarpeserta): bool
    {
        return $user->role == 'admin' || $user->id === $daftarpeserta->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, daftarpeserta $daftarpeserta): bool
    {
        return $user->role == 'admin';
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, daftarpeserta $daftarpeserta): bool
    {
        return $user->role == 'admin';
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, daftarpeserta $daftarpeserta): bool
    {
        return false;
    }
}
