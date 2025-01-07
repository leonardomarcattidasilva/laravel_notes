<?php

    namespace App\Services;

    use Illuminate\Contracts\Encryption\DecryptException;
    use Illuminate\Support\Facades\Crypt;

    final class Operations
    {
        public static function decriptID($id) : int|null
        {
            try {
                $decriptedID = \intval(Crypt::decrypt($id));
            } catch (DecryptException) {
                return null;
            }

            return $decriptedID;
        }
    }
