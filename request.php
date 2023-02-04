<section class="cta">
  <div class="bg-grey section-cta">
    <img src="img/cta.png" alt="call to action" class="cta-image" />
    <div class="cta-form-wrapper container">
      <form action="handler.php" method="POST" class="cta-form">
        <h2 class="cta-form-title">Хотите сотрудничать?</h2>
        <p class="cta-form-text">
          Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время
          ответит на все интересующие вопросы и поможем даже в самых сложных
          случаях!
        </p>
        <div class="input-group-wrapper">
          <div class="input-group">
            <input
              id="user-name"
              type="text"
              class="input"
              name="username"
              placeholder=" "
              maxlength="100"
              required
            />
            <label class="input-group-label" for="user-name">Имя</label>
          </div>
          <div class="input-group">
            <input 
              id="user-tel" 
              type="tel" 
              class="input phone-mask" 
              name="usertel" 
              placeholder=" " 
              maxlength="30"
              required
            />
            <label class="input-group-label" for="user-tel"
              >Номер телефона</label
            >
          </div>
        </div>
        <div class="cta-form-footer">
          <button type="submit" class="button cta-form-button">
            Отправить заявку
          </button>
          <div class="notify">
            <svg class="notify-icon" width="14" height="14">
              <use href="img/sprite.svg#shield"></use>
            </svg>
            <p class="notify-text">
              Обращаясь к нам вы получаете не только профессиональную
              работу, но и абсолютную конфиденциальность информации!
            </p>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>