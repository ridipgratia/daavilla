<?php

namespace App\MyModules;

use Illuminate\Support\Facades\DB;

class MyModule
{
    // ------------------ check is valid exsists -------------------
    public static function checkIsEmailExists($table, $email)
    {
        $check = DB::table($table)
            ->where('email', $email)
            ->count();
        return ($check == 0 ? true : false);
    }
    // -------------- get details by email ----------------
    public static function getEmailDetails($table, $email)
    {
        return DB::table($table)
            ->where('email', $email)
            ->get();
    }
    // --------------- insert data --------------
    public static function insertData($table, $data)
    {
        return DB::table($table)
            ->insert(
                $data
            );
    }
}
