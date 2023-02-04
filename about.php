<?php 
$page_title = 'О компании';
$header_style = 'page-header-bg-grey';
include_once('header-page.php');?>
<section class="section company">
  <div class="container">
    <img src="img/company.jpg" alt="founder" class="company-photo">
    <div class="autohim-content-wrapper">
      <div class="company-content">
        <div class="seporator"></div>
        <h2 class="section-title autohim-title">мы - эксперты в области производства химии</h2>
        <p class="founder-text">
        Разнообразный и богатый опыт говорит нам, что перспективное планирование однозначно фиксирует необходимость поставленных обществом задач! Есть над чем задуматься: ключевые особенности структуры проекта могут быть объединены в целые кластеры себе подобных. Интерактивные прототипы, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут описаны максимально подробно. Значимость этих проблем настолько очевидна, что перспективное планирование играет важную роль в формировании системы массового участия.
        </p>
      </div>
    </div>
  </div>
</section>
<div class="slides">
  <div class="container">
    <?php include_once('./template-parts/swiperfirst-block.php');?>
  </div>
</div>
<section class="our-production">
  <div class="container">
    <div class="our-production-content-wrapper">
      <div class="autohim-content">
        <div class="seporator"></div>
        <h2 class="section-title autohim-title">Наше производство</h2>
        <img src="img/our-production.jpg" alt="our-production" class="our-production-photo">
        <p class="founder-text">
        Предварительные выводы неутешительны: разбавленное изрядной долей эмпатии, рациональное мышление обеспечивает широкому кругу (специалистов) участие в формировании глубокомысленных рассуждений. Но граница обучения кадров создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса кластеризации усилий.
        </p>
        <p class="founder-text">Реализация намеченных плановых заданий, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для соответствующих условий активизации. Предварительные выводы неутешительны: экономическая повестка сегодняшнего дня требует анализа анализа существующих паттернов поведения.</p>
        <ul class="clients-list our-production-list">
          <li class="clients-list-item">
            <svg width="30" height="30" class="clients-list-icon">
              <use href="img/sprite.svg#him"></use>
            </svg>
            Автомобильная химия
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="clients-list-icon">
              <use href="img/sprite.svg#car"></use>
            </svg>
            Бытовая химия
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="clients-list-icon">
              <use href="img/sprite.svg#eat"></use>
            </svg>
            Дезинфицирующие средства
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="clients-list-icon">
              <use href="img/sprite.svg#brush"></use>
            </svg>
            Пищевые аэрозоли
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="clients-list-icon">
              <use href="img/sprite.svg#cosmetic"></use>
            </svg>
            Косметическая продукция
          </li>
          <li class="clients-list-item">
            <svg width="30" height="30" class="clients-list-icon">
              <use href="img/sprite.svg#car-cosm"></use>
            </svg>
            Краски аэрозольные
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<div class="founder-box">
  <?php include_once('./template-parts/founder-block.php');?>
</div>
<div class="center-box">
  <?php include_once('./template-parts/center-block.php');?>
</div>
<div class="clients-box">
  <?php include_once('./template-parts/clients-block.php');?>
</div>
<?php include_once('request.php');?>
<?php include_once('footer.php');?>
