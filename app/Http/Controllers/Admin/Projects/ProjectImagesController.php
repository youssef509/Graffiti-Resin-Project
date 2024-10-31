<?php

namespace App\Http\Controllers\Admin\Projects;

use App\Http\Controllers\Controller;
use App\Models\ProjectsAr;
use App\Models\ProjectImages;
use App\Helpers\FileUploadHelper;

class ProjectImagesController extends Controller
{
    public function index() {
        $projectsFromDB = ProjectsAr::all();
        return view('backend.projects.images', ['projects'=> $projectsFromDB]);
    }

    public function store() {
        request()->validate([
            'project_name' => ['required'],
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


        ProjectImages::create([
            'project_name' => request()->project_name,
            'image' => $imageName,
        ]);
        return to_route('admin.project-images')->with('success-create', 'تم اضافة العنصر بنجاح');
    }

    public function destroy($projectID) {
        $project = ProjectImages::find($projectID);
        $project -> delete();
        return back()->with('success', 'تم حذف العنصر بنجاح');
    }
}
