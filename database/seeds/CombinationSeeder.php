<?php

use Illuminate\Database\Seeder;
use App\Models\Combination;
class CombinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $combination=new Combination;
        $combination->product_id=1;
        $combination->fabric="Smoke Blue";
        $combination->neck=null;
        $combination->sleeves=null;
        $combination->image="kameez smoke blue.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=1;
        $combination->fabric="Smoke Pink";
        $combination->neck=null;
        $combination->sleeves=null;
        $combination->image="kameez smoke pink.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=1;
        $combination->fabric="White";
        $combination->neck=null;
        $combination->sleeves=null;
        $combination->image="kameez white.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=1;
        $combination->fabric="Smoke Blue";
        $combination->neck=null;
        $combination->sleeves="No Sleeves";
        $combination->image="kameez smoke blue no sleeves.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=1;
        $combination->fabric="Smoke Blue";
        $combination->neck=null;
        $combination->sleeves="Regular Sleeves";
        $combination->image="kameez smoke blue regular sleeves.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=1;
        $combination->fabric="Smoke Pink";
        $combination->neck=null;
        $combination->sleeves="Regular Sleeves";
        $combination->image="kameez smoke pink regular sleeves.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=1;
        $combination->fabric="Smoke Pink";
        $combination->neck=null;
        $combination->sleeves="No Sleeves";
        $combination->image="kameez smoke pinkno sleeves.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=1;
        $combination->fabric="White";
        $combination->neck=null;
        $combination->sleeves="Regular Sleeves";
        $combination->image="kameez white regular sleeves.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=1;
        $combination->fabric="White";
        $combination->neck=null;
        $combination->sleeves="No Sleeves";
        $combination->image="kameez white no sleeves.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=1;
        $combination->fabric="Smoke Pink";
        $combination->neck="Boat Neck";
        $combination->sleeves="No Sleeves";
        $combination->image="pink kameez no sleve boat neck.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=1;
        $combination->fabric="Smoke Pink";
        $combination->neck="Boat with Slit";
        $combination->sleeves="No Sleeves";
        $combination->image="pink kameez no sleve boat with a slit.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=1;
        $combination->fabric="Smoke Blue";
        $combination->neck="Boat with Slit";
        $combination->sleeves="Regular Sleeves";
        $combination->image="smoke blue kameez boat with a slit regular sleeves.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=1;
        $combination->fabric="Smoke Blue";
        $combination->neck="Boat Neck";
        $combination->sleeves="Regular Sleeves";
        $combination->image="smoke blue kameez boat neck regular sleeves.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=1;
        $combination->fabric="Smoke Pink";
        $combination->neck="Boat Neck";
        $combination->sleeves="Regular Sleeves";
        $combination->image="smoke pink kameez boat neck regular sleeves.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=1;
        $combination->fabric="Smoke Pink";
        $combination->neck="Boat with Slit";
        $combination->sleeves="Regular Sleeves";
        $combination->image="smoke pink kameez boat with a slit regular sleeves.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=1;
        $combination->fabric="Smoke Blue";
        $combination->neck="Boat Neck";
        $combination->sleeves="No Sleeves";
        $combination->image="smooky blue kameez no sleve boat neck.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=1;
        $combination->fabric="Smoke Blue";
        $combination->neck="Boat With Slit";
        $combination->sleeves="No Sleeves";
        $combination->image="smooky blue kameez no sleve boat with a slit.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=1;
        $combination->fabric="White";
        $combination->neck="Boat Neck";
        $combination->sleeves="Regular Sleeves";
        $combination->image="white kameez boat neck regular sleeves.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=1;
        $combination->fabric="White";
        $combination->neck="Boat with Slit";
        $combination->sleeves="Regular Sleeves";
        $combination->image="white kameez boat with a slit regular sleeves.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=1;
        $combination->fabric="White";
        $combination->neck="Boat Neck";
        $combination->sleeves="No Sleeves";
        $combination->image="white kameez no sleve boat neck.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=1;
        $combination->fabric="White";
        $combination->neck="Boat with Slit";
        $combination->sleeves="No Sleeves";
        $combination->image="white kameez no sleve boat with a slit.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=2;
        $combination->fabric="Smoke Blue";
        $combination->neck=null;
        $combination->sleeves=null;
        $combination->image="Smoke blue.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=2;
        $combination->fabric="Smoke Pink";
        $combination->neck=null;
        $combination->sleeves=null;
        $combination->image="Smoke pink.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=2;
        $combination->fabric="Smoke Blue";
        $combination->neck=null;
        $combination->sleeves="No Sleeves";
        $combination->image="blue no sleeves.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=2;
        $combination->fabric="Smoke Blue";
        $combination->neck=null;
        $combination->sleeves="Regular Sleeves";
        $combination->image="blue regular sleeves.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=2;
        $combination->fabric="Smoke Pink";
        $combination->neck=null;
        $combination->sleeves="No Sleeves";
        $combination->image="pink no sleeves.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=2;
        $combination->fabric="Smoke Pink";
        $combination->neck=null;
        $combination->sleeves="Regular Sleeves";
        $combination->image="pink regular sleeves.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=2;
        $combination->fabric="Smoke Blue";
        $combination->neck="Boat Neck";
        $combination->sleeves="No Sleeves";
        $combination->image="blue boat neck.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=2;
        $combination->fabric="Smoke Blue";
        $combination->neck="Boat Neck";
        $combination->sleeves="Regular Sleeves";
        $combination->image="blue boat neck full sleves.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=2;
        $combination->fabric="Smoke Blue";
        $combination->neck="Boat with Slit";
        $combination->sleeves="No Sleeves";
        $combination->image="blue boat with slit.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=2;
        $combination->fabric="Smoke Blue";
        $combination->neck="Boat with Slit";
        $combination->sleeves="Regular Sleeves";
        $combination->image="blue boatwith slit full sleves.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=2;
        $combination->fabric="Smoke Pink";
        $combination->neck="Boat Neck";
        $combination->sleeves="Regular Sleeves";
        $combination->image="pink boat neck full sleves.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=2;
        $combination->fabric="Smoke Pink";
        $combination->neck="Boat Neck";
        $combination->sleeves="No Sleeves";
        $combination->image="pink boat neck no sleeves.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=2;
        $combination->fabric="Smoke Pink";
        $combination->neck="Boat with Slit";
        $combination->sleeves="No Sleeves";
        $combination->image="pink boat with slit no sleeves.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=2;
        $combination->fabric="Smoke Pink";
        $combination->neck="Boat with Slit";
        $combination->sleeves="Regular Sleeves";
        $combination->image="pink boatwith slit full sleves.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=3;
        $combination->fabric="Green";
        $combination->neck=null;
        $combination->sleeves=null;
        $combination->image="green.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=3;
        $combination->fabric="Red";
        $combination->neck=null;
        $combination->sleeves=null;
        $combination->image="red.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=3;
        $combination->fabric="Green";
        $combination->neck=null;
        $combination->sleeves="Bell Sleeves";
        $combination->image="bell sleves green.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=3;
        $combination->fabric="Red";
        $combination->neck=null;
        $combination->sleeves="Bell Sleeves";
        $combination->image="bell sleves red.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=3;
        $combination->fabric="Green";
        $combination->neck=null;
        $combination->sleeves="Full Sleeves";
        $combination->image="full sleeves green.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=3;
        $combination->fabric="Red";
        $combination->neck=null;
        $combination->sleeves="Full Sleeves";
        $combination->image="full sleeves red.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=3;
        $combination->fabric="Green";
        $combination->neck="Collar Neck";
        $combination->sleeves="Full Sleeves";
        $combination->image="green collar neck.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=3;
        $combination->fabric="Green";
        $combination->neck="Collar Neck";
        $combination->sleeves="Bell Sleeves";
        $combination->image="green collar neck bell sleves.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=3;
        $combination->fabric="Green";
        $combination->neck="Round Neck";
        $combination->sleeves="Full Sleeves";
        $combination->image="green round neck full sleeves.jpeg";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=3;
        $combination->fabric="Green";
        $combination->neck="Round Neck";
        $combination->sleeves="Bell Sleeves";
        $combination->image="green round neck bell sleves.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=3;
        $combination->fabric="Red";
        $combination->neck="Collar Neck";
        $combination->sleeves="Full Sleeves";
        $combination->image="red collar neck.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=3;
        $combination->fabric="Red";
        $combination->neck="Collar Neck";
        $combination->sleeves="Bell Sleeves";
        $combination->image="red collar neck bell sleves.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=3;
        $combination->fabric="Red";
        $combination->neck="Round Neck";
        $combination->sleeves="Full Sleeves";
        $combination->image="red round neck.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=3;
        $combination->fabric="Red";
        $combination->neck="Round Neck";
        $combination->sleeves="Bell Sleeves";
        $combination->image="red round neck bell sleves.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=4;
        $combination->fabric="Black";
        $combination->neck=null;
        $combination->sleeves=null;
        $combination->image="black.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=4;
        $combination->fabric="Mustard";
        $combination->neck=null;
        $combination->sleeves=null;
        $combination->image="mustard.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=4;
        $combination->fabric="Red";
        $combination->neck=null;
        $combination->sleeves=null;
        $combination->image="red.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=4;
        $combination->fabric="Black";
        $combination->neck=null;
        $combination->sleeves="Full Sleeves";
        $combination->image="black full.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=4;
        $combination->fabric="Black";
        $combination->neck=null;
        $combination->sleeves="No Sleeves";
        $combination->image="black no.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=4;
        $combination->fabric="Mustard";
        $combination->neck=null;
        $combination->sleeves="Full Sleeves";
        $combination->image="mustard full.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=4;
        $combination->fabric="Mustard";
        $combination->neck=null;
        $combination->sleeves="No Sleeves";
        $combination->image="mustard no.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=4;
        $combination->fabric="Red";
        $combination->neck=null;
        $combination->sleeves="Full Sleeves";
        $combination->image="red full.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=4;
        $combination->fabric="Red";
        $combination->neck=null;
        $combination->sleeves="No Sleeves";
        $combination->image="red no.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=4;
        $combination->fabric="Black";
        $combination->neck="Choker Neck";
        $combination->sleeves="No Sleeves";
        $combination->image="black chokerneck.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=4;
        $combination->fabric="Black";
        $combination->neck="Choker Neck";
        $combination->sleeves="Full Sleeves";
        $combination->image="black chokerneck full.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=4;
        $combination->fabric="Black";
        $combination->neck="V Neck";
        $combination->sleeves="No Sleeves";
        $combination->image="black vneck.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=4;
        $combination->fabric="Black";
        $combination->neck="V Neck";
        $combination->sleeves="Full Sleeves";
        $combination->image="black vneck full.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=4;
        $combination->fabric="Mustard";
        $combination->neck="Choker Neck";
        $combination->sleeves="No Sleeves";
        $combination->image="mustard chokerneck.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=4;
        $combination->fabric="Mustard";
        $combination->neck="Choker Neck";
        $combination->sleeves="Full Sleeves";
        $combination->image="mustard chokerneck full.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=4;
        $combination->fabric="Mustard";
        $combination->neck="V Neck";
        $combination->sleeves="No Sleeves";
        $combination->image="mustard vneck.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=4;
        $combination->fabric="Mustard";
        $combination->neck="V Neck";
        $combination->sleeves="Full Sleeves";
        $combination->image="mustard vneck full.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=4;
        $combination->fabric="Red";
        $combination->neck="Choker Neck";
        $combination->sleeves="No Sleeves";
        $combination->image="red chokerneck.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=4;
        $combination->fabric="Red";
        $combination->neck="Choker Neck";
        $combination->sleeves="Full Sleeves";
        $combination->image="red chokerneck full.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=4;
        $combination->fabric="Red";
        $combination->neck="V Neck";
        $combination->sleeves="No Sleeves";
        $combination->image="red vneck.PNG";
        $combination->save();

        $combination=new Combination;
        $combination->product_id=4;
        $combination->fabric="Red";
        $combination->neck="V Neck";
        $combination->sleeves="Full Sleeves";
        $combination->image="red vneck full.PNG";
        $combination->save();

        
    }
}
