<?php include 'header.php' ?>
    <main class="main">
        
        <section class="contacts">
            <div class="container">
                <div class="section-title">
                    <h3>Контакты</h3>
                </div>
                <div class="contacts-wrap">
                    <div class="contacts-text">
                        <div class="address">
                            <p><span>Адрес:</span> <br> Адрес: г. Москва, ул. Название улицы 10, офис 11</p>
                        </div>
                        <div class="phone">
                            <p><span>Телефон:</span> <br> +7 (123) 456 78 90</p>
                        </div>
                        <div class="email">
                            <p><span>E-mail:</span> <br> info@astra-medica.ru</p>
                        </div>
                        <div class="working-schedule">
                            <p>
                                <span>Режим работы:</span> <br>
                                Понедельник - Пятница: 09:00 до 19:00 <br>
                                Суббота - Воскресенье - выходные</p>
                        </div>
                    </div>
                    <div class="contacts-map">
                        <iframe
                            src="https://yandex.ru/map-widget/v1/?um=constructor%3A40aeaca183a7fece28acebb2ddf3fa100e81751581311ef3fd72a5d842588aa0&amp;source=constructor"
                            width="800" height="400" frameborder="0">
                        </iframe>
                    </div>
                </div>
            </div>
        </section>

        <section class="consultation">
            <div class="container">
                <div class="section-title">
                    <h3>Нужна консультация?</h3>
                    <p>Оставьте Ваши даннные и мы свяжемся с Вами
                        в ближайшее время</p>
                </div>
                <div class="consultation-form">
                    <form>
                        <input type="text" placeholder="Введите ваше имя">
                        <input type="text" placeholder="Введите ваш телефон">
                        <input type="text" placeholder="Введите вашу почту">
                        <button class="form-button header-button">Заказать консультацию</button>
                    </form>
                </div>
                
            </div>
        </section>


    </main>
<?php include 'footer.php' ?>