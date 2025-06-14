<!-- <div class="gallery-section">
    <div class="container">
        <h2 class="text-center mb-5">Our Recycling Process</h2>
        
        <div class="gallery-container">
            @for($i = 1; $i <= 6; $i++)
                <div class="gallery-item">
                    <div class="gallery-img-container">
                        <img 
                            src="{{ asset('images/gallery/gallery-'.$i.'.jpg') }}" 
                            alt="Recycling process step {{ $i }}" 
                            class="gallery-img"
                            loading="lazy"
                        >
                    </div>
                    <div class="gallery-caption">
                        <h5 class="mb-0">Process Step {{ $i }}</h5>
                    </div>
                </div>
            @endfor
        </div>
        
        <div class="text-center mt-5">
            <a href="" class="btn btn-primary btn-lg">
                View Full Gallery <i class="fas fa-arrow-right ms-2"></i>
            </a>
        </div>
    </div>
</div> -->

<section class="gallery-section">
  <div class="container">
    <h2 class="section-title text-center">
      <i class="fas fa-recycle me-2"></i> Our Recycling Process
    </h2>
    
    <div class="gallery-grid">
      @foreach([
        ['step' => 1, 'title' => 'Waste Collection', 'location' => 'Hapur Facility'],
        ['step' => 2, 'title' => 'Sorting Process', 'location' => 'Main Plant'],
        ['step' => 3, 'title' => 'E-Waste Dismantling', 'location' => 'Tech Wing'],
        ['step' => 4, 'title' => 'Material Separation', 'location' => 'Processing Unit'],
        ['step' => 5, 'title' => 'Quality Check', 'location' => 'QC Lab'],
        ['step' => 6, 'title' => 'Recycled Materials', 'location' => 'Storage'],
        ['step' => 7, 'title' => 'Packaging', 'location' => 'Shipping Dept'],
        ['step' => 8, 'title' => 'Dispatch', 'location' => 'Logistics'],
        ['step' => 9, 'title' => 'Sustainability', 'location' => 'Green Initiative']
      ] as $item)
        <div class="gallery-card">
          <div class="gallery-img-container">
            <img 
              src="{{ asset('images/gallery/gallery-'.$item['step'].'.jpg') }}" 
              alt="{{ $item['title'] }}" 
              class="gallery-img"
              loading="lazy"
            >
          </div>
          <div class="gallery-caption">
            <h3>{{ $item['title'] }}</h3>
            <div class="location">
              <i class="fas fa-map-marker-alt"></i> {{ $item['location'] }}
            </div>
          </div>
        </div>
      @endforeach
    </div>
    
    <div class="view-more-btn">
      <a href="/gallery" class="btn-view">
        View Full Process <i class="fas fa-arrow-right ms-2"></i>
      </a>
    </div>
  </div>
</section>