<?php

use Illuminate\Database\Seeder;
use App\Permission;


class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
    	$createPost = new Permission();
    	$createPost->name = "create-post";
    	$createPost->display_name = "create posts";
    	$createPost->description = "create new blog posts";
    	$createPost->save();

    	$editPost = new Permission();
    	$editPost->name = "edit-post";
    	$editPost->display_name = "edit posts";
    	$editPost->description = "edit existing blog posts";
    	$editPost->save();

    	$deletePost = new Permission();
    	$deletePost->name = "delete-post";
    	$deletePost->display_name = "delete posts";
    	$deletePost->description = "delete existing blog posts";
    	$deletePost->save();      
    }
}
