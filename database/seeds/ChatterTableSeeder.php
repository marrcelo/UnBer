<?php

use Illuminate\Database\Seeder;

class ChatterTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {

        // CREATE THE USER

        if (!\DB::table('users')->find(1)) {
            \DB::table('users')->insert([
                0 => [
                    'id'             => 1,
                    'name'           => 'Tony Lea',
                    'email'          => 'tony@hello.com',
                    'cpf'            => '12345678901',
                    'password'       => '$2y$10$9ED4Exe2raEeaeOzk.EW6uMBKn3Ib5Q.7kABWaf4QHagOgYHU8ca.',
                    'remember_token' => 'RvlORzs8dyG8IYqssJGcuOY2F0vnjBy2PnHHTX2MoV7Hh6udjJd6hcTox3un',
                    'created_at'     => '2016-07-29 15:13:02',
                    'updated_at'     => '2016-08-18 14:33:50',
                ],
            ]);
        }

        // CREATE THE CATEGORIES

        \DB::table('chatter_categories')->delete();

        \DB::table('chatter_categories')->insert([
            0 => [
                'id'         => 1,
                'parent_id'  => null,
                'order'      => 1,
                'name'       => 'Ensino Fundamental',
                'color'      => '#3498DB',
                'slug'       => 'ensino fundamental',
                'created_at' => null,
                'updated_at' => null,
            ],
            1 => [
                'id'         => 2,
                'parent_id'  => null,
                'order'      => 2,
                'name'       => 'Ensino Medio',
                'color'      => '#2ECC71',
                'slug'       => 'ensino medio',
                'created_at' => null,
                'updated_at' => null,
            ],
            2 => [
                'id'         => 3,
                'parent_id'  => null,
                'order'      => 3,
                'name'       => 'Ensino Superior',
                'color'      => '#9B59B6',
                'slug'       => 'ensino superior',
                'created_at' => null,
                'updated_at' => null,
            ],
            
        ]);

        // CREATE THE DISCUSSIONS

        \DB::table('chatter_discussion')->delete();

        \DB::table('chatter_discussion')->insert([
            0 => [
                'id'                  => 3,
                'chatter_category_id' => 1,
                'title'               => 'Hello Everyone, This is my Introduction',
                'user_id'             => 1,
                'sticky'              => 0,
                'views'               => 0,
                'answered'            => 0,
                'created_at'          => '2016-08-18 14:27:56',
                'updated_at'          => '2016-08-18 14:27:56',
                'slug'                => 'hello-everyone-this-is-my-introduction',
                'color'               => '#239900',
            ],
            1 => [
                'id'                  => 6,
                'chatter_category_id' => 2,
                'title'               => 'Login Information for Chatter',
                'user_id'             => 1,
                'sticky'              => 0,
                'views'               => 0,
                'answered'            => 0,
                'created_at'          => '2016-08-18 14:39:36',
                'updated_at'          => '2016-08-18 14:39:36',
                'slug'                => 'login-information-for-chatter',
                'color'               => '#1a1067',
            ],
            2 => [
                'id'                  => 7,
                'chatter_category_id' => 3,
                'title'               => 'Leaving Feedback',
                'user_id'             => 1,
                'sticky'              => 0,
                'views'               => 0,
                'answered'            => 0,
                'created_at'          => '2016-08-18 14:42:29',
                'updated_at'          => '2016-08-18 14:42:29',
                'slug'                => 'leaving-feedback',
                'color'               => '#8e1869',
            ],
            3 => [
                'id'                  => 9,
                'chatter_category_id' => 2,
                'title'               => 'Welcome to the Chatter Laravel Forum Package',
                'user_id'             => 1,
                'sticky'              => 0,
                'views'               => 0,
                'answered'            => 0,
                'created_at'          => '2016-08-18 14:59:37',
                'updated_at'          => '2016-08-18 14:59:37',
                'slug'                => 'welcome-to-the-chatter-laravel-forum-package',
                'color'               => '',
            ],
        ]);

        // CREATE THE POSTS

        \DB::table('chatter_post')->delete();

        \DB::table('chatter_post')->insert([
                    0 => [
                        'id'                    => 1,
                        'chatter_discussion_id' => 3,
                        'user_id'               => 1,
                        'body'                  => '<p>My name is Tony and I\'m a developer at <a href="https://devdojo.com" target="_blank">https://devdojo.com</a> and I also work with an awesome company in PB called The Control Group: <a href="http://www.thecontrolgroup.com" target="_blank">http://www.thecontrolgroup.com</a></p>
        <p>You can check me out on twitter at <a href="http://www.twitter.com/tnylea" target="_blank">http://www.twitter.com/tnylea</a></p>
        <p>or you can subscribe to me on YouTube at <a href="http://www.youtube.com/devdojo" target="_blank">http://www.youtube.com/devdojo</a></p>',
                        'created_at' => '2016-08-18 14:27:56',
                        'updated_at' => '2016-08-18 14:27:56',
                    ],
                    1 => [
                        'id'                    => 5,
                        'chatter_discussion_id' => 6,
                        'user_id'               => 1,
                        'body'                  => '<p>Hey!</p>
        <p>Thanks again for checking out chatter. If you want to login with the default user you can login with the following credentials:</p>
        <p><strong>email address</strong>: tony@hello.com</p>
        <p><strong>password</strong>: password</p>
        <p>You\'ll probably want to delete this user, but if for some reason you want to keep it... Go ahead :)</p>',
                    'created_at' => '2016-08-18 14:39:36',
                    'updated_at' => '2016-08-18 14:39:36',
                ],
                2 => [
                    'id'                    => 6,
                    'chatter_discussion_id' => 7,
                    'user_id'               => 1,
                    'body'                  => '<p>If you would like to leave some feedback or have any issues be sure to visit the github page here: <a href="https://github.com/thedevdojo/chatter" target="_blank">https://github.com/thedevdojo/chatter</a>&nbsp;and I\'m sure I can help out.</p>
        <p>Let\'s make this package the go to Laravel Forum package. Feel free to contribute and share your ideas :)</p>',
                'created_at' => '2016-08-18 14:42:29',
                'updated_at' => '2016-08-18 14:42:29',
            ],
            3 => [
            'id'                    => 9,
            'chatter_discussion_id' => 9,
            'user_id'               => 1,
            'body'                  => '<p>Hey There!</p>
        <p>My name is Tony and I\'m the creator of this package that you\'ve just installed. Thanks for checking out it out and if you have any questions or want to contribute be sure to checkout the repo here: <a href="https://github.com/thedevdojo/chatter" target="_blank">https://github.com/thedevdojo/chatter</a></p>
        <p>Happy programming!</p>',
            'created_at' => '2016-08-18 14:59:37',
            'updated_at' => '2016-08-18 14:59:37',
        ],
        6 => [
            'id'                    => 10,
            'chatter_discussion_id' => 9,
            'user_id'               => 1,
            'body'                  => '<p>Hell yeah Bro Sauce!</p>
        <p><img src="https://media.giphy.com/media/j5QcmXoFWl4Q0/giphy.gif" alt="" width="366" height="229" /></p>',
            'created_at' => '2016-08-18 15:01:25',
            'updated_at' => '2016-08-18 15:01:25',
        ],
        ]);
    }
}
