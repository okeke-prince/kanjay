<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PopularRoutes;
use Illuminate\Http\Request;

class LocationController extends Controller
{

    public function index()
    {
        $locations = PopularRoutes::latest()->get();
        return view('admin.locations.index', compact('locations'));
    }

    public function create()
    {
        return view('admin.locations.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'title' => 'required|string',
            'image' => 'required|image',
            'location' => 'required|string',
            'type' => 'required|string',
            'details' => 'required',
            'document' => 'required|mimes:pdf,doc,docx',
        ]);

        try {

            $location = new PopularRoutes();
            $location->title = $request->title;
            $location->location = $request->location;
            $location->type = $request->type;
            $location->amount = $request->amount;
            $location->details = $request->details;

            // Image Upload
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $location->image = $imageName;

            // Document Upload
            $document = $request->file('document');
            $documentName = time() . '.' . $document->getClientOriginalExtension();
            $document->move(public_path('uploads/documents'), $documentName);
            $location->document = $documentName;

            // Save the location
            $location->save();

            return redirect()->route('locations.index')->with('success', 'Location created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error creating location: ' . $e->getMessage())->withInput();
        }
    }

    public function edit($id)
    {
        $location = PopularRoutes::find($id);
        return view('admin.locations.edit', compact('location'));
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'title' => 'required|string',
                'image' => 'image|mimes:jpeg,png,jpg,gif',
                'location' => 'required|string',
                'type' => 'required|string',
                'document' => 'mimes:pdf,doc,docx',
            ]);

            $location = PopularRoutes::find($id);
            $location->title = $request->title;
            $location->location = $request->location;
            $location->type = $request->type;
            $location->amount = $request->amount;
            $location->details = $request->details;

            // Update Image if provided
            if ($request->hasFile('image')) {
                // Delete old image
                if ($location->image) {
                    unlink(public_path('uploads/' . $location->image));
                }

                // Upload new image
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imageName);
                $location->image = $imageName;
            }

            // Update Document if provided
            if ($request->hasFile('document')) {
                // Delete old document
                if ($location->document) {
                    unlink(public_path('uploads/documents/' . $location->document));
                }

                // Upload new document
                $document = $request->file('document');
                $documentName = time() . '.' . $document->getClientOriginalExtension();
                $document->move(public_path('uploads/documents'), $documentName);
                $location->document = $documentName;
            }

            // Save the updated location
            $location->save();

            return redirect()->route('locations.index')->with('success', 'Location updated successfully');
        } catch (\Exception $e) {
            // Handle the error
            dd($e);
            return redirect()->back()->with('error', 'Error updating location: ' . $e->getMessage())->withInput();
        }
    }



    public function destroy($id)
    {
        PopularRoutes::find($id)->delete();
        return redirect()->back()->with('success', 'Popular route deleted successfully');
    }
}
