<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function index()
    {
        $services = Services::latest()->get();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'image' => 'required|image|file|mimes:jpeg,png,jpg,gif,svg',
            'details' => 'required|string',
        ]);

        try {
            $service = new Services();
            $service->title = $request->title;
            $service->subtitle = $request->subtitle;
            $service->details = $request->details;

            // Image Upload
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/services'), $imageName);
            $service->image = 'uploads/services/' . $imageName;

            // Save the service
            $service->save();

            return redirect()->route('services.index')->with('success', 'Service created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error creating service: ' . $e->getMessage())->withInput();
        }
    }


    public function edit($id)
    {
        $service = Services::find($id);
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            'details' => 'required|string',
        ]);

        try {
            $service = Services::find($id);
            if (!$service) {
                throw new \Exception("Service not found.");
            }

            $service->title = $request->title;
            $service->subtitle = $request->subtitle;
            $service->details = $request->details;

            // Update Image if provided
            if ($request->hasFile('image')) {
                // Delete old image
                if ($service->image) {
                    unlink(public_path('uploads/services/' . $service->image));
                }

                // Upload new image
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/services'), $imageName);
                $service->image = $imageName;
            }

            // Save the updated service
            $service->save();

            return redirect()->route('services.index')->with('success', 'Service updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error updating service: ' . $e->getMessage())->withInput();
        }
    }


    public function destroy($id)
    {
        try {
            $service = Services::find($id);
            if (!$service) {
                throw new \Exception("Service not found.");
            }

            // Delete the image if it exists
            if ($service->image) {
                $imagePath = public_path($service->image);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            // Delete the service
            $service->delete();

            return redirect()->back()->with('success', 'Service deleted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error deleting service: ' . $e->getMessage());
        }
    }
}
