<?php    
// Include the translations array
include('translations.php');

// Detect the selected language (default to English)
$lang = isset($_GET['lang']) ? $_GET['lang'] : 'en';
if (!isset($translations[$lang])) {
    $lang = 'en'; 
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Psychology Services</title>
  <link rel="stylesheet" href="styles.css" />
</head>
<body>

  <!-- Language Selector -->
  <nav class="lang-selector">
    <a href="?lang=en"><?php echo $translations['en']['language']; ?></a>
    |
    <a href="?lang=es"><?php echo $translations['es']['language']; ?></a>
  </nav>
  
  <!-- Introduction Section -->
  <section class="introduction">
    <h1><?php echo $translations[$lang]['introTitle']; ?></h1>
    <p><?php echo $translations[$lang]['introParagraph']; ?></p>
  </section>

  <!-- Services Section -->
  <section class="services">
    <h2><?php echo $translations[$lang]['servicesTitle']; ?></h2>
    <ul>
      <li><?php echo $translations[$lang]['service1']; ?></li>
      <li><?php echo $translations[$lang]['service2']; ?></li>
      <li><?php echo $translations[$lang]['service3']; ?></li>
    </ul>
  </section>

  <!-- Plans or Prices Section -->
  <section class="plans">
    <h2><?php echo $translations[$lang]['plansTitle']; ?></h2>
    <ul>
      <li><?php echo $translations[$lang]['plan1']; ?></li>
      <li><?php echo $translations[$lang]['plan2']; ?></li>
      <li><?php echo $translations[$lang]['plan3']; ?></li>
    </ul>
  </section>

  <!-- Contact Section -->
  <section class="contact">
    <h2><?php echo $translations[$lang]['contactTitle']; ?></h2>
    <p><?php echo $translations[$lang]['contactDescription']; ?></p>
    <form action="#" method="POST">
      <label for="name"><?php echo $translations[$lang]['contactNameLabel']; ?></label>
      <input type="text" id="name" name="name" required />

      <label for="email"><?php echo $translations[$lang]['contactEmailLabel']; ?></label>
      <input type="email" id="email" name="email" required />

      <label for="message"><?php echo $translations[$lang]['contactMessageLabel']; ?></label>
      <textarea id="message" name="message" rows="4" required></textarea>

      <button type="submit"><?php echo $translations[$lang]['contactSendButton']; ?></button>
    </form>
  </section>

</body>
</html>
