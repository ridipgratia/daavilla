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
}
