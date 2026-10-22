<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <title><?= htmlspecialchars($name) ?> — Software Developer</title>
  <link rel="icon" type="image/svg+xml" href="favicon.svg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <header class="site-header">
    <nav class="wrap nav">
      <a href="#top" class="brand"><?= htmlspecialchars($name) ?></a>
      <div class="nav-links">
        <a href="#about">About</a>
        <a href="#stack">Stack</a>
        <a href="#work">Work</a>
        <a href="#contact">Contact</a>
        <a href="resume.html" download="Ejay-Andante-Resume.html">Resume</a>
      </div>
    </nav>
  </header>

  <main id="top">
    <section class="hero wrap">
      <p class="eyebrow">Available for product work</p>
      <h1><?= htmlspecialchars($title) ?></h1>
      <p class="lede"><?= htmlspecialchars($lede) ?></p>
      <div class="cta-row">
        <a class="btn primary" href="#work">See my work</a>
        <a class="btn secondary" href="#contact">Get in touch</a>
        <a class="btn secondary" href="resume.html" download="Ejay-Andante-Resume.html">Download my resume</a>
      </div>
    </section>

    <section id="about" class="wrap section-block">
      <div class="section-label">About</div>
      <h2>Pragmatic about tools, stubborn about quality.</h2>

      <div class="about-copy">
        <?php foreach ($about as $para): ?>
          <p><?= $para ?></p>
        <?php endforeach; ?>
      </div>

      <div class="traits">
        <?php foreach ($traits as [$traitTitle, $traitDesc]): ?>
          <article class="trait">
            <h3><?= htmlspecialchars($traitTitle) ?></h3>
            <p><?= htmlspecialchars($traitDesc) ?></p>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section id="stack" class="wrap section-block">
      <div class="section-label">Stack</div>
      <h2>Tools I reach for.</h2>

      <?php foreach ($stack as $category => $items): ?>
        <div class="stack-row">
          <div class="stack-cat"><?= htmlspecialchars($category) ?></div>
          <div class="stack-items"><?= htmlspecialchars(implode(', ', $items)) ?></div>
        </div>
      <?php endforeach; ?>
    </section>

    <section id="work" class="wrap section-block">
      <div class="section-label">Selected work</div>
      <h2>A few things I’ve built.</h2>

      <div class="projects">
        <?php foreach ($projects as $project): ?>
          <article class="project">
            <div class="project-head">
              <h3><?= htmlspecialchars($project['name']) ?></h3>
              <div class="project-links">
                <a href="<?= htmlspecialchars($project['source']) ?>">Source</a>
                <a href="<?= htmlspecialchars($project['live']) ?>">Live</a>
              </div>
            </div>
            <p><?= htmlspecialchars($project['desc']) ?></p>
            <div class="project-tags"><?= htmlspecialchars(implode(' · ', $project['tags'])) ?></div>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section id="contact" class="wrap section-block contact-section">
      <div class="section-label">Contact</div>
      <h2>Let’s work together.</h2>

      <form id="contactForm" class="contact-form" action="send.php" method="post">
        <div class="field-group">
          <label for="name">Your name</label>
          <input id="name" name="name" type="text" aria-label="Your name" required>
        </div>

        <div class="field-group">
          <label for="email">Email address</label>
          <input id="email" name="email" type="email" aria-label="Email address" required>
        </div>

        <div class="field-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" rows="6" placeholder="Tell me a little about your idea" aria-label="Message" required></textarea>
        </div>

        <button type="submit" class="btn send-btn">
          <span>Send message</span>
          <span aria-hidden="true">→</span>
        </button>

        <div class="contact-links" aria-label="Quick contact links">
          <a href="<?= htmlspecialchars($github, ENT_QUOTES, 'UTF-8') ?>" target="_blank" rel="noreferrer">GitHub</a>
          <a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=<?= rawurlencode($email) ?>&amp;su=Portfolio%20inquiry">Email</a>
        </div>
      </form>
    </section>
  </main>

  <footer class="wrap footer">
    <p>© <?= htmlspecialchars($year) ?> <?= htmlspecialchars($name) ?></p>
    <p>Built with care</p>
  </footer>
</body>
</html>
