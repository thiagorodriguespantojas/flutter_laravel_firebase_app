<?php

namespace App\Services;

use Kreait\Firebase\Factory;
use Kreait\Firebase\Auth;

class FirebaseService
{
    protected Auth $auth;

    public function __construct()
    {
        $factory = (new Factory)->withServiceAccount(config('firebase.credentials_file'));
        $this->auth = $factory->createAuth();
    }

    public function verifyIdToken(string $idToken)
    {
        return $this->auth->verifyIdToken($idToken);
    }

    public function getUidFromToken(string $idToken): ?string
    {
        try {
            $verified = $this->verifyIdToken($idToken);
            return $verified->claims()->get('sub');
        } catch (\Throwable $e) {
            return null;
        }
    }
}
