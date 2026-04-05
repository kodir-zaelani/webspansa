<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogcategorystoreRequest;
use App\Http\Requests\BlogcategoryupdateRequest;
use App\Models\Blogcategory;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;

class BlogcategoryController extends Controller
{
    protected $uploadPath;
    /**
    * __construct
    *
    * @return void
    */
    public function __construct()
    {
        $this->uploadPath = public_path(config('cms.image.directoryCategoryblog'));
    }

    public static function middleware(): array
    {
        return [
            // examples with aliases, pipe-separated names, guards, etc:
            'permission:blogcategories.index|blogcategories.create|blogcategories.edit|blogcategories.delete|blogcategories.trash',
        ];
    }

    public function index()
    {
        return view('backend.blogcategory.index', [
            'title' => 'Blog Category'
        ]);
    }

     public function create()
    {
        return view('backend.blogcategory.create', [
            'datablogcategory' => Blogcategory::orderBy('created_at', 'asc')->get(),
            'title' => 'Blog Category Create'
        ]);
    }

    public function store(BlogcategorystoreRequest $request)
    {
        // Default data
        $data = [
            'title'     => $request->input('title'),
            'slug'      => Str::slug($request->input('title')),
            'parent_id' => $request->input('parent_id'),
        ];

        //upload image (cara kedua)
        if ($request->has('image')) {
            # upload with image
            $image = $request->file('image');
            $fileName = 'blogcategory_' . Str::slug($request->title) . '.' . $image->getClientOriginalExtension();
            $destination = $this->uploadPath;

            $successUploaded = Image::read($image);
            $successUploaded->save($destination . $fileName, 80);

            if ($successUploaded) {
                # script dibawah koneksi ke file App\confog\cms.php
                $width = config('cms.image.thumbnailpagecategory.width');
                $height = config('cms.image.thumbnailpagecategory.height');
                $extension = $image->getClientOriginalExtension();
                $thumbnail = str_replace(".{$extension}", "_thumb.{$extension}", $fileName);

                Image::read($destination . '/' . $fileName)
                ->resize($width, $height)
                ->save($destination . '/' . $thumbnail);
            }

            // Tampung isi image ke variable data
            $image_data = $fileName;
            // This is to save the filename of the image in the database
            $data = array_merge($data, [
                'image' => $image_data
            ]);
        }

        $blogcategory = Blogcategory::create($data);

        return redirect()->route('backend.blogcategories.index')->with(['success' => 'Add Bog Category ' . $blogcategory['title'] . ' was successfully!']);
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit(Blogcategory $blogcategory)
    {

        return view('backend.blogcategory.edit', [
            'blogcategory' => $blogcategory,
            'datablogcategory' => Blogcategory::orderBy('created_at', 'asc')->get(),
            'title'        => 'Bog Category Edit',
        ]);
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(BlogcategoryupdateRequest $request, Blogcategory $blogcategory)
    {
        $oldImage = $blogcategory->image;
        // Default data
        $data = [
            'title'     => $request->input('title'),
            'slug'      => Str::slug($request->input('title')),
            'parent_id' => $request->input('parent_id'),
        ];

        //upload image (cara kedua)
        if ($request->has('image')) {
            # upload with image
            $image = $request->file('image');
            $fileName = 'blogcategory_' . Str::slug($request->title) . '.' . $image->getClientOriginalExtension();
            // $fileName = 'blogcategory_' . time() . $image->getClientOriginalName();
            $destination = $this->uploadPath;

            $successUploaded = Image::read($image);
            $successUploaded->save($destination . $fileName, 80);

            if ($successUploaded) {
                # script dibawah koneksi ke file App\confog\cms.php
                $width = config('cms.image.thumbnailpagecategory.width');
                $height = config('cms.image.thumbnailpagecategory.height');
                $extension = $image->getClientOriginalExtension();
                $thumbnail = str_replace(".{$extension}", "_thumb.{$extension}", $fileName);

                Image::read($destination . '/' . $fileName)
                ->resize($width, $height)
                ->save($destination . '/' . $thumbnail);
            }

            // Tampung isi image ke variable data
            $image_data = $fileName;
            // This is to save the filename of the image in the database
            $data = array_merge($data, [
                'image' => $image_data
            ]);
        }

        $blogcategory->update($data);
        // Jika gambar lama ada maka lakukan hapus gambar
            if ($oldImage !== $blogcategory->image) {
                $this->removeImage($oldImage);
            }

        return redirect()->route('backend.blogcategories.index')->with(['warning' => 'Edit Bog Category ' . $blogcategory['title'] . ' was successfully!']);
    }

    // function remove image
    private function removeImage($image)
    {
        if (!empty($image)) {
            $imagePath     = $this->uploadPath . '/' . $image;

            $ext           = substr(strrchr($image, '.'), 1);

            $thumbnail     = str_replace(".{$ext}", "_thumb.{$ext}", $image);
            $thumbnailPath = $this->uploadPath . '/' . $thumbnail;


            if (file_exists($imagePath)) unlink($imagePath);
            if (file_exists($thumbnailPath)) unlink($thumbnailPath);
        }
    }
}