<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\PostDetail;
use App\Facing;
use Faker\Generator as Faker;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $facingList = [
            'solo per me',
            'per pochi',
            'per tanti',
            'par tutto il mondo'
        ];

        $listFacingID=[];

        foreach($facingList as $facing) {
            $facingObject=new Facing();
            $facingObject->facing=$facing;
            $facingObject->save();
            $listFacingID[] = $facingObject->id;
        }
        
        for ($i=0; $i < 50; $i++) { 

            $postDetail=new PostDetail();
            $postDetail->thematic = $faker->words(1, true);
            $postDetail->type = $faker->words(1, true);
            $postDetail->save();

            $postObject = new Post();
            $postObject->title = $faker -> sentence(3);
            $postObject->postText = $faker -> paragraph(2);
            $postObject->author = $faker -> name();
            $postObject->cover = $faker -> imageUrl(640, 480, 'animals', true);

            $randFacingKey=array_rand($listFacingID, 1);
            $facingID=$listFacingID[$randFacingKey];
            $postObject->facing_id = $facingID;

            $postObject->post_detail_id = $postDetail->id;

            $postObject-> save();
        }
    }
}
