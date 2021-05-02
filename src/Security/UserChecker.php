<?php

namespace App\Security;

use App\Entity\Users as AppUsers;
use Symfony\Component\Security\Core\Exception\AccountExpiredException;
use Symfony\Component\Security\Core\Exception\AccountStatusException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAccountStatusException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserChecker implements UserCheckerInterface
{

    public function checkPreAuth(UserInterface $user)
    {
        if (!$user instanceof AppUsers) {
            return;
        }

    }


    public function checkPostAuth(UserInterface $user)
    {
        if (!$user instanceof AppUsers) {
            return;
        }

        if (!$user->getIsActive() == 0){
            throw new CustomUserMessageAccountStatusException('Votre compte est désactiver, veuillez contacter MegaProduction pour plus d\'information.');
        }
    }
}