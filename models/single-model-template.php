<?php
// Single Model Template - Similar to city-template.php
// This template will be used by all model pages

include $_SERVER['DOCUMENT_ROOT'] . '/header.php';

// Get model data from texts array using page_key (set by the calling file)
$model_data = $texts[$page_key] ?? null;

if (!$model_data) {
    echo "Model not found!";
    exit;
}

// Get model name and title
$model_name = $model_data['name'] ?? 'Model';
$model_title = $model_data['title'] ?? $model_name;
?>

<link rel="stylesheet" href="/assets/css/cities.css"> 
<link rel="stylesheet" href="/assets/css/index.css">

<!-- Hero Section -->
<div class="city-hero" style="background-image: url('<?= htmlspecialchars($model_data['image'] ?? '/modelsimages/model4.webp') ?>');">
  <div class="city-hero-content">
    <h1><?= htmlspecialchars($model_name) ?> - Super Party Girl</h1>
    <p><?= htmlspecialchars($model_data['description'] ?? '') ?></p>
   
  </div>
</div>

<main>
  <!-- Model Info Section -->
  <section id="model-info" class="city-content-section">
    <div class="content-wrapper">
      <!-- Model Profile Card with Image -->
      <div class="model-profile-card">
        <div class="profile-image-section">
          <img src="<?= htmlspecialchars($model_data['image'] ?? '/modelsimages/model4.webp') ?>" alt="<?= htmlspecialchars($model_name) ?>" class="model-profile-img">
          <div class="image-overlay">
            <div class="overlay-text"><?= htmlspecialchars($model_name) ?></div>
          </div>
        </div>
        
        <div class="profile-info-section">
          <div class="profile-header">
            <h2 class="profile-name"><?= htmlspecialchars($model_name) ?></h2>
            <div class="profile-subtitle">Super Party Girl</div>
          </div>

          <!-- Model Stats Grid -->
          <div class="stats-grid">
            <div class="stat-box">
              <div class="stat-icon"></div>
              <div class="stat-content">
                <div class="stat-label">Height</div>
                <div class="stat-value"><?= htmlspecialchars($model_data['height'] ?? '') ?></div>
              </div>
            </div>
            <div class="stat-box">
              <div class="stat-icon"></div>
              <div class="stat-content">
                <div class="stat-label">Age</div>
                <div class="stat-value"><?= htmlspecialchars($model_data['age'] ?? '') ?></div>
              </div>
            </div>
            <div class="stat-box">
              <div class="stat-icon"></div>
              <div class="stat-content">
                <div class="stat-label">Weight</div>
                <div class="stat-value"><?= htmlspecialchars($model_data['weight'] ?? '') ?></div>
              </div>
            </div>
            <div class="stat-box">
              <div class="stat-icon"></div>
              <div class="stat-content">
                <div class="stat-label">Bust</div>
                <div class="stat-value"><?= htmlspecialchars($model_data['bust'] ?? '') ?></div>
              </div>
            </div>
          </div>

          <!-- Fast Highlights -->
          <?php if (!empty($model_data['highlights'])): ?>
          <div class="highlights-section">
            <h3 class="highlights-title"><?= htmlspecialchars($model_data['heroTitle'] ?? 'Fast Highlights') ?></h3>
            <div class="highlights-grid">
              <?php foreach ($model_data['highlights'] as $highlight): ?>
                <div class="highlight-tag"><?= htmlspecialchars($highlight) ?></div>
              <?php endforeach; ?>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div>


      <?php if (!empty($model_data['first_impression'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['heroTitle'] ?? 'First Impressions') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['first_impression']) ?></p>
      </div>
      <?php endif; ?>
      

      <?php if (!empty($model_data['energy_you_feel'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Glow_Ease'] ?? 'Energy You Feel') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['energy_you_feel']) ?></p>
      </div>
      <?php endif; ?>  

      <?php if (!empty($model_data['Sweet_Fire'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Sweet_Fire'] ?? 'Sweet Fire') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['mood_and_chemistry']) ?></p>
      </div>
      <?php endif; ?>  



      <?php if (!empty($model_data['Laugh_And_Flirt'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Laugh_And_Flirt'] ?? 'Laugh And Flirt') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['laugh_and_flirt']) ?></p>
      </div>
      <?php endif; ?>  




      <?php if (!empty($model_data['Warm_Extrovert'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Warm_Extrovert'] ?? 'Warm Extrovert') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['mood_and_chemistry']) ?></p>
      </div>
      <?php endif; ?>  


      
      <?php if (!empty($model_data['Tiny_Waist'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Tiny_Waist'] ?? 'Energy You Feel') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['mood_and_chemistry']) ?></p>
      </div>
      <?php endif; ?>  



      <?php if (!empty($model_data['Gentle_Sounds'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Gentle Sounds'] ?? 'Gentle Sounds') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['mood_and_chemistry']) ?></p>
      </div>
      <?php endif; ?>


      <?php if (!empty($model_data['Melt_Point'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Melt Point'] ?? 'Melt Point') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['Melt_Point']) ?></p>
      </div>
      <?php endif; ?>

      <?php if (!empty($model_data['Sweet_Heat'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Sweet Heat'] ?? 'Sweet Heat') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['Sweet_Heat']) ?></p>
      </div>
      <?php endif; ?>  



      <?php if (!empty($model_data['Hold_Soft'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Hold_Sof'] ?? 'Hold Me') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['Hold_Soft']) ?></p>
      </div>
      <?php endif; ?>  



      <?php if (!empty($model_data['Slow_Motio'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Slow_Motio'] ?? 'Curves In Slow Motion') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['Slow_Motion']) ?></p>
      </div>
      <?php endif; ?>  


      
      <?php if (!empty($model_data['Honey_Talk'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Honey Talk'] ?? 'Honey Talk') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['Honey_Talk']) ?></p>
      </div>
      <?php endif; ?>  



      <?php if (!empty($model_data['Wild_Heart '])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Wild Heart Switch '] ?? 'Wild Heart Switch') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['Wild_Heart ']) ?></p>
      </div>
      <?php endif; ?> 

      <?php if (!empty($model_data['Dance_Glow'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Dance Glow'] ?? 'Dance Glow') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['Dance_Glow']) ?></p>
      </div>
      <?php endif; ?>  


      <?php if (!empty($model_data['CurvesLinger'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Curves That Linger
'] ?? 'Curves That Linger
') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['CurvesLinger']) ?></p>
      </div>
      <?php endif; ?> 


      
      <?php if (!empty($model_data['Petite_Fire'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Petite Fire'] ?? 'Petite Fire') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['Petite_Fire']) ?></p>
      </div>
      <?php endif; ?> 

      <?php if (!empty($model_data['Curves_Motion'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Curves In Motion'] ?? 'Curves In Motion') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['Curves_Motion']) ?></p>
      </div>
      <?php endif; ?>
      
      
      <?php if (!empty($model_data['Stay_Close'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Stay_Clos'] ?? 'Stay Close') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['Stay_Close']) ?></p>
      </div>
      <?php endif; ?> 

      <?php if (!empty($model_data['Flirt-Play'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Flirt Play'] ?? 'Flirt Play') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['Flirt-Play']) ?></p>
      </div>
      <?php endif; ?>


      <?php if (!empty($model_data['energy'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['The Laugh That Wins'] ?? 'The Laugh That Wins') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['energy']) ?></p>
      </div>
      <?php endif; ?>
      

      <?php if (!empty($model_data['kol_glow'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['KOL Glow'] ?? 'KOL Glow') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['kol_glow']) ?></p>
      </div>
      <?php endif; ?>


      <?php if (!empty($model_data['ocean_energy'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['hero'] ?? 'Ocean Energy') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['ocean_energy']) ?></p>
      </div>
      <?php endif; ?>
      <?php if (!empty($model_data['calm_magic'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['calm'] ?? 'Calm Magic') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['calm_magic']) ?></p>
      </div>
      <?php endif; ?>

      


      <?php if (!empty($model_data['play_mood'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['play'] ?? 'Play Mood') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['play_mood']) ?></p>
      </div>
      <?php endif; ?>

      


      <?php if (!empty($model_data['playful_edge'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['playful'] ?? 'Playful Edge') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['playful_edge']) ?></p>
      </div>
      <?php endif; ?>

      <?php if (!empty($model_data['little_sister_charm'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Little Sister Charm'] ?? 'Little Sister Charm') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['little_sister_charm']) ?></p>
      </div>
      <?php endif; ?>
      

      


      <?php if (!empty($model_data['close_and_cozy'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['cozy'] ?? 'Close and Cozy') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['close_and_cozy']) ?></p>
      </div>
      <?php endif; ?>

    

    


      

      <?php
      if (!empty($model_data['voice_style'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title">Her Sound</h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['voice_style']) ?></p>
      </div>
      <?php endif; ?>

      <?php
      if (!empty($model_data['eye_contact'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title">Her Eyes</h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['eye_contact']) ?></p>
      </div>
      <?php endif; ?>

      <?php
      if (!empty($model_data['smile_effect'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title">Smile Effect</h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['smile_effect']) ?></p>
      </div>
      <?php endif; ?>


      <?php
      if (!empty($model_data['vibe'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title">Vibes And Chemistry</h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['vibe']) ?></p>
      </div>
      <?php endif; ?>

      <!-- About Section -->
      <div class="content-card modern-card">
        <h2 class="modern-title">About <?= htmlspecialchars($model_name) ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['content'] ?? '') ?></p>
      </div>

      <!-- Her Vibe -->
      <?php if (!empty($model_data['vibe'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title">Her Vibe</h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['vibe']) ?></p>
      </div>
      <?php endif; ?>

      <?php if (!empty($model_data['voice_and_presence'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title">Voice And Presence</h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['voice_and_presence']) ?></p>
      </div>
      <?php endif; ?>


      <?php if (!empty($model_data['sweet_details'])): ?>
      <div class="content-card modern-card">
        <h2 class="modern-title">
       <?= htmlspecialchars($model_data['Little_Keepsakes'] ?? 'Tiny Details You Fall For') ?>


       
        

        </h2>
        <div class="love-grid">
          <?php foreach ($model_data['sweet_details'] as $reason): ?>
            <div class="love-item">
              <span class="love-icon"></span>
              <span class="love-text"><?= htmlspecialchars($reason) ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endif; ?>


      <?php if (!empty($model_data['Frost_To_Sun'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Frost to sun'] ?? 'Frost To Sun') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['Frost_To_Sun']) ?></p>
      </div>
      <?php endif; ?>


      <?php if (!empty($model_data['uncontrolled_vibes'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['uncontrolled'] ?? 'Uncontrolled Vibes') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['uncontrolled_vibes']) ?></p>
      </div>
      <?php endif; ?>


      <?php if (!empty($model_data['close_up_moments'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['close up moments'] ?? 'Close Up Moments') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['close_up_moments']) ?></p>
      </div>
      <?php endif; ?>
       


      <?php if (!empty($model_data['close'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Energy You Feel'] ?? 'Energy You Feel') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['close']) ?></p>
      </div>
      <?php endif; ?>
      



      <!-- Why People Love Her -->
      <?php if (!empty($model_data['why_love'])): ?>
  <div class="content-card modern-card why-love-card">
    <h2 class="modern-title">What Makes Her Unforgettable</h2>
    <p class="modern-text"><?= htmlspecialchars(implode(' ', $model_data['why_love'])) ?></p>
  </div>
<?php endif; ?>

      <?php if (!empty($model_data['moments_to_imagine'])): ?>
      <div class="content-card modern-card">
        <h2 class="modern-title">
        <?= htmlspecialchars($model_data['Picture_This'] ?? 'Scenes To Melt For') ?>
        </h2>
        <div class="best-for-grid">
          <?php foreach ($model_data['moments_to_imagine'] as $use): ?>
            <div class="best-for-card">
              <div class="card-icon"></div>
              <div class="card-text"><?= htmlspecialchars($use) ?></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endif; ?>



      <?php if (!empty($model_data['moments_to_Picture'])): ?>
      <div class="content-card modern-card">
        <h2 class="modern-title">
        <?= htmlspecialchars($model_data['moments'] ?? 'Moments To Picture') ?>
        </h2>
        <div class="best-for-grid">
          <?php foreach ($model_data['moments_to_Picture'] as $use): ?>
            <div class="best-for-card">
              <div class="card-icon"></div>
              <div class="card-text"><?= htmlspecialchars($use) ?></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endif; ?>

      

<?php if (!empty($model_data['dance_spark'])): ?>
      <div class="content-card modern-card">
        <h2 class="modern-title">Dance Spark</h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['dance_spark']) ?></p>
      </div>
      <?php endif; ?>

      <?php
      if (!empty($model_data['vibe'])): ?>
      <div class="content-card modern-card">
        <h2 class="modern-title">Her Vibe</h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['vibe']) ?></p>
      </div>
      <?php endif; ?>

      <!-- Best For -->
      <?php if (!empty($model_data['best_for'])): ?>
      <div class="content-card modern-card">
        <h2 class="modern-title">
        <?= htmlspecialchars($model_data['Best_For'] ?? 'Where She Shines') ?>
        </h2>
        <div class="best-for-grid">
          <?php foreach ($model_data['best_for'] as $use): ?>
            <div class="best-for-card">
              <div class="card-icon"></div>
              <div class="card-text"><?= htmlspecialchars($use) ?></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endif; ?>


      <?php if (!empty($model_data['Mood_chemistry'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Mood And Chemistry'] ?? 'Mood And Chemistry') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['Mood_chemistry']) ?></p>
      </div>
      <?php endif; ?>

      <?php if (!empty($model_data['photo_and_video_ideas'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title">Photo And Video Ideas</h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['photo_and_video_ideas']) ?></p>
      </div>
      <?php endif; ?>

      <?php if (!empty($model_data['styling_and_wardrobe'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title">Styling And Wardrobe</h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['styling_and_wardrobe']) ?></p>
      </div>
      <?php endif; ?>

      <?php if (!empty($model_data['social_caption_starters'])): ?>
      <div class="content-card modern-card">
        <h2 class="modern-title">Social Caption ideas</h2>
        <div class="best-for-grid">
          <?php foreach ($model_data['social_caption_starters'] as $use): ?>
            <div class="best-for-card">
              <div class="card-icon"></div>
              <div class="card-text"><?= htmlspecialchars($use) ?></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endif; ?>

      <!-- Style Notes & Gallery -->
      <div class="two-column-section">
        <?php if (!empty($model_data['style_notes'])): ?>
        <div class="content-card modern-card">
          <h2 class="modern-title">Style Notes</h2>
          <p class="modern-text"><?= htmlspecialchars($model_data['style_notes']) ?></p>
        </div>
        <?php endif; ?>

        <!-- Photo And Video Ideas -->
        <?php if (!empty($model_data['social_caption_starters'])): ?>
      <div class="content-card modern-card">
        <h2 class="modern-title">Social Caption Starters</h2>
        <div class="best-for-grid">
          <?php foreach ($model_data['social_caption_starters'] as $use): ?>
            <div class="best-for-card">
              <div class="card-icon"></div>
              <div class="card-text"><?= htmlspecialchars($use) ?></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endif; ?>

        <?php if (!empty($model_data['gallery_teaser'])): ?>
        <div class="content-card modern-card">
          <h2 class="modern-title">Gallery Teaser</h2>
          <p class="modern-text"><?= htmlspecialchars($model_data['gallery_teaser']) ?></p>
       
        </div>
        <?php endif; ?>

        <?php if (!empty($model_data['signature_look'])): ?>
        <div class="content-card modern-card">
          <h2 class="modern-title">Signature Look</h2>
          <p class="modern-text"><?= htmlspecialchars($model_data['signature_look']) ?></p>
        </div>
        <?php endif; ?>
      </div>

      <!-- Book Your Experience Section -->
      <div class="book-experience-section">
        <div class="book-content">
          <h2 class="book-title">Book Your Experience</h2>
          <p class="book-text"><?= htmlspecialchars($model_data['booking_info'] ?? 'Contact us to book ' . $model_name . ' for your next event.') ?></p>
          <div class="book-buttons">
            <a href="<?= env('TELEGRAM_LINK') ?>" class="btn-primary">Book Now</a>
            <!-- <a href="#" class="btn-secondary">Call Now</a> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <style>
    /* Profile Card with Image */
    .model-profile-card {
      display: grid;
      grid-template-columns: 45% 55%;
      gap: 0;
      background: black;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 10px 40px rgba(255, 36, 145, 0.15);
      margin-bottom: 40px;
      min-height: 600px;
    }

    .profile-image-section {
      position: relative;
      overflow: hidden;
      background: linear-gradient(135deg, #ff2491, #ff6b9d);
    }

    .model-profile-img {
      background-color:black;
      width: 100%;
      height: 100%;
      /* object-fit: cover; */
      /* display: block; */
      /* transition: transform 0.5s ease; */
    }

    .profile-image-section:hover .model-profile-img {
      transform: scale(1.05);
    }

    .image-overlay {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
      padding: 30px 20px;
    }

    .overlay-text {
      color: white;
      font-size: 2rem;
      font-weight: 700;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
    }

    .profile-info-section {
      background: black;
      padding: 40px;
      display: flex;
      flex-direction: column;
      gap: 30px;
    }

    .profile-header {
      border-bottom: 3px solid #ff2491;
      padding-bottom: 15px;
    }

    .profile-name {
      font-size: 2.5rem;
      font-weight: 800;
      color: #ff2491;
      margin: 0 0 5px 0;
    }

    .profile-subtitle {
      font-size: 1.1rem;
      color: #666;
      font-weight: 500;
    }

    /* Stats Grid */
    .stats-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 15px;
    }

    .stat-box {
      display: flex;
      align-items: center;
      gap: 15px;
      padding: 20px;
      background: linear-gradient(135deg, #fff5fb, #fff);
      border: 2px solidrgb(0, 0, 0);
      border-radius: 12px;
      transition: all 0.3s ease;
    }

    /* .stat-box:hover {
      transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(255, 36, 145, 0.2);
      border-color: #ff2491;
    } */

    .stat-icon {
      font-size: 2rem;
    }

    .stat-content {
      flex: 1;
    }

    .stat-label {
      font-size: 0.9rem;
      color: #999;
      font-weight: 500;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    .stat-value {
      font-size: 1.3rem;
      color: #333;
      font-weight: 700;
      margin-top: 3px;
    }

    /* Highlights Section */
    .highlights-section {
      /* background: linear-gradient(135deg, #ff2491, #ff6b9d); */
      padding: 25px;
      border-radius: 15px;
    }

    .highlights-title {
      color: white;
      font-size: 1.3rem;
      font-weight: 700;
      margin: 0 0 15px 0;
    }

    .highlights-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
    }

    .highlight-tag {
      background: rgba(255, 255, 255, 0.25);
      backdrop-filter: blur(10px);
      color: white;
      padding: 8px 16px;
      border-radius: 20px;
      font-size: 0.95rem;
      font-weight: 500;
      border: 1px solid rgba(255, 255, 255, 0.3);
      transition: all 0.3s ease;
    }


    /* Modern Cards */
    .modern-card {
      /* background: black; */
      border-radius: 20px;
      padding: 40px;
      margin-bottom: 30px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.08);
      transition: all 0.3s ease;
    }

   

    .modern-title {
      font-size: 2rem;
      font-weight: 700;
      color: #ff2491;
      margin: 0 0 20px 0;
      position: relative;
      display: inline-block;
    }

    .modern-title::after {
      content: '';
      position: absolute;
      bottom: -5px;
      left: 0;
      width: 60px;
      height: 3px;
      background: linear-gradient(90deg, #ff2491, #ff6b9d);
      border-radius: 2px;
    }

    .modern-text {
      font-size: 1.1rem;
      line-height: 1.8;
      color: #555;
      margin: 0;
    }

    .vibe-card {
      /* background: linear-gradient(135deg, #fff5fb, #ffffff); */
      /* border: 2px solid #ffe0f0; */
    }

    /* Why Love Grid */
    .love-grid {
      display: grid;
      gap: 15px;
    }

    .love-item {
      display: flex;
      align-items: flex-start;
      gap: 15px;
      padding: 15px;
      background: #fff5fb;
      border-radius: 10px;
      border-left: 4px solid #ff2491;
      transition: all 0.3s ease;
    }

    /* .love-item:hover {
      background: #ffe0f0;
      transform: translateX(5px);
    } */

    .love-icon {
      font-size: 1.5rem;
      flex-shrink: 0;
    }

    .love-text {
      font-size: 1.05rem;
      color: #333;
      line-height: 1.6;
    }

    /* Best For Grid */
    .best-for-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    .best-for-card {
      background: linear-gradient(135deg, #fff5fb, #fff);
      padding: 25px;
      border-radius: 15px;
      text-align: center;
      border: 2px solid #ffe0f0;
      transition: all 0.3s ease;
    }

    /* .best-for-card:hover {
      background: linear-gradient(135deg, #ff2491, #ff6b9d);
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(255, 36, 145, 0.3);
    } */

    /* .best-for-card:hover .card-icon,
    .best-for-card:hover .card-text {
      color: white;
    } */

    .card-icon {
      font-size: 2.5rem;
      margin-bottom: 10px;
      transition: all 0.3s ease;
    }

    .card-text {
      font-size: 1.05rem;
      color: #333;
      font-weight: 500;
      transition: all 0.3s ease;
    }

    /* Two Column Section */
    .two-column-section {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
      gap: 30px;
    }

    /* Book Experience Section */
    .book-experience-section {
      background: linear-gradient(135deg, #ff2491, #ff6b9d);
      padding: 60px 40px;
      border-radius: 25px;
      text-align: center;
      box-shadow: 0 15px 40px rgba(255, 36, 145, 0.3);
      margin-top: 40px;
    }

    .book-content {
      max-width: 700px;
      margin: 0 auto;
    }

    .book-title {
      color: white;
      font-size: 2.5rem;
      font-weight: 800;
      margin: 0 0 20px 0;
    }

    .book-text {
      color: white;
      font-size: 1.2rem;
      line-height: 1.7;
      margin-bottom: 35px;
      opacity: 0.95;
    }

    .book-buttons {
      display: flex;
      gap: 20px;
      justify-content: center;
      flex-wrap: wrap;
    }

    .book-buttons .btn-primary,
    .book-buttons .btn-secondary {
      padding: 18px 40px;
      font-size: 1.15rem;
      font-weight: 700;
      text-decoration: none;
      border-radius: 50px;
      transition: all 0.3s ease;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    .book-buttons .btn-primary {
      background: white;
      color: #ff2491;
    }

    .book-buttons .btn-primary:hover {
      background: #f8f9fa;
      transform: translateY(-3px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .book-buttons .btn-secondary {
      background: transparent;
      color: white;
      border: 3px solid white;
    }

    .book-buttons .btn-secondary:hover {
      background: white;
      color: #ff2491;
      transform: translateY(-3px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    /* Responsive Design */
    @media (max-width: 968px) {
      .model-profile-card {
        grid-template-columns: 1fr;
      }

      .profile-image-section {
        min-height: 400px;
      }

      .stats-grid {
        grid-template-columns: repeat(2, 1fr);
      }

      .two-column-section {
        grid-template-columns: 1fr;
      }

      .best-for-grid {
        grid-template-columns: 1fr;
      }
    }

    @media (max-width: 600px) {
      .profile-info-section {
        padding: 25px;
      }

      .profile-name {
        font-size: 2rem;
      }

      .stats-grid {
        grid-template-columns: 1fr;
      }

      .modern-card {
        padding: 25px;
      }

      .book-buttons {
        flex-direction: column;
      }

     
    }
  </style>


</main>

<script>
// FAQ Accordion Functionality
function toggleAccordion(element) {
  // Close all other accordions
  const allAccordions = document.querySelectorAll('.accordion');
  const allPanels = document.querySelectorAll('.panel');
  
  allAccordions.forEach(acc => {
    if (acc !== element) {
      acc.classList.remove('active');
    }
  });
  
  allPanels.forEach(panel => {
    if (panel !== element.nextElementSibling) {
      panel.style.maxHeight = null;
    }
  });
  
  // Toggle current accordion
  element.classList.toggle('active');
  const panel = element.nextElementSibling;
  
  if (panel.style.maxHeight) {
    panel.style.maxHeight = null;
  } else {
    panel.style.maxHeight = panel.scrollHeight + "px";
  }
}

// Initialize accordion on page load
document.addEventListener('DOMContentLoaded', function() {
  // Set initial state for all panels
  const panels = document.querySelectorAll('.panel');
  panels.forEach(panel => {
    panel.style.maxHeight = null;
  });
  
  // Add smooth transitions
  const style = document.createElement('style');
  style.textContent = `
    .panel {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease-out;
      background-color: #f8f9fa;
      border-radius: 0 0 8px 8px;
    }
    
    .accordion {
      background-color: #fff;
      border: 1px solid #e9ecef;
      border-radius: 8px;
      margin-bottom: 10px;
      padding: 20px;
      text-align: left;
      cursor: pointer;
      transition: all 0.3s ease;
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
    }
    
    .accordion:hover {
      background-color: #f8f9fa;
      border-color: #ff2491;
    }
    
    .accordion.active {
      background-color: #ff2491;
      color: white;
      border-color: #ff2491;
    }
    
    .accordion h3 {
      margin: 0;
      font-size: 18px;
      font-weight: 600;
    }
    
    .panel p {
      margin: 0;
      padding: 20px;
      line-height: 1.6;
    }
    
    .faq-container {
      max-width: 800px;
      margin: 0 auto;
    }
    
    .faq-item {
      margin-bottom: 15px;
    }
  `;
  document.head.appendChild(style);
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      target.scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    }
  });
});
</script>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/footer.php';
?>