<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\CertificationCode;
use Illuminate\Auth\Access\HandlesAuthorization;

class CertificationCodePolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:CertificationCode');
    }

    public function view(AuthUser $authUser, CertificationCode $certificationCode): bool
    {
        return $authUser->can('View:CertificationCode');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:CertificationCode');
    }

    public function update(AuthUser $authUser, CertificationCode $certificationCode): bool
    {
        return $authUser->can('Update:CertificationCode');
    }

    public function delete(AuthUser $authUser, CertificationCode $certificationCode): bool
    {
        return $authUser->can('Delete:CertificationCode');
    }

    public function deleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('DeleteAny:CertificationCode');
    }

    public function restore(AuthUser $authUser, CertificationCode $certificationCode): bool
    {
        return $authUser->can('Restore:CertificationCode');
    }

    public function forceDelete(AuthUser $authUser, CertificationCode $certificationCode): bool
    {
        return $authUser->can('ForceDelete:CertificationCode');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:CertificationCode');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:CertificationCode');
    }

    public function replicate(AuthUser $authUser, CertificationCode $certificationCode): bool
    {
        return $authUser->can('Replicate:CertificationCode');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:CertificationCode');
    }

}