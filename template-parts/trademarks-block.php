  <section class="section trade">
    <div class="container">
      <?php
      if (!empty($block_title)) {
        echo '<div class="seporator"></div>';
        echo '<h2 class="section-mark-title">'. $block_title .'</h2>';
        echo '<h2 class="section-title-text">'. $block_title_text .'</h2>'; 
      }
      ?>
      <div class="marks">
        <a href="#" class="mark">
          <svg class="mark-image">
            <use href="img/sprite.svg#ag-image"></use>
          </svg>
          <h3 class="mark-title">Автохимия AG-Tech</h3>
          <p class="mark-text">
            Для современного мира разбавленное изрядной долей эмпатии,
            рациональное мышление создаёт предпосылки для поставленных
            обществом задач.
          </p>
        </a>
        <a href="#" class="mark">
          <svg class="mark-image">
            <use href="img/sprite.svg#ap-image"></use>
          </svg>
          <h3 class="mark-title">Автохимия AP</h3>
          <p class="mark-text">
            Для современного мира разбавленное изрядной долей эмпатии,
            рациональное мышление создаёт предпосылки для поставленных
            обществом задач.
          </p>
        </a>
      </div>
    </div>
  </section>