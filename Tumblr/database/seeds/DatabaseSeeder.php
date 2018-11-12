<?php
//Author: Maria Lopez
//Date: 2018-11-08

use App\User;

use Illuminate\Database\Seeder;
use App\Models\profile;
use App\Models\Blog;
use App\Models\recommended_blog;
use Faker\Factory;
use App\Models\Radar;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for($i=0; $i<5; $i++) {
            $user = new User();
            $user->email = $faker->email;
            $user->name = $faker->name;
            $user->password = bcrypt('password');
            $user->save();

            $Userprofile = new profile();
            $Userprofile->name = $faker->name;
            $Userprofile->user_id = $user->id;;
            $Userprofile->handle=$faker->word;
            $Userprofile->userpic='https://randomuser.me/api/portraits/women/'.rand(1,92).'.jpg';
            $Userprofile->save();
            
            $count = rand(2, 5);
            for($j=0;$j< $count;$j++){
                $blog= new Blog();
                $blog->blogintro = $faker->sentence;
                $blog->blogdesc = $faker->word;
                $blog->mainblogpic = 'https://picsum.photos/200/?random'.rand(1,100);
                $blog->blogquote = $faker->sentence;
                $blog->hashtags = $faker->word;
                $blog->user_id = $user->id;
                $blog->save();
            }

        }    
        
        for($i=0; $i<5; $i++) {
            $recommended_blogs = new recommended_blog();
            
            $recommended_blogs->recblogimage = 'https://randomuser.me/api/portraits/women/'.rand(1,92).'.jpg';
            $recommended_blogs->recblogtitle =$faker->word;
            $recommended_blogs->recblogdesc =$faker->word;
            $recommended_blogs->save();

            $radar = new radar();
            $radar->radarBlogAvatar = 'https://randomuser.me/api/portraits/women/'.rand(1,92).'.jpg';
            $radar->radarUserAlias = $faker->word;
            $radar->radarBlogDesc = $faker->sentence;
            $radar->radarBlogImg = 'https://picsum.photos/200/?random'.rand(1,100);
            $radar->save();
        }   

        foreach (User::all() as $user) {
            foreach (blog::all() as $blog) {
                $rand = rand(1, 100);
                if ($rand < 20) {
                    $user->likedBlogs()->attach($blog);
                }
            }
        }
        

    }

    
}