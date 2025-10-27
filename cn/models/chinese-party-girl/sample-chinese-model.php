<?php
// 示例中国模特页面
// 展示如何使用 china-single-model-template.php

// 设置页面键值，用于从语言文件中获取数据
$page_key = 'sample_chinese_model';

// 包含语言文件
include $_SERVER['DOCUMENT_ROOT'] . '/lang/zh-my.php';

// 设置模特数据
$texts[$page_key] = [
    'name' => '小雅',
    'title' => '中国超级派对女孩',
    'description' => '来自中国的迷人模特，拥有优雅的气质和迷人的魅力。',
    'image' => '/modelsimages/model4.webp',
    'height' => '165cm',
    'age' => '22岁',
    'weight' => '48kg',
    'bust' => 'B罩杯',
    'highlights' => [
        '优雅气质',
        '迷人微笑',
        '温柔体贴',
        '活泼开朗'
    ],
    'first_impression' => '当你第一次见到小雅时，你会被她那甜美的笑容和优雅的举止所吸引。她的每一个动作都散发着独特的魅力。',
    'energy_you_feel' => '小雅拥有一种特殊的能量，能够让你感到轻松愉快。她的存在让整个房间都充满了活力和温暖。',
    'content' => '小雅是一位来自中国的美丽模特，她不仅拥有出色的外表，更有着温柔善良的内心。她热爱生活，喜欢与人交流，总是能够带给身边的人快乐和正能量。',
    'vibe' => '小雅有着独特的个人魅力，她既温柔又活泼，既优雅又可爱。与她在一起，你会感受到一种特别的舒适感和愉悦感。',
    'best_for' => [
        '浪漫约会',
        '商务晚宴',
        '私人派对',
        '城市观光'
    ],
    'booking_info' => '联系我们的客服团队，预订小雅为您下次活动提供陪伴服务。'
];

// 包含模板文件
include $_SERVER['DOCUMENT_ROOT'] . '/cn/models/china-single-model-template.php';
?>
