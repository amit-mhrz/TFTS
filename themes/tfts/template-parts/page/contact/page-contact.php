<div class="page-title wow fadeInDown" data-wow-delay=".5s">
  <div class="container">
      <div class="col-md-12">
            <h2>Contact Us</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                </ol>
            </nav>
      </div>
  </div>
</div>
<!-- End of page-title -->

<section id="contact">
    <?php 
        $map = get_field('map_co-ordinates');
        list($latitude, $longitude) = explode(",", $map);
    ?>
    <div id="mapid" class="wow fadeInDown" data-wow-delay=".5s"></div>
    <div class="section-container">
      <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="contact-heading wow fadeInDown" data-wow-delay=".5s">
            <h3><?php the_field('contact_title');?></h3>
            <p><?php the_field('contact_description');?></p>
          </div>
        </div>
      </div>
       <div class="row contact-content">
          <div class="col-md-7">
            <div class="contact-form wow fadeInRight" data-wow-delay=".5s">
                <?php echo do_shortcode('[contact-form-7 id="47" title="Contact form"]'); ?>
            </div>
          </div>
          <div class="col-md-5 pad-l-40 wow fadeInLeft" data-wow-delay=".5s">
            <div class="form-right">
                <ul class="no-style">
                    <li><i class="fas fa-map-marker"></i><?php the_field('contact_location');?></li>
                    <li><i class="fas fa-phone fa-flip-horizontal"></i> <a href="tel:<?php the_field('contact_phone');?>">+<?php the_field('contact_phone');?></a></li>
                    <li><i class="fas fa-mobile"></i> <a href="tel:<?php the_field('contact_m_no');?>">+<?php the_field('contact_m_no');?></a></li>
                    <li><i class="fas fa-fax"></i> <a href="<?php the_field('contact_fax');?>">+<?php the_field('contact_fax');?></a></li>
                    <li><i class="fas fa-envelope"></i> <a href="mailto:<?php the_field('header_email_address', 'option');?>"><?php the_field('header_email_address', 'option');?></a></li>
                </ul>                                
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<!-- End of services -->

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css">
<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"></script>
<script type="text/javascript">

    //map in
    var geoCoords = '[' + <?php echo $latitude;?> + ', ' + <?php echo $longitude;?> + ']';
    var map = L.map('mapid', {
    center: JSON.parse(geoCoords),
    zoom: 14
    });
    var marker = L.marker(JSON.parse(geoCoords)).addTo(map);
    marker.bindPopup("<b>TECH FORCE TECHNICAL SERVICE</b>").openPopup();
    map.scrollWheelZoom.disable();

    L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoiYW1pdC1tYWhhcnhhbiIsImEiOiJjanJ1cGZxZ3UwNnhsNGFsNTAzcWtsanpsIn0.tnq36qhYA87WJb2nR7_KIw', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoiYW1pdC1tYWhhcnhhbiIsImEiOiJjanR6b2RzNjUwMXBmM3lwODRlZTF4cmloIn0.zWw0ksNBJpveUF1B_RzjDA'
    }).addTo(map);
</script>