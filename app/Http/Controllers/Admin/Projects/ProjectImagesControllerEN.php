<?php

namespace App\Http\Controllers\Admin\Projects;

use App\Helpers\FileUploadHelper;
use App\Http\Controllers\Controller;
use App\Models\ProjectImages;
use App\Models\ProjectsEn;

class ProjectImagesControllerEN extends Controller
{
    public function index() {
        $projectsFromDB = ProjectsEn::all();
        return view('backend.projects.images-En', ['projects'=> $projectsFromDB]);
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
        return to_route('admin.project-images-en')->with('success-create', 'تم اضافة العنصر بنجاح');
    }

    public function destroy($projectimageID) {
        $project = ProjectImages::find($projectimageID);
        $project -> delete();
        return back()->with('success', 'تم حذف العنصر بنجاح');
    }
}
