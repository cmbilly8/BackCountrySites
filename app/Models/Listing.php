<?php
namespace App\Models;

class Listing {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'First listing',
                'location' => 'Everglades NP',
                'description' => 'Gr8 campsite'
            ],
            [
                'id' => 2,
                'title' => 'Second listing',
                'location' => 'Big South Fork',
                'description' => 'Kinda spooky'
            ]
        ];
    }

    public static function find($id) {
        $listings = self::all();
        foreach($listings as $listing) {
            if($listing ['id'] == $id) {
                return $listing;
            }
        }
    }
}
