<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         //permission for settings
        Permission::create(['name' => 'settings.index']);
        Permission::create(['name' => 'settings.create']);
        Permission::create(['name' => 'settings.edit']);
        Permission::create(['name' => 'settings.delete']);

        //permission for testimonial
        Permission::create(['name' => 'testimonial.index']);
        Permission::create(['name' => 'testimonial.create']);
        Permission::create(['name' => 'testimonial.edit']);
        Permission::create(['name' => 'testimonial.delete']);

        //permission for greetings
        Permission::create(['name' => 'greetings.index']);
        Permission::create(['name' => 'greetings.create']);
        Permission::create(['name' => 'greetings.edit']);
        Permission::create(['name' => 'greetings.delete']);


        //permission for menu
        Permission::create(['name' => 'menu.index']);
        Permission::create(['name' => 'menu.create']);
        Permission::create(['name' => 'menu.edit']);
        Permission::create(['name' => 'menu.delete']);

        //permission for socialmedia
        Permission::create(['name' => 'socialmedia.index']);
        Permission::create(['name' => 'socialmedia.create']);
        Permission::create(['name' => 'socialmedia.edit']);
        Permission::create(['name' => 'socialmedia.delete']);
        Permission::create(['name' => 'socialmedia.trash']);

        //permission for categories
        Permission::create(['name' => 'categoryposts.index']);
        Permission::create(['name' => 'categoryposts.create']);
        Permission::create(['name' => 'categoryposts.edit']);
        Permission::create(['name' => 'categoryposts.delete']);

        //permission for postsubcategory
        Permission::create(['name' => 'postsubcategory.index']);
        Permission::create(['name' => 'postsubcategory.create']);
        Permission::create(['name' => 'postsubcategory.edit']);
        Permission::create(['name' => 'postsubcategory.delete']);
        Permission::create(['name' => 'postsubcategory.trash']);

        //permission for setarticles
        Permission::create(['name' => 'setarticles.index']);
        Permission::create(['name' => 'setarticles.create']);
        Permission::create(['name' => 'setarticles.edit']);
        Permission::create(['name' => 'setarticles.delete']);
        Permission::create(['name' => 'setarticles.trash']);

        //permission for tags
        Permission::create(['name' => 'tags.index']);
        Permission::create(['name' => 'tags.create']);
        Permission::create(['name' => 'tags.edit']);
        Permission::create(['name' => 'tags.delete']);

        //permission for posts
        Permission::create(['name' => 'posts.index']);
        Permission::create(['name' => 'posts.create']);
        Permission::create(['name' => 'posts.edit']);
        Permission::create(['name' => 'posts.delete']);
        Permission::create(['name' => 'posts.trash']);

        //permission for editorial
        Permission::create(['name' => 'editorial.index']);
        Permission::create(['name' => 'editorial.create']);
        Permission::create(['name' => 'editorial.edit']);
        Permission::create(['name' => 'editorial.delete']);
        Permission::create(['name' => 'editorial.trash']);

        //permission for blog
        Permission::create(['name' => 'blog.index']);
        Permission::create(['name' => 'blog.create']);
        Permission::create(['name' => 'blog.edit']);
        Permission::create(['name' => 'blog.delete']);
        Permission::create(['name' => 'blog.trash']);

        //permission for pagecategories
        Permission::create(['name' => 'pagecategories.index']);
        Permission::create(['name' => 'pagecategories.create']);
        Permission::create(['name' => 'pagecategories.edit']);
        Permission::create(['name' => 'pagecategories.delete']);
        Permission::create(['name' => 'pagecategories.trash']);

        //permission for pages
        Permission::create(['name' => 'pages.index']);
        Permission::create(['name' => 'pages.create']);
        Permission::create(['name' => 'pages.edit']);
        Permission::create(['name' => 'pages.delete']);

        //permission for videocategories
        Permission::create(['name' => 'videocategories.index']);
        Permission::create(['name' => 'videocategories.create']);
        Permission::create(['name' => 'videocategories.edit']);
        Permission::create(['name' => 'videocategories.delete']);

        //permission for video
        Permission::create(['name' => 'video.index']);
        Permission::create(['name' => 'video.create']);
        Permission::create(['name' => 'video.edit']);
        Permission::create(['name' => 'video.delete']);
        Permission::create(['name' => 'video.trash']);

        //permission for albums
        Permission::create(['name' => 'albums.index']);
        Permission::create(['name' => 'albums.create']);
        Permission::create(['name' => 'albums.edit']);
        Permission::create(['name' => 'albums.delete']);
        Permission::create(['name' => 'albums.trash']);

        //permission for photos
        Permission::create(['name' => 'photos.index']);
        Permission::create(['name' => 'photos.create']);
        Permission::create(['name' => 'photos.edit']);
        Permission::create(['name' => 'photos.delete']);
        Permission::create(['name' => 'photos.trash']);

        //permission for sliders
        Permission::create(['name' => 'sliders.index']);
        Permission::create(['name' => 'sliders.create']);
        Permission::create(['name' => 'sliders.edit']);
        Permission::create(['name' => 'sliders.delete']);
        Permission::create(['name' => 'sliders.trash']);

        //permission for roles
        Permission::create(['name' => 'roles.index']);
        Permission::create(['name' => 'roles.create']);
        Permission::create(['name' => 'roles.edit']);
        Permission::create(['name' => 'roles.delete']);

        //permission for permissions
        Permission::create(['name' => 'permissions.index']);
        Permission::create(['name' => 'permissions.create']);
        Permission::create(['name' => 'permissions.edit']);
        Permission::create(['name' => 'permissions.delete']);
        Permission::create(['name' => 'permissions.trash']);

        //permission for users
        Permission::create(['name' => 'users.index']);
        Permission::create(['name' => 'users.create']);
        Permission::create(['name' => 'users.edit']);
        Permission::create(['name' => 'users.delete']);
        Permission::create(['name' => 'users.trash']);

        //permission for advertisements
        Permission::create(['name' => 'advertisements.index']);
        Permission::create(['name' => 'advertisements.create']);
        Permission::create(['name' => 'advertisements.edit']);
        Permission::create(['name' => 'advertisements.delete']);
        Permission::create(['name' => 'advertisements.trash']);

        //permission for downloadcategories
        Permission::create(['name' => 'downloadcategories.index']);
        Permission::create(['name' => 'downloadcategories.create']);
        Permission::create(['name' => 'downloadcategories.edit']);
        Permission::create(['name' => 'downloadcategories.delete']);
        Permission::create(['name' => 'downloadcategories.trash']);

        //permission for downloadfiles
        Permission::create(['name' => 'downloadfiles.index']);
        Permission::create(['name' => 'downloadfiles.create']);
        Permission::create(['name' => 'downloadfiles.edit']);
        Permission::create(['name' => 'downloadfiles.delete']);
        Permission::create(['name' => 'downloadfiles.trash']);

        //permission for widgets
        Permission::create(['name' => 'widgets.index']);
        Permission::create(['name' => 'widgets.create']);
        Permission::create(['name' => 'widgets.edit']);
        Permission::create(['name' => 'widgets.delete']);
        Permission::create(['name' => 'widgets.trash']);

        //permission for events
        Permission::create(['name' => 'events.index']);
        Permission::create(['name' => 'events.create']);
        Permission::create(['name' => 'events.edit']);
        Permission::create(['name' => 'events.delete']);
        Permission::create(['name' => 'events.trash']);

        //permission for agendas
        Permission::create(['name' => 'agendas.index']);
        Permission::create(['name' => 'agendas.create']);
        Permission::create(['name' => 'agendas.edit']);
        Permission::create(['name' => 'agendas.delete']);
        Permission::create(['name' => 'agendas.trash']);

        //permission for links
        Permission::create(['name' => 'links.index']);
        Permission::create(['name' => 'links.create']);
        Permission::create(['name' => 'links.edit']);
        Permission::create(['name' => 'links.delete']);
        Permission::create(['name' => 'links.trash']);

        //permission for student
        Permission::create(['name' => 'student.index']);
        Permission::create(['name' => 'student.create']);
        Permission::create(['name' => 'student.edit']);
        Permission::create(['name' => 'student.delete']);
        Permission::create(['name' => 'student.trash']);

        //permission for employee
        Permission::create(['name' => 'employee.index']);
        Permission::create(['name' => 'employee.create']);
        Permission::create(['name' => 'employee.edit']);
        Permission::create(['name' => 'employee.delete']);
        Permission::create(['name' => 'employee.trash']);

        //permission for course
        Permission::create(['name' => 'course.index']);
        Permission::create(['name' => 'course.create']);
        Permission::create(['name' => 'course.edit']);
        Permission::create(['name' => 'course.delete']);
        Permission::create(['name' => 'course.trash']);

        //permission for member
        Permission::create(['name' => 'member.index']);
        Permission::create(['name' => 'member.create']);
        Permission::create(['name' => 'member.edit']);
        Permission::create(['name' => 'member.delete']);
        Permission::create(['name' => 'member.trash']);

        //permission for hero
        Permission::create(['name' => 'hero.index']);
        Permission::create(['name' => 'hero.create']);
        Permission::create(['name' => 'hero.edit']);
        Permission::create(['name' => 'hero.delete']);
        Permission::create(['name' => 'hero.trash']);

        //permission for program
        Permission::create(['name' => 'program.index']);
        Permission::create(['name' => 'program.create']);
        Permission::create(['name' => 'program.edit']);
        Permission::create(['name' => 'program.delete']);
        Permission::create(['name' => 'program.trash']);

        //permission for editorial
        Permission::create(['name' => 'editorial.index']);
        Permission::create(['name' => 'editorial.create']);
        Permission::create(['name' => 'editorial.edit']);
        Permission::create(['name' => 'editorial.delete']);
        Permission::create(['name' => 'editorial.trash']);

        //permission for blog
        Permission::create(['name' => 'blog.index']);
        Permission::create(['name' => 'blog.create']);
        Permission::create(['name' => 'blog.edit']);
        Permission::create(['name' => 'blog.delete']);
        Permission::create(['name' => 'blog.trash']);

        //permission for statistic
        Permission::create(['name' => 'statistic.index']);
        Permission::create(['name' => 'statistic.create']);
        Permission::create(['name' => 'statistic.edit']);
        Permission::create(['name' => 'statistic.delete']);
        Permission::create(['name' => 'statistic.trash']);

        //permission for performance
        Permission::create(['name' => 'performance.index']);
        Permission::create(['name' => 'performance.create']);
        Permission::create(['name' => 'performance.edit']);
        Permission::create(['name' => 'performance.delete']);
        Permission::create(['name' => 'performance.trash']);
    }
}
