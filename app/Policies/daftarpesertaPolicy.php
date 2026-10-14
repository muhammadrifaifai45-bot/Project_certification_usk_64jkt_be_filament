<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\DaftarPeserta;
use Illuminate\Auth\Access\HandlesAuthorization;

class DaftarPesertaPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:DaftarPeserta');
    }

    public function view(AuthUser $authUser, DaftarPeserta $daftarPeserta): bool
    {
        return $authUser->can('View:DaftarPeserta');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:DaftarPeserta');
    }

    public function update(AuthUser $authUser, DaftarPeserta $daftarPeserta): bool
    {
        return $authUser->can('Update:DaftarPeserta');
    }

    public function delete(AuthUser $authUser, DaftarPeserta $daftarPeserta): bool
    {
        return $authUser->can('Delete:DaftarPeserta');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:DaftarPeserta');
    }

    public function restore(AuthUser $authUser, DaftarPeserta $daftarPeserta): bool
    {
        return $authUser->can('Restore:DaftarPeserta');
    }

    public function forceDelete(AuthUser $authUser, DaftarPeserta $daftarPeserta): bool
    {
        return $authUser->can('ForceDelete:DaftarPeserta');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:DaftarPeserta');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:DaftarPeserta');
    }

    public function replicate(AuthUser $authUser, DaftarPeserta $daftarPeserta): bool
    {
        return $authUser->can('Replicate:DaftarPeserta');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:DaftarPeserta');
    }

}