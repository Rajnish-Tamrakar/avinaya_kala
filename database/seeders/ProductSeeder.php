<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'title' => 'Handwoven Macrame Wall Hanging',
                'slug' => 'handwoven-macrame-wall-hanging',
                'description' => 'Beautiful handwoven macrame wall hanging made with natural cotton cord. Perfect for adding a bohemian touch to any room. Features intricate knotwork and fringe details.',
                'price' => 45.99,
                'stock' => 12,
                'image' => 'https://images.pexels.com/photos/6207375/pexels-photo-6207375.jpeg?auto=compress&cs=tinysrgb&w=800',
                'is_active' => true,
            ],
            [
                'title' => 'Ceramic Succulent Planters Set',
                'slug' => 'ceramic-succulent-planters-set',
                'description' => 'Set of 3 handcrafted ceramic planters in different sizes. Perfect for succulents and small plants. Features drainage holes and matching saucers.',
                'price' => 32.50,
                'stock' => 8,
                'image' => 'https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg?auto=compress&cs=tinysrgb&w=800',
                'is_active' => true,
            ],
            [
                'title' => 'Rustic Wooden Floating Shelves',
                'slug' => 'rustic-wooden-floating-shelves',
                'description' => 'Set of 2 rustic wooden floating shelves made from reclaimed wood. Each shelf is unique with natural wood grain patterns. Includes mounting hardware.',
                'price' => 68.00,
                'stock' => 6,
                'image' => 'https://images.pexels.com/photos/1571463/pexels-photo-1571463.jpeg?auto=compress&cs=tinysrgb&w=800',
                'is_active' => true,
            ],
            [
                'title' => 'Handmade Scented Soy Candles',
                'slug' => 'handmade-scented-soy-candles',
                'description' => 'Set of 3 handmade soy candles in glass jars. Features lavender, vanilla, and eucalyptus scents. Made with natural soy wax and cotton wicks.',
                'price' => 24.99,
                'stock' => 15,
                'image' => 'https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg?auto=compress&cs=tinysrgb&w=800',
                'is_active' => true,
            ],
            [
                'title' => 'Woven Basket Storage Set',
                'slug' => 'woven-basket-storage-set',
                'description' => 'Set of 3 handwoven storage baskets in different sizes. Made from natural seagrass with handles. Perfect for organizing and adding texture to your space.',
                'price' => 55.75,
                'stock' => 10,
                'image' => 'https://images.pexels.com/photos/4207892/pexels-photo-4207892.jpeg?auto=compress&cs=tinysrgb&w=800',
                'is_active' => true,
            ],
            [
                'title' => 'Handcrafted Ceramic Vase',
                'slug' => 'handcrafted-ceramic-vase',
                'description' => 'Elegant handcrafted ceramic vase with a unique glazed finish. Perfect for fresh or dried flowers. Each piece is one-of-a-kind with slight variations.',
                'price' => 38.50,
                'stock' => 7,
                'image' => 'https://images.pexels.com/photos/1445416/pexels-photo-1445416.jpeg?auto=compress&cs=tinysrgb&w=800',
                'is_active' => true,
            ],
            [
                'title' => 'Embroidered Throw Pillow Covers',
                'slug' => 'embroidered-throw-pillow-covers',
                'description' => 'Set of 2 handembroidered throw pillow covers with intricate floral patterns. Made from high-quality cotton fabric. Pillow inserts not included.',
                'price' => 29.99,
                'stock' => 20,
                'image' => 'https://images.pexels.com/photos/1571457/pexels-photo-1571457.jpeg?auto=compress&cs=tinysrgb&w=800',
                'is_active' => true,
            ],
            [
                'title' => 'Wooden Wall Art Sculpture',
                'slug' => 'wooden-wall-art-sculpture',
                'description' => 'Unique wooden wall art sculpture carved from sustainable wood. Features geometric patterns and natural wood finish. Ready to hang with included hardware.',
                'price' => 89.00,
                'stock' => 4,
                'image' => 'https://images.pexels.com/photos/1571471/pexels-photo-1571471.jpeg?auto=compress&cs=tinysrgb&w=800',
                'is_active' => true,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}