<?php 
namespace App\Models;

class Listings{
    public static function getAll(){
        return [
            [
                'id' => '1',
                'title' => 'Lisiting One',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, excepturi explicabo. Quas sapiente blanditiis dolore nam porro quia aperiam, amet suscipit saepe, veritatis rerum ullam labore ratione recusandae, quisquam sed.'
            ],

            [
                'id' => '2',
                'title' => 'Lisiting Two',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, excepturi explicabo. Quas sapiente blanditiis dolore nam porro quia aperiam, amet suscipit saepe, veritatis rerum ullam labore ratione recusandae, quisquam sed.'
            ]
        ];
    }

    public static function findID($id){
        $listings = self::getAll();

        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
        }
    }
}