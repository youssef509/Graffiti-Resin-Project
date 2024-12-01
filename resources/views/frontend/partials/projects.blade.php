<!-- start finished projects section -->
<section class="finished-projects-section style-two pt-100 pb-70 bg-primary">
    <div class="bg-image">
        <img src="frontend/assets/img/1920 X 413 Projects Banner.jpg" alt="Image">
    </div>
    <div class="container">
        <div class="section-title">
            <h2>@lang('messages.OurProjects')</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="finished-projects-slider owl-carousel">
                    @foreach($projectsData as $projects)
                    <div class="slider-item">
                        <div class="image">
                            <img src="{{$projects->image_url}}" alt="Main Image">
                        </div>
                        <div class="overlay-content">
                            <h3><a href="{{route('projects-show', $projects->id)}}">{{$projects->project_name}}</a></h3>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end finished projects section -->