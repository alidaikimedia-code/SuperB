<?php
// 中国模特单页模板 - 类似 city-template.php
// 此模板将用于所有中国模特页面

include $_SERVER['DOCUMENT_ROOT'] . '/cn/header.php';

// 从 texts 数组获取模特数据，使用 page_key（由调用文件设置）
$model_data = $texts[$page_key] ?? null;

if (!$model_data) {
    echo "模特未找到！";
    exit;
}

// 获取模特姓名和标题
$model_name = $model_data['name'] ?? '模特';
$model_title = $model_data['title'] ?? $model_name;
?>

<link rel="stylesheet" href="/assets/css/cities.css">
<link rel="stylesheet" href="/assets/css/index.css">

<!-- 英雄区域 -->
<div class="city-hero" style="background-image: url('<?= htmlspecialchars($model_data['image'] ?? '/modelsimages/model4.webp') ?>');">
  <div class="city-hero-content">
    <h1><?= htmlspecialchars($model_name) ?> - Super Party Girl</h1>
    <p><?= htmlspecialchars($model_data['description'] ?? '') ?></p>
   
  </div>
</div>

<main>
  <!-- 模特信息区域 -->
  <section id="model-info" class="city-content-section">
    <div class="content-wrapper">
      <!-- 带图片的模特档案卡片 -->
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
            <div class="profile-subtitle">超级派对女孩</div>
          </div>

          <!-- 模特统计网格 -->
          <div class="stats-grid">
            <div class="stat-box">
              <div class="stat-icon"></div>
              <div class="stat-content">
                <div class="stat-label">身高</div>
                <div class="stat-value"><?= htmlspecialchars($model_data['height'] ?? '') ?></div>
              </div>
            </div>
            <div class="stat-box">
              <div class="stat-icon"></div>
              <div class="stat-content">
                <div class="stat-label">年龄</div>
                <div class="stat-value"><?= htmlspecialchars($model_data['age'] ?? '') ?></div>
              </div>
            </div>
            <div class="stat-box">
              <div class="stat-icon"></div>
              <div class="stat-content">
                <div class="stat-label">体重</div>
                <div class="stat-value"><?= htmlspecialchars($model_data['weight'] ?? '') ?></div>
              </div>
            </div>
            <div class="stat-box">
              <div class="stat-icon"></div>
              <div class="stat-content">
                <div class="stat-label">胸围</div>
                <div class="stat-value"><?= htmlspecialchars($model_data['bust'] ?? '') ?></div>
              </div>
            </div>
          </div>

          <!-- 快速亮点 -->
          <?php if (!empty($model_data['highlights'])): ?>
          <div class="highlights-section">
            <h3 class="highlights-title"><?= htmlspecialchars($model_data['heroTitle'] ?? '快速亮点') ?></h3>
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
        <h2 class="modern-title"><?= htmlspecialchars($model_data['heroTitle'] ?? '第一印象') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['first_impression']) ?></p>
      </div>
      <?php endif; ?>
      

      <?php if (!empty($model_data['energy_you_feel'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Glow_Ease'] ?? '你感受到的能量') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['energy_you_feel']) ?></p>
      </div>
      <?php endif; ?>  

      <?php if (!empty($model_data['Sweet_Fire'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Sweet_Fire'] ?? '甜蜜之火') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['mood_and_chemistry']) ?></p>
      </div>
      <?php endif; ?>  



      <?php if (!empty($model_data['Laugh_And_Flirt'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Laugh_And_Flirt'] ?? '笑声与调情') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['laugh_and_flirt']) ?></p>
      </div>
      <?php endif; ?>  




      <?php if (!empty($model_data['Warm_Extrovert'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Warm_Extrovert'] ?? '温暖外向') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['mood_and_chemistry']) ?></p>
      </div>
      <?php endif; ?>  


      
      <?php if (!empty($model_data['Tiny_Waist'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Tiny_Waist'] ?? '纤细腰肢') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['mood_and_chemistry']) ?></p>
      </div>
      <?php endif; ?>  



      <?php if (!empty($model_data['Gentle_Sounds'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Gentle Sounds'] ?? '温柔声音') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['mood_and_chemistry']) ?></p>
      </div>
      <?php endif; ?>


      <?php if (!empty($model_data['Melt_Point'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Melt Point'] ?? '融化点') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['Melt_Point']) ?></p>
      </div>
      <?php endif; ?>

      <?php if (!empty($model_data['Sweet_Heat'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Sweet Heat'] ?? '甜蜜热度') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['Sweet_Heat']) ?></p>
      </div>
      <?php endif; ?>  



      <?php if (!empty($model_data['Hold_Soft'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Hold_Sof'] ?? '温柔拥抱') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['Hold_Soft']) ?></p>
      </div>
      <?php endif; ?>  



      <?php if (!empty($model_data['Slow_Motio'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Slow_Motio'] ?? '慢动作曲线') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['Slow_Motion']) ?></p>
      </div>
      <?php endif; ?>  


      
      <?php if (!empty($model_data['Honey_Talk'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Honey Talk'] ?? '甜言蜜语') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['Honey_Talk']) ?></p>
      </div>
      <?php endif; ?>  



      <?php if (!empty($model_data['Wild_Heart '])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Wild Heart Switch '] ?? '狂野之心开关') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['Wild_Heart ']) ?></p>
      </div>
      <?php endif; ?> 

      <?php if (!empty($model_data['Dance_Glow'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Dance Glow'] ?? '舞蹈光芒') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['Dance_Glow']) ?></p>
      </div>
      <?php endif; ?>  


      <?php if (!empty($model_data['CurvesLinger'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Curves That Linger
'] ?? '令人难忘的曲线
') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['CurvesLinger']) ?></p>
      </div>
      <?php endif; ?> 


      
      <?php if (!empty($model_data['Petite_Fire'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Petite Fire'] ?? '娇小火焰') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['Petite_Fire']) ?></p>
      </div>
      <?php endif; ?> 

      <?php if (!empty($model_data['Curves_Motion'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Curves In Motion'] ?? '动态曲线') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['Curves_Motion']) ?></p>
      </div>
      <?php endif; ?>
      
      
      <?php if (!empty($model_data['Stay_Close'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Stay_Clos'] ?? '保持亲密') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['Stay_Close']) ?></p>
      </div>
      <?php endif; ?> 

      <?php if (!empty($model_data['Flirt-Play'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Flirt Play'] ?? '调情游戏') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['Flirt-Play']) ?></p>
      </div>
      <?php endif; ?>


      <?php if (!empty($model_data['energy'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['The Laugh That Wins'] ?? '胜利的笑声') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['energy']) ?></p>
      </div>
      <?php endif; ?>
      

      <?php if (!empty($model_data['kol_glow'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['KOL Glow'] ?? '网红光芒') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['kol_glow']) ?></p>
      </div>
      <?php endif; ?>


      <?php if (!empty($model_data['ocean_energy'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['hero'] ?? '海洋能量') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['ocean_energy']) ?></p>
      </div>
      <?php endif; ?>
      <?php if (!empty($model_data['calm_magic'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['calm'] ?? '平静魔法') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['calm_magic']) ?></p>
      </div>
      <?php endif; ?>

      


      <?php if (!empty($model_data['play_mood'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['play'] ?? '游戏心情') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['play_mood']) ?></p>
      </div>
      <?php endif; ?>

      


      <?php if (!empty($model_data['playful_edge'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['playful'] ?? '顽皮边缘') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['playful_edge']) ?></p>
      </div>
      <?php endif; ?>

      <?php if (!empty($model_data['little_sister_charm'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Little Sister Charm'] ?? '小妹妹魅力') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['little_sister_charm']) ?></p>
      </div>
      <?php endif; ?>
      

      


      <?php if (!empty($model_data['close_and_cozy'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['cozy'] ?? '亲密温馨') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['close_and_cozy']) ?></p>
      </div>
      <?php endif; ?>

    

    


      

      <?php
      if (!empty($model_data['voice_style'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title">她的声音</h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['voice_style']) ?></p>
      </div>
      <?php endif; ?>

      <?php
      if (!empty($model_data['eye_contact'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title">她的眼神</h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['eye_contact']) ?></p>
      </div>
      <?php endif; ?>

      <?php
      if (!empty($model_data['smile_effect'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title">微笑效应</h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['smile_effect']) ?></p>
      </div>
      <?php endif; ?>


      <?php
      if (!empty($model_data['vibe'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title">氛围与化学反应</h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['vibe']) ?></p>
      </div>
      <?php endif; ?>

      <!-- 关于区域 -->
      <div class="content-card modern-card">
        <h2 class="modern-title">关于 <?= htmlspecialchars($model_name) ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['content'] ?? '') ?></p>
      </div>

      <!-- 她的氛围 -->
      <?php if (!empty($model_data['vibe'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title">她的氛围</h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['vibe']) ?></p>
      </div>
      <?php endif; ?>

      <?php if (!empty($model_data['voice_and_presence'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title">声音与存在感</h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['voice_and_presence']) ?></p>
      </div>
      <?php endif; ?>


      <?php if (!empty($model_data['sweet_details'])): ?>
      <div class="content-card modern-card">
        <h2 class="modern-title">
       <?= htmlspecialchars($model_data['Little_Keepsakes'] ?? '让你着迷的小细节') ?>


       

        

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
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Frost to sun'] ?? '霜到阳光') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['Frost_To_Sun']) ?></p>
      </div>
      <?php endif; ?>


      <?php if (!empty($model_data['uncontrolled_vibes'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['uncontrolled'] ?? '失控的氛围') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['uncontrolled_vibes']) ?></p>
      </div>
      <?php endif; ?>


      <?php if (!empty($model_data['close_up_moments'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['close up moments'] ?? '特写时刻') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['close_up_moments']) ?></p>
      </div>
      <?php endif; ?>
       


      <?php if (!empty($model_data['close'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Energy You Feel'] ?? '你感受到的能量') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['close']) ?></p>
      </div>
      <?php endif; ?>
      



      <!-- 为什么人们爱她 -->
      <?php if (!empty($model_data['why_love'])): ?>
  <div class="content-card modern-card why-love-card">
    <h2 class="modern-title">让她令人难忘的原因</h2>
    <p class="modern-text"><?= htmlspecialchars(implode(' ', $model_data['why_love'])) ?></p>
  </div>
<?php endif; ?>

      <?php if (!empty($model_data['moments_to_imagine'])): ?>
      <div class="content-card modern-card">
        <h2 class="modern-title">
        <?= htmlspecialchars($model_data['Picture_This'] ?? '令人心动的场景') ?>
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
        <?= htmlspecialchars($model_data['moments'] ?? '值得想象的时刻') ?>
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
        <h2 class="modern-title">舞蹈火花</h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['dance_spark']) ?></p>
      </div>
      <?php endif; ?>

      <?php
      if (!empty($model_data['vibe'])): ?>
      <div class="content-card modern-card">
        <h2 class="modern-title">她的氛围</h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['vibe']) ?></p>
      </div>
      <?php endif; ?>

      <!-- 最适合 -->
      <?php if (!empty($model_data['best_for'])): ?>
      <div class="content-card modern-card">
        <h2 class="modern-title">
        <?= htmlspecialchars($model_data['Best_For'] ?? '她闪耀的地方') ?>
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
        <h2 class="modern-title"><?= htmlspecialchars($model_data['Mood And Chemistry'] ?? '心情与化学反应') ?></h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['Mood_chemistry']) ?></p>
      </div>
      <?php endif; ?>

      <?php if (!empty($model_data['photo_and_video_ideas'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title">照片和视频创意</h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['photo_and_video_ideas']) ?></p>
      </div>
      <?php endif; ?>

      <?php if (!empty($model_data['styling_and_wardrobe'])): ?>
      <div class="content-card modern-card vibe-card">
        <h2 class="modern-title">造型与衣橱</h2>
        <p class="modern-text"><?= htmlspecialchars($model_data['styling_and_wardrobe']) ?></p>
      </div>
      <?php endif; ?>

      <?php if (!empty($model_data['social_caption_starters'])): ?>
      <div class="content-card modern-card">
        <h2 class="modern-title">社交媒体文案创意</h2>
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

      <!-- 风格笔记和画廊 -->
      <div class="two-column-section">
        <?php if (!empty($model_data['style_notes'])): ?>
        <div class="content-card modern-card">
          <h2 class="modern-title">风格笔记</h2>
          <p class="modern-text"><?= htmlspecialchars($model_data['style_notes']) ?></p>
        </div>
        <?php endif; ?>

        <!-- 照片和视频创意 -->
        <?php if (!empty($model_data['social_caption_starters'])): ?>
      <div class="content-card modern-card">
        <h2 class="modern-title">社交媒体文案开头</h2>
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
          <h2 class="modern-title">画廊预告</h2>
          <p class="modern-text"><?= htmlspecialchars($model_data['gallery_teaser']) ?></p>
       
        </div>
        <?php endif; ?>

        <?php if (!empty($model_data['signature_look'])): ?>
        <div class="content-card modern-card">
          <h2 class="modern-title">标志性造型</h2>
          <p class="modern-text"><?= htmlspecialchars($model_data['signature_look']) ?></p>
        </div>
        <?php endif; ?>
      </div>

      <!-- 预订您的体验区域 -->
      <div class="book-experience-section">
        <div class="book-content">
          <h2 class="book-title">预订您的体验</h2>
          <p class="book-text"><?= htmlspecialchars($model_data['booking_info'] ?? '联系我们预订 ' . $model_name . ' 为您下次活动。') ?></p>
          <div class="book-buttons">
            <a href="https://t.me/SuperBbaby" class="btn-primary">立即预订</a>
            <a href="tel:+60123456789" class="btn-secondary">立即致电</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <style>
    /* 带图片的档案卡片 */
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

    /* 统计网格 */
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

    /* 亮点区域 */
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


    /* 现代卡片 */
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

    /* 为什么爱网格 */
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

    /* 最适合网格 */
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

    /* 两列区域 */
    .two-column-section {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
      gap: 30px;
    }

    /* 预订体验区域 */
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

    /* 响应式设计 */
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
// FAQ 手风琴功能
function toggleAccordion(element) {
  // 关闭所有其他手风琴
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
  
  // 切换当前手风琴
  element.classList.toggle('active');
  const panel = element.nextElementSibling;
  
  if (panel.style.maxHeight) {
    panel.style.maxHeight = null;
  } else {
    panel.style.maxHeight = panel.scrollHeight + "px";
  }
}

// 页面加载时初始化手风琴
document.addEventListener('DOMContentLoaded', function() {
  // 设置所有面板的初始状态
  const panels = document.querySelectorAll('.panel');
  panels.forEach(panel => {
    panel.style.maxHeight = null;
  });
  
  // 添加平滑过渡
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

// 锚链接的平滑滚动
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
include $_SERVER['DOCUMENT_ROOT'] . '/cn/footer.php';
?>
