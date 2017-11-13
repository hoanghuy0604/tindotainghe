<?php

namespace App\STShop\UserST;


class UserTable
{
    const Table = 'users';

    public function insert($rawData)
    {
        if( ! $rawData){
            throw new \Exception('rawData not exits');
        }

        \DB::table(self::Table)->insert($rawData);

        return $rawData;
    }

    public function delete($id)
    {
        \DB::connection()->table(self::Table)->where('id', $id)->delete();
    }

    public function update($rawData, $id)
    {
        \DB::connection()->table(self::Table)->where('id',$id)->update($rawData);
    }

    public function fetchAll()
    {
        $rawData = \DB::connection()->table(self::Table)->get();

        return $rawData;
    }

    public function findById($id)
    {
        $rawData = \DB::connection()->table(self::Table)->where('id', $id)->first();
        return $rawData;
    }

    public function findByEmail($email)
    {
        $rawData = \DB::connection()->table(self::Table)->where('email', $email)->first();
        return $rawData;
    }
}