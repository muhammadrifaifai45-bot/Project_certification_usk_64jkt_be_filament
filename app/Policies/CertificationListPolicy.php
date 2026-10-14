<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\CertificationList;
use Illuminate\Auth\Access\HandlesAuthorization;

class CertificationListPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:CertificationList');
    }

    public function view(AuthUser $authUser, CertificationList $certificationList): bool
    {
        return $authUser->can('View:CertificationList');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:CertificationList');
    }

    public function update(AuthUser $authUser, CertificationList $certificationList): bool
    {
        return $authUser->can('Update:CertificationList');
    }

    public function delete(AuthUser $authUser, CertificationList $certificationList): bool
    {
        return $authUser->can('Delete:CertificationList');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:CertificationList');
    }

    public function restore(AuthUser $authUser, CertificationList $certificationList): bool
    {
        return $authUser->can('Restore:CertificationList');
    }

    public function forceDelete(AuthUser $authUser, CertificationList $certificationList): bool
    {
        return $authUser->can('ForceDelete:CertificationList');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:CertificationList');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:CertificationList');
    }

    public function replicate(AuthUser $authUser, CertificationList $certificationList): bool
    {
        return $authUser->can('Replicate:CertificationList');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:CertificationList');
    }

}