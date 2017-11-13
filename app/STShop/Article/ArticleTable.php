<?php

namespace App\STShop\Article;

class ArticleTable
{
    const Table = 'article';

    /**
     * @param $rawData
     * @return mixed
     * @throws \Exception
     */
    public function insert($rawData)
    {
        if( ! $rawData){
            throw new \Exception('rawData not exits');
        }

        \DB::table(self::Table)->insert($rawData);

        return $rawData;
    }

    /**
     * @param $id
     */
    public function delete($id)
    {
        \DB::connection()->table(self::Table)->where('id', $id)->delete();
    }

    /**
     * @param $rawData
     * @param $id
     */
    public function update($rawData, $id)
    {
        \DB::connection()->table(self::Table)->where('id',$id)->update($rawData);
    }

    /**
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function fetchAll()
    {
        $rawData = \DB::connection()->table(self::Table)->orderBy('id', 'desc')->paginate(10);

        return $rawData;
    }

    /**
     * @param $categoryId
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function findByCategoryId($categoryId)
    {
        $rawData = \DB::connection()->table(self::Table)->where('category_id', $categoryId)->paginate(15);
        return $rawData;
    }

    /**
     * @param $id
     * @return mixed|static
     */
    public function findById($id)
    {
        $rawData = \DB::connection()->table(self::Table)->where('id', $id)->first();
        return $rawData;
    }

    // Type => TOP
    /**
     * @return array|static[]
     */
    public function findByType()
    {
        $rawData = \DB::connection()->table(self::Table)->whereNotNull('type')->limit(6)->get();
        return $rawData;
    }
    public function findRandom()
    {
        $rawData = \DB::connection()->table(self::Table)->orderByRaw("RAND()")->limit(6)->get();
        return $rawData;
    }

}