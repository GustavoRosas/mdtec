<?php
header('Content-Type: text/html; charset=utf-8');

$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$basePath = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
$siteUrl = $scheme . '://' . $host . ($basePath ? $basePath : '');

$brand = 'MDTEC PG';
$city = 'Ponta Grossa - PR';
$specialistFull = 'MDTEC';
$specialistShort = 'MDTEC';

$whatsPhoneDisplay = '(42) 98861-7084';
$whatsPhoneDigitsBR = '5542988617084';
$whatsText = 'Olá! Quero um orçamento sem compromisso para otimização/upgrade. Pode me ajudar?';
$whatsLink = 'https://wa.me/' . $whatsPhoneDigitsBR . '?text=' . rawurlencode($whatsText);

$email = 'mdtecpg@outlook.com';
$addresses = 'Rua Quinze de Novembro, 308 e Rua Spix, 32 – Ponta Grossa - PR';
$hours = 'Seg-Sex 9h às 17h (com agendamento flexível)';

$instagramHandle = '@mdtecpg';
$instagramUrl = 'https://instagram.com/mdtecpg';
$facebookUrl = '#';

$logoUrl = $siteUrl . '/assets/mdtec.png';
$heroUrl = $siteUrl . '/assets/tech-repair.jpg';

require __DIR__ . '/partials/head.php';
require __DIR__ . '/partials/body.php';
