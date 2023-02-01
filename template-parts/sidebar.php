<div class="sticky top-16 left-0 p-8 bg-primary text-white flex flex-col gap-4">
  <h6 class="uppercase text-xl">Table of Contents</h6>
  <ul class="list-decimal flex flex-col gap-2">
    <?php
    $content = get_the_content();
    preg_match_all('/<h([1-6])>(.*?)<\/h[1-6]>/i', $content, $matches, PREG_SET_ORDER);
    foreach ($matches as $match) {
      $level = $match[1];
      $text = $match[2];
      $id = sanitize_title_with_dashes($text);
      echo '<li class="list-inside text-xl"><a href="#' . $id . '">' . $text . '</a></li>';
    }
    ?>
  </ul>
</div>