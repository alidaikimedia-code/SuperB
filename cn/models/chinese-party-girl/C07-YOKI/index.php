<?php
$meta_title = 'C07 YOKI | 超级派对女孩中国 172cm 32B 温柔声音的学生';
$meta_description = 'YOKI，22岁，来自中国。身高172厘米，体重54公斤，32磅。甜美的学生气质，柔和的声音和迷人的微笑。浪漫、活力、性感，适合派对和演出。';
$model_name = 'C07 YOKI';
$model_details = [
    'age' => '22岁',
    'height' => '身高172厘米',
    'weight' => '体重54公斤',
    'bust' => '胸围32B',
    'origin' => '原产地：中国',
    'tags' => '标签 学生活力、柔和的声音、迷人的微笑'
];
$model_description = [
    'intro' => 'Yoki身材高挑，甜美动人，宛如一首清新的情歌。她散发着柔和的学生气质，让人瞬间放松。她的声音温柔而平静。她的笑容阳光灿烂，略带一丝俏皮。当她笑起来时，整个房间都变得轻松愉悦。她是一位浪漫的超级派对女孩，能将平凡的瞬间化作美好的回忆。',
    'first_impression' => '你首先注意到的是她的身高。长长的队伍，轻松的姿态，流畅的步伐。然后，她那双眼睛吸引了你。明亮、善良、温暖。她向你打招呼，语气轻柔，仿佛在耳边低语。你立刻感到一阵温柔的牵动。平静中又带着兴奋。',
    'voice' => 'Yoki说话的语气轻松惬意，就像一个拥抱。简短的句子，清晰的表达，中间夹杂着一丝笑意。当面听着，让人心旷神怡。镜头前，更是让人欲罢不能。几句甜言蜜语，让人不假思索地倾身靠近。',
    'smile' => '她的笑容起初浅浅，后来渐渐绽放。牙齿微微露出，脸颊微微上扬，眼神闪烁。魅力十足。Yoki的微笑改变了整桌人的心情。陌生人变成了朋友。视频被收藏和分享。',
    'connection' => 'Yoki浪漫又俏皮，散发着干净、积极的光芒。她会认真倾听，并以最温柔的方式与对方保持眼神交流。轻轻点头，缓缓眨眼，那种感觉既撩人又真实。她不需要大动作，而是用她沉静的自信来表达。',
    'details' => [
        '修长优雅的颈部和精致的领口线条',
        '当她转身时，柔滑的黑发衬托着她的脸庞',
        '流畅的32B曲线，纤细的腰身',
        '脸颊上自然的腮红，近距离拍摄时看起来梦幻般',
        '有点害羞，然后是令人心融化的欢笑'
    ],
    'moments' => [
        '咖啡馆约会场景，甜蜜的谈话和害羞的一口酒变成了灿烂的微笑',
        '夜晚的城市漫步，她与人目光接触，然后回头俏皮地眨眼',
        '影片开头是柔和的声音，然后是缓慢的旋转和甜美的头部倾斜',
        '窗光肖像，时间感觉缓慢而浪漫'
    ],
    'perfect_for' => [
        '想要温柔浪漫、真正有吸引力的 VIP 派对',
        '需要柔和声音和迷人微笑的直播和短片',
        '发射之夜，温暖的化学反应比噪音更重要',
        '充满优雅、俏皮气息的生活方式和美容内容'
    ],
    'booking' => '如果您想拥有高挑优雅的身材，并兼具温柔的气质，那就选择Yoki吧。她带来浪漫、魅力和令人难忘的轻松光芒。请联系超级派对女孩团队，我们将为您安排日期和媒体计划，打造完美的夜晚。'
];
require_once '../../../../header.php';
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $meta_title; ?></title>
    <meta name="description" content="<?php echo $meta_description; ?>">
    <!-- Add other meta tags and stylesheets -->
    <link rel="stylesheet" href="../../../../assets/css/style.css">
</head>
<body>
    <div class="container">
        <h1><?php echo $model_name; ?></h1>
        <div class="model-details">
            <?php foreach ($model_details as $key => $value): ?>
                <p><strong><?php echo ucfirst($key); ?>:</strong> <?php echo $value; ?></p>
            <?php endforeach; ?>
        </div>
        <div class="model-description">
            <h2>简介</h2>
            <p><?php echo $model_description['intro']; ?></p>
            <h2>初见</h2>
            <p><?php echo $model_description['first_impression']; ?></p>
            <h2>拥抱的声音</h2>
            <p><?php echo $model_description['voice']; ?></p>
            <h2>微笑效应</h2>
            <p><?php echo $model_description['smile']; ?></p>
            <h2>共鸣与化学反应</h2>
            <p><?php echo $model_description['connection']; ?></p>
            <h2>你会为之倾倒的微小细节</h2>
            <ul>
                <?php foreach ($model_description['details'] as $detail): ?>
                    <li><?php echo $detail; ?></li>
                <?php endforeach; ?>
            </ul>
            <h2>想象中的神奇时刻</h2>
            <ul>
                <?php foreach ($model_description['moments'] as $moment): ?>
                    <li><?php echo $moment; ?></li>
                <?php endforeach; ?>
            </ul>
            <h2>完美适合</h2>
            <ul>
                <?php foreach ($model_description['perfect_for'] as $fit): ?>
                    <li><?php echo $fit; ?></li>
                <?php endforeach; ?>
            </ul>
            <h2>预订 Yoki</h2>
            <p><?php echo $model_description['booking']; ?></p>
        </div>
    </div>
    <?php require_once '../../../../footer.php'; ?>
</body>
</html>
