<?php

use Illuminate\Database\Seeder;
use App\Models\Part;
class PartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $part=new Part;
        $part->product_id=1;
        $part->name='White';
        $part->type='fabric';
        $part->image='kameez white.PNG'; 
        $part->save();

        $part=new Part;
        $part->product_id=1;
        $part->name='Smoke Blue';
        $part->type='fabric'; 
        $part->image='kameez smoke blue.PNG'; 
        $part->save();

        $part=new Part;
        $part->product_id=1;
        $part->name='Smoke Pink';
        $part->type='fabric';
        $part->image='kameez smoke pink.PNG'; 
        $part->save();
        

        $part=new Part;
        $part->product_id=1;
        $part->name='Boat Neck';
        $part->type='neck'; 
        $part->image='boat neck.PNG'; 
        $part->save();

        $part=new Part;
        $part->product_id=1;
        $part->name='Boat with Slit';
        $part->type='neck'; 
        $part->image='boat with slit.PNG'; 
        $part->save();

        $part=new Part;
        $part->product_id=1;
        $part->name='No Sleeves';
        $part->type='sleeves'; 
        $part->image='no sleves.PNG'; 
        $part->save();

        $part=new Part;
        $part->product_id=1;
        $part->name='Regular Sleeves';
        $part->type='sleeves'; 
        $part->image='regular sleves.PNG'; 
        $part->save();

        $part=new Part;
        $part->product_id=2;
        $part->name='Smoke Blue';
        $part->type='fabric'; 
        $part->image='Smoke blue.PNG'; 
        $part->save();

        $part=new Part;
        $part->product_id=2;
        $part->name='Smoke Pink';
        $part->type='fabric';
        $part->image='Smoke pink.PNG'; 
        $part->save();

        $part=new Part;
        $part->product_id=2;
        $part->name='No Sleeves';
        $part->type='sleeves'; 
        $part->image='no sleves.PNG'; 
        $part->save();

        $part=new Part;
        $part->product_id=2;
        $part->name='Regular Sleeves';
        $part->type='sleeves'; 
        $part->image='regular sleves.PNG'; 
        $part->save();
        
        $part=new Part;
        $part->product_id=2;
        $part->name='Boat Neck';
        $part->type='neck'; 
        $part->image='boat neck.PNG'; 
        $part->save();

        $part=new Part;
        $part->product_id=2;
        $part->name='Boat with Slit';
        $part->type='neck'; 
        $part->image='boat with slit.PNG'; 
        $part->save();
        
        $part=new Part;
        $part->product_id=3;
        $part->name='Red';
        $part->type='fabric';
        $part->image='red.PNG'; 
        $part->save();
        
        $part=new Part;
        $part->product_id=3;
        $part->name='Green';
        $part->type='fabric'; 
        $part->image='green.PNG'; 
        $part->save();
        
        $part=new Part;
        $part->product_id=3;
        $part->name='Bell Sleeves';
        $part->type='sleeves'; 
        $part->image='bell sleves.PNG'; 
        $part->save();

        $part=new Part;
        $part->product_id=3;
        $part->name='Full Sleeves';
        $part->type='sleeves';
        $part->image='full sleves.PNG'; 
        $part->save();
        
        $part=new Part;
        $part->product_id=3;
        $part->name='Collar Neck';
        $part->type='neck'; 
        $part->image='band collar.PNG'; 
        $part->save();

        $part=new Part;
        $part->product_id=3;
        $part->name='Round Neck';
        $part->type='neck';
        $part->image='round neck.PNG'; 
        $part->save();

        $part=new Part;
        $part->product_id=4;
        $part->name='Black';
        $part->type='fabric';
        $part->image='black.PNG'; 
        $part->save();

        $part=new Part;
        $part->product_id=4;
        $part->name='Mustard';
        $part->type='fabric';
        $part->image='mustard.PNG'; 
        $part->save();

        $part=new Part;
        $part->product_id=4;
        $part->name='Red';
        $part->type='fabric';
        $part->image='red.PNG'; 
        $part->save();

        $part=new Part;
        $part->product_id=4;
        $part->name='Choker Neck';
        $part->type='neck';
        $part->image='choker neck.PNG'; 
        $part->save();

        $part=new Part;
        $part->product_id=4;
        $part->name='V Neck';
        $part->type='neck';
        $part->image='vneck.PNG'; 
        $part->save();

        $part=new Part;
        $part->product_id=4;
        $part->name='Full Sleeves';
        $part->type='sleeves';
        $part->image='full sleves.PNG'; 
        $part->save();

        $part=new Part;
        $part->product_id=4;
        $part->name='No Sleeves';
        $part->type='sleeves';
        $part->image='no sleves.PNG'; 
        $part->save();


    }
}
