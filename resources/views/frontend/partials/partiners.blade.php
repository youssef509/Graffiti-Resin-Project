 <!-- start partner area -->
 <div class="partner-area partner-two">
    <div class="container">
        <div class="partner-slider owl-carousel">
            @foreach($partinersData as $partiner)
            <div class="slider-item">
                <img src="{{ $partiner->image_url }}" alt="{{ $partiner->alt }}">
                <img src="{{ $partiner->image_url }}" alt="{{ $partiner->alt }}">
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- end partner area -->
