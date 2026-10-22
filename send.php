<?php

declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php#contact');
    exit;
}

$name = trim((string) ($_POST['name'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$message = trim((string) ($_POST['message'] ?? ''));

if ($name === '' || !filter_var($email, FILTER_VALIDATE_EMAIL) || $message === '') {
    header('Location: index.php?status=invalid#contact');
    exit;
}

$recipientEmail = getenv('CONTACT_RECIPIENT') ?: 'ejayandante26@gmail.com';
$subject = 'Portfolio inquiry from ' . $name;
$body = "Name: {$name}\nEmail: {$email}\n\n{$message}";
$composeUrl = 'https://mail.google.com/mail/?' . http_build_query([
    'view' => 'cm',
    'fs' => '1',
    'to' => $recipientEmail,
    'su' => $subject,
    'body' => $body,
], '', '&', PHP_QUERY_RFC3986);

header('Location: ' . $composeUrl, true, 303);
exit;