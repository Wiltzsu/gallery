<?php get_header(); ?>

<div class="container p-5  " id="">

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="winter-tab" data-bs-toggle="tab" data-bs-target="#winter" type="button" role="tab" aria-controls="winter" aria-selected="true">Winter</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="summerspring-tab" data-bs-toggle="tab" data-bs-target="#summerspring" type="button" role="tab" aria-controls="summerspring" aria-selected="false">Summer & Spring</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="autumn-tab" data-bs-toggle="tab" data-bs-target="#autumn" type="button" role="tab" aria-controls="autumn" aria-selected="false">Autumn</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="birdsmammals-tab" data-bs-toggle="tab" data-bs-target="#birdsmammals" type="button" role="tab" aria-controls="birdsmammals" aria-selected="false">Birds & Mammals</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="plantsinsects-tab" data-bs-toggle="tab" data-bs-target="#plantsinsects" type="button" role="tab" aria-controls="plantsinsects" aria-selected="false">Plants & Insects</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="winter" role="tabpanel" aria-labelledby="winter-tab">  
    <?php
    if ( is_active_sidebar( 'custom-sidebar7' ) ) {
      dynamic_sidebar( 'custom-sidebar7' );
    }
    ?>
  </div>
  <div class="tab-pane fade" id="winter" role="tabpanel" aria-labelledby="winter-tab">...</div>
  <div class="tab-pane fade" id="summerspring" role="tabpanel" aria-labelledby="summerspring-tab">...</div>
  <div class="tab-pane fade" id="autumn" role="tabpanel" aria-labelledby="autumn-tab">...</div>
  <div class="tab-pane fade" id="birdsmammals" role="tabpanel" aria-labelledby="birdsmammals-tab">...</div>
  <div class="tab-pane fade" id="plantsinsects" role="tabpanel" aria-labelledby="plantsinsects-tab">...</div>
</div>

</div>

<?php get_footer(); ?>