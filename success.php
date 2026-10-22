<?php

declare(strict_types=1);

$status = (string) ($_GET['status'] ?? '');

if ($status !== 'sent') {
    header('Location: index.php#contact');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Email Sent Successfully</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body class="success-page">
  <main class="success-card">
    <div class="success-icon" aria-hidden="true">✓</div>
    <p class="eyebrow">Message delivered</p>
    <h1>Email sent successfully!</h1>
    <p>Your message has been sent. I’ll be in touch soon.</p>
    <a class="btn primary" href="index.php#contact">Return to contact</a>
  </main>
</body>
</html>
