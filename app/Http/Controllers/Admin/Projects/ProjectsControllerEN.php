<?php

namespace App\Http\Controllers\Admin\Projects;

use App\Helpers\FileUploadHelper;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ProjectImages;
use App\Models\ProjectsEn;
use Illuminate\Http\Request;

class ProjectsControllerEN extends Controller
{
    public function index() {
        $projectsFromDB = ProjectsEn::all();
        $categories = Category::all();
        return view('backend.projects.projectsEn', ['projects'=> $projectsFromDB], ['categories' => $categories]);
    }

    public function store() {
        request()->validate([
            'project_name' => ['required'],
            'project_customer' => ['required'],
            'project_category' => ['required'],
            'project_location' => ['required'],
            'project_date' => ['required'],
            'project_description1' => ['required'],
            'project_description2' => ['required'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        // Process the image upload after validation has passed
        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $folder = 'projects';
            $imageName = FileUploadHelper::uploadFile($image, $folder);
        } else {
            return back()->withErrors(['image' => 'Image upload failed.']);
        }


        ProjectsEn::create([
            'project_name' => request()->project_name,
            'project_customer' => request()->project_customer,
            'project_category' => request()->project_category,
            'project_location' => request()->project_location,
            'project_date' => request()->project_date,
            'project_description1' => request()->project_description1,
            'project_description2' => request()->project_description2,
            'image' => $imageName,
        ]);
        return to_route('admin.projects-En')->with('success-create', 'تم اضافة العنصر بنجاح');
    }

    public function edit($id) {
        $categories = Category::all();
        $ProjectImages = ProjectImages::all();
        $projectsFromDB = ProjectsEn::where('id', $id)->first();
        return view('backend.projects.projects-edit-En', ['categories' => $categories, 'project' => $projectsFromDB, 'ProjectImages' => $ProjectImages]);

    }

    public function update(Request $request, $projectID) {
        $project = ProjectsEn::findOrFail($projectID);
        request()->validate([
            'project_name' => ['required'],
            'project_customer' => ['required'],
            'project_category' => ['required'],
            'project_location' => ['required'],
            'project_date' => ['required'],
            'project_description1' => ['required'],
            'project_description2' => ['required'],
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        // Handle image upload if a new image is provided
        if ($request->hasFile('image')) {
            // Delete the old image
            $oldImagePath = public_path('uploads/projects/' . $project->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath); // Deletes the old image file
            }
            // Upload new image
            $image = $request->file('image');
            $imageFolder = 'projects';
            $imageName = FileUploadHelper::uploadFile($image, $imageFolder);
        } else {
            $imageName = $project->image; // Keep the current image if no new one is uploaded
        }

        // Update the product in the database
        $project->update([
            'project_name' => $request->project_name,
            'project_customer' => $request->project_customer,
            'project_category' => $request->project_category,
            'project_location' => $request->project_location,
            'project_date' => $request->project_date,
            'project_description1' => $request->project_description1,
            'project_description2' => $request->project_description2,
            'image' => $imageName,
        ]);

        return redirect()->route('admin.projects-En')->with('success-update', 'تم تحديث المنتج بنجاح');
    }

    public function destroy($projectID) {
        $project = ProjectsEn::find($projectID);
        $project -> delete();
        return to_route('admin.projects-En')->with('success', 'تم حذف العنصر بنجاح');
    }
}
