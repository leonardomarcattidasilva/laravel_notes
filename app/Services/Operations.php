<?php

    namespace App\Services;

    use Illuminate\Contracts\Encryption\DecryptException;
    use Illuminate\Support\Facades\Crypt;
    use Illuminate\Support\Facades\Redirect;

    final class Operations
    {
        public static function decriptID($id) : string|Redirect
        {
            try {
                $decriptedID = Crypt::decrypt($id);
            } catch (DecryptException) {
                return \redirect()->route('home');
            }

            return $decriptedID;
        }
    }

