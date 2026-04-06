<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestPerformanceStore;
use App\Http\Requests\RequestPerformanceUpdate;
use App\Models\Performance;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;

class PerformanceController extends Controller
{
   protected $uploadPath;
   protected $textWatermark;

    /**
    * __construct
    *
    * @return void
    */
    public function __construct()
    {
        $this->uploadPath = public_path(config('cms.image.directoryPerformance'));
        $this->textWatermark = $global_options->webname ?? config('cms.textWatermark');

    }

    public static function middleware(): array
    {
        return [
            'permission:performance.index|performance.create|performance.edit|performance.delete|performance.trash',
        ];
    }

    public function index()
    {
        return view('backend.performance.index',[
            'title'=> 'Backend Performance'
        ]);
    }

    public function create()
    {
        return view('backend.performance.create', [
            'title'=> 'Prestasi '
        ]);
    }

    public function store(RequestPerformanceStore $request)
    {
        // Default data
        $data = [
            'title'              => $request->input('title'),
            'slug'               => Str::slug($request->input('title')),
            'content'            => $request->input('content'),
            'video'              => $request->input('video'),
            'caption_video'      => $request->input('caption_video'),
            'caption_image'      => $request->input('caption_image'),
            'status'             => $request->input('status'),
            'comment_status'     => 0,
            'published_at'       => $request->input('published_at'),
            'author_id'          => Auth::id(),
        ];

        if ($request->has('image')) {
            # upload with image
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $fileName = 'blog_' . Str::slug($request->title) . '.' . $extension;
            $destination = $this->uploadPath;

            $imageUploaded = Image::read($image)->resize(1024, 768);
            $imageUploaded->save($destination . $fileName, 80);

            if ($imageUploaded) {
                $extension = $image->getClientOriginalExtension();

                //KEMUDIAN KITA SISIPKAN WATERMARK DENGAN TEXT LAMAN KREASI
                //X = 200, Y = 150. SILAHKAN DISESUAIKAN UNTUK POSISINYA
                $imageUploaded->text($this->textWatermark, 300, 150, function ($font) {
                    // $font->file(public_path('fonts/milkyroad.ttf'));   //LOAD FONT-NYA JIKA ADA, SILAHKAN DOWNLOAD SENDIRI
                    $font->file(public_path('uploads/fonts/amandasignature.ttf'));   //LOAD FONT-NYA JIKA ADA, SILAHKAN DOWNLOAD SENDIRI
                    $font->size(30);
                    $font->color('#f5f0e6');
                    $font->align('center');
                    $font->valign('bottom');
                    $font->angle(0);
                });

                // Watermark
                $filenameWatermark = str_replace(".{$extension}", "_watermark.{$extension}", $fileName);

                // Save watermark
                $imageUploaded->resize(1024, 768)
                ->save($destination . '/' . $filenameWatermark, 80); //SIMPAN FILE ORIGINAL YANG BERISI WATERMARK

                # script dibawah koneksi ke file App\confog\cms.php
                $width = config('cms.image.thumbnailperformance.width');
                $height = config('cms.image.thumbnailperformance.height');
                $thumbnail = str_replace(".{$extension}", "_thumb.{$extension}", $fileName);

                $imageUploaded->resize($width, $height)
                ->save($destination . '/' . $thumbnail); //SIMPAN FILE THUMBNAIL YANG BERISI WATERMARK

            }

            // Tampung isi image ke variable data
            $image_data = $fileName;
            $image_watermark = $filenameWatermark;
            // This is to save the filename of the image in the database
            $data = array_merge($data, [
                'image' => $image_data,
            ]);

            $data = array_merge($data, [
                'image_watermark' => $image_watermark,
            ]);
        }

        $performance = Performance::create($data);

        if ($performance) {
            //redirect dengan pesan sukses
            return redirect()->route('backend.performance.index')->with(['success' => 'Add Performance ' . $performance['title'] . ' was successfully!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('backend.performance.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit(Performance $performance)
    {

        return view('backend.performance.edit', [
            'performance' => $performance,
            'title'       => 'Prestasi Edit',
        ]);
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(RequestPerformanceUpdate $request, Performance $performance)
    {
        //cek gambar lama
        $oldImage = $performance->image;

        $oldBlogsubcategory = $performance->blogsubcategory;

        // Default data
        $data = [
            'title'           => $request->input('title'),
            'slug'            => Str::slug($request->input('title')),
            'content'         => $request->input('content'),
            'video'           => $request->input('video'),
            'caption_video'   => $request->input('caption_video'),
            'caption_image'   => $request->input('caption_image'),
            'status'          => $request->input('status'),
            'published_at'    => $request->input('published_at'),
            'updated_by'      => Auth::id(),
        ];


        //upload image (cara kedua)
        if ($request->has('image')) {
            # upload with image
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();
            $fileName = 'blog_' . Str::slug($request->title) . '.' . $extension;
            // $fileName    = time() . "_blog." . $extension;
            // $filenameWithoutEx = Str::slug($request->title) . '_' . time(); //GENERATE NAMA FILE SLUG DARI TITLE TANPA EXTENSION
            // $fileName = $filenameWithoutEx . '_' . $image->getClientOriginalName(); //GENERATE NAMA FILE DENGAN EXTENSION
            $destination = $this->uploadPath;

            $imageUploaded = Image::read($image)->resize(1024, 768);
            $imageUploaded->save($destination . $fileName, 80); //SIMPAN FILE ORIGINAL YANG BELUM BERISI WATERMARK

            if ($imageUploaded) {
                $extension = $image->getClientOriginalExtension();

                //KEMUDIAN KITA SISIPKAN WATERMARK DENGAN TEXT LAMAN KREASI
                //X = 200, Y = 150. SILAHKAN DISESUAIKAN UNTUK POSISINYA
                $imageUploaded-> text( $this->textWatermark, 300, 150, function ($font) {
                    // $font->file(public_path('fonts/milkyroad.ttf'));   //LOAD FONT-NYA JIKA ADA, SILAHKAN DOWNLOAD SENDIRI
                    $font->file(public_path('uploads/fonts/amandasignature.ttf'));   //LOAD FONT-NYA JIKA ADA, SILAHKAN DOWNLOAD SENDIRI
                    $font->size(30);
                    $font->color('#f5f0e6');
                    $font->align('center');
                    $font->valign('bottom');
                    $font->angle(0);
                });

                // Watermark
                $filenameWatermark = str_replace(".{$extension}", "_watermark.{$extension}", $fileName);

                // Save watermark
                $imageUploaded->resize(1024, 768)
                ->save($destination . '/' . $filenameWatermark, 80); //SIMPAN FILE ORIGINAL YANG BERISI WATERMARK

                # script dibawah koneksi ke file App\confog\cms.php
                $width = config('cms.image.thumbnailperformance.width');
                $height = config('cms.image.thumbnailperformance.height');
                $thumbnail = str_replace(".{$extension}", "_thumb.{$extension}", $fileName);

                $imageUploaded->resize($width, $height)
                ->save($destination . '/' . $thumbnail); //SIMPAN FILE THUMBNAIL YANG BERISI WATERMARK

            }

            // Tampung isi image ke variable data
            $image_data = $fileName;
            $image_watermark = $filenameWatermark;
            // This is to save the filename of the image in the database
            $data = array_merge($data, [
                'image' => $image_data,
            ]);

            $data = array_merge($data, [
                'image_watermark' => $image_watermark,
            ]);
        }

        $performance->update($data);

        // Jika gambar lama ada maka lakukan hapus gambar
        if ($oldImage !== $performance->image) {
            $this->removeImage($oldImage);
        }

        if ($performance) {
            //redirect dengan pesan sukses
            return redirect()->route('backend.performance.index')->with(['warning' => 'Update Performance ' . $performance['title'] . ' was successfully!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('backend.performance.index')->with(['error' => 'Data Gagal Diperbaharui!']);
        }
    }

    // function remove image
    private function removeImage($image)
    {
        if (!empty($image)) {
            $imagePath     = $this->uploadPath . '/' . $image;

            $ext           = substr(strrchr($image, '.'), 1);

            $thumbnail     = str_replace(".{$ext}", "_thumb.{$ext}", $image);
            $thumbnailPath = $this->uploadPath . '/' . $thumbnail;

            $watermark     = str_replace(".{$ext}", "_watermark.{$ext}", $image);
            $watermarkPath = $this->uploadPath . '/' . $watermark;

            if (file_exists($imagePath)) unlink($imagePath);
            if (file_exists($thumbnailPath)) unlink($thumbnailPath);
            if (file_exists($watermarkPath)) unlink($watermarkPath);
        }
    }
}