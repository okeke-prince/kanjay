<?php

namespace App\Http\Controllers;

use App\Models\PageImage;
use Illuminate\Http\Request;

class pageImagesController extends Controller
{

    public function index()
    {
        $images = PageImage::all();
        return view('admin.pagesImage.index', compact('images'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'section' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            ]);

            $existingImage = PageImage::where('section', $request->section)->first();

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/pages'), $imageName);

            if ($existingImage) {
                // Replace existing image
                $existingImagePath = public_path($existingImage->image_path);
                if (file_exists($existingImagePath)) {
                    unlink($existingImagePath); // Delete existing image file
                } else {
                    // Handle case where image file doesn't exist
                    // For example, log a warning or take appropriate action
                }
                $existingImage->update(['image_path' => 'uploads/pages/' . $imageName]);
                $image = $existingImage;
            } else {
                // Create new image
                $image = PageImage::create([
                    'section' => $request->section,
                    'image_path' => 'uploads/pages/' . $imageName,
                ]);
            }
            

            return redirect()->route('images.index')
                ->with('success', 'Image ' . ($existingImage ? 'updated' : 'uploaded') . ' successfully');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'An error occurred: ' . $e->getMessage())
                ->withInput();
        }
    }


    // public function edit($id)
    // {
    //     $image = PageImage::findOrFail($id);
    //     return view('admin.pagesImage.edit', compact('image'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'section' => 'required|unique:page_images,section,' . $id,
    //         'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    //     ]);

    //     $image = PageImage::findOrFail($id);

    //     if ($request->hasFile('image')) {
    //         // Delete previous image
    //         if (file_exists(public_path($image->image_path))) {
    //             unlink(public_path($image->image_path));
    //         }

    //         // Upload new image
    //         $imageName = time() . '.' . $request->image->extension();
    //         $request->image->move(public_path('uploads/pages'), $imageName);
    //         $image->update(['image_path' => 'uploads/pages/' . $imageName]);
    //     }

    //     $image->update(['section' => $request->section]);

    //     return redirect()->route('images.index')
    //         ->with('success', 'Image updated successfully');
    // }

    // public function destroy($id)
    // {
    //     $image = PageImage::findOrFail($id);

    //     // Delete image file
    //     if (file_exists(public_path($image->image_path))) {
    //         unlink(public_path($image->image_path));
    //     }

    //     $image->delete();

    //     return redirect()->route('images.index')
    //         ->with('success', 'Image deleted successfully');
    // }

}
