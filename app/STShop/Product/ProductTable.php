<?php

namespace App\STShop\Product;

/**
 * Class ProductTable
 * @package App\STShop\Product
 */
class ProductTable
{

    // Type : San pham moi
    // Type_category : San pham hot thuoc category
    // Type_product : San pham het han

    /**
     *
     */
    const Table = 'products';

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
        $rawData = \DB::connection()->table(self::Table)->orderBy('id', 'desc')->paginate(15);

        return $rawData;
    }

    /**
     * @param $categoryId
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function findByCategoryId($categoryId)
    {
        $rawData = \DB::connection()->table(self::Table)->where('category_id', $categoryId)->paginate(8);
        return $rawData;
    }
    public function findSpeaker()
    {
        $rawData = \DB::connection()->table(self::Table)->where('is_speaker', 1)->paginate(8);
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
        $rawData = \DB::connection()->table(self::Table)->whereNotNull('type')->limit(12)->get();
        return $rawData;
    }

    public function findByTypeCategory()
    {
        $rawData = \DB::connection()->table(self::Table)->whereNotNull('type_category')->limit(12)->get();
        return $rawData;
    }
    /**
     * @param $categoryId
     * @return array|static[]
     */
    public function findByCategoryIdLimit($categoryId)
    {
        $rawData = \DB::connection()->table(self::Table)->where('category_id', $categoryId)->limit(8)->get();
        return $rawData;
    }

    /**
     * @return array|static[]
     */
    public function findByProductNew()
    {
        $rawData = \DB::connection()->table(self::Table)->whereNotNull('type')->limit(8)->get();
        return $rawData;
    }

    /**
     * @return array|static[]
     */
    public function findByProductCC()
    {
        $rawData = \DB::connection()->table(self::Table)->where('price', '>',  1500000)->limit(4)->get();
        return $rawData;
    }

    /**
     * @return array|static[]
     */
    public function findByProductGR()
    {
        $rawData = \DB::connection()->table(self::Table)->where('price_sale', '<',  1000000)->limit(4)->get();
        return $rawData;
    }

    public function listProductForCategory($categoryId)
    {
        $rawData = \DB::connection()->table(self::Table)->where('category_id',$categoryId)->paginate(12);
        return $rawData;
    }

}