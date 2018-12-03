<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mayme = \App\User::where('name', 'Mayme')->first();
        $matt = \App\User::where('name', 'Matthew')->first();

        $p1 = new \App\Product;
        $p1->product_owner = $mayme->id;
        $p1->product_name = 'Rock and Play';
        $p1->product_image = 'https://images.mattel.com/scene7/CHN28_01?$oslarge$&wid=773&hei=773';
        $p1->product_description = 'Soothe, nap & play in one inclined sleeper with hands-free rocking motion.';
        $p1->product_brand = 'Fisher-Price';
        $p1->product_price = 5;
        $p1->rented= true;
        $p1->rented_by = $matt->id;
        $p1->save();

        $p2 = new \App\Product;
        $p2->product_owner = $mayme->id;
        $p2->product_name = 'Swing and Rocker';
        $p2->product_image = 'https://images-na.ssl-images-amazon.com/images/I/61ScC1DNaqL._SX522_.jpg';
        $p2->product_description = 'A soothing infant swing seat and a gentle rocker.';
        $p2->product_brand = 'Graco';
        $p2->product_price = 7;
        $p2->rented= false;
        $p2->rented_by = null;
        $p2->save();

        $p3 = new \App\Product;
        $p3->product_owner = $mayme->id;
        $p3->product_name = 'Exersaucer';
        $p3->product_image = 'https://images-na.ssl-images-amazon.com/images/I/811urNRPMQL._SX522_.jpg';
        $p3->product_description = 'The Evenflo ExerSaucer Zoo Friends offers parents a safe alternative to walkers. With a variety of age-appropriate toys that help your baby achieve important developmental milestones. With rock, spin and bounce actions that provide your baby with plenty of exercise to strengthen legs, back and neck muscles.';
        $p3->product_brand = 'Evenflo';
        $p3->product_price = 7;
        $p3->rented= true;
        $p3->rented_by = $matt->id;
        $p3->save();

        $p4 = new \App\Product;
        $p4->product_owner = $matt->id;
        $p4->product_name = 'Activity Gym';
        $p4->product_image = 'https://images-na.ssl-images-amazon.com/images/I/91jBSNrpciL._SX522_.jpg';
        $p4->product_description = "Baby Einstein's 5-in-1 Journey of Discovery Gym is packed with features that will grow with your baby for years to come with learning-inspired fun. The multi-mode gym has a unique design that features 5 fun ways to play as baby grows: newborn, active discovery, tummy-time, sitting, and crawling.";
        $p4->product_brand = 'Baby Einstein';
        $p4->product_price = 3;
        $p4->rented= true;
        $p4->rented_by = $mayme->id;
        $p4->save();

        $p5 = new \App\Product;
        $p5->product_owner = $matt->id;
        $p5->product_name = 'Pack and Play';
        $p5->product_image = 'https://images-na.ssl-images-amazon.com/images/I/81YkgTXAzDL._SX522_.jpg';
        $p5->product_description = 'From playtime to naptime, the Smart and Simple Playard is a safe space for everything your baby needs. Rest in the DreamCentre, relax in the playard, and get cleaned up on the changing table.';
        $p5->product_brand = 'Ingenuity';
        $p5->product_price = 10;
        $p5->rented= false;
        $p5->rented_by = null;
        $p5->save();





    }
}
