<?php
require_once "mysql/connect.php";
require_once "mysql/functions.php";  
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <title>Berkut - Ножевая мастерская</title>
    <link rel="shortcut icon" href="images/Logo_Blue.svg" type="image/x-icon" />
    <link rel="stylesheet" href="css/bootstrap-grid.min.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src="/js/script.jquery"></script>
  </head>

  <body>
    <header class="header">
      <div class="container">
        <div class="navbar">
          <div class="row">
            <div style="width: 220px; height: 100px" class="btn gen">
              <div>Главная</div>
            </div>
            <div style="width: 220px; height: 100px" class="btn about">
              <div>О нас</div>
            </div>
            <div style="width: 100px; height: 100px" class="navbar-logo">
              <img
                src="images/Logo_Blue.svg"
                style="width: 100px; height: 100px"
                alt="Logo"
              />
            </div>
            <div style="width: 220px; height: 100px" class="btn dam">
              <div>Доставка и оплата</div>
            </div>
            <div style="width: 220px; height: 100px" class="btn cont">
              <div>Контакты</div>
            </div>
          </div>
        </div>
        <section class="line">
          <div style="width: 220px; height: 68px" class="lable-text">
            <h1>Ножевая мастерская</h1>
            <h2>+8 (888) 123-12-21</h2>
          </div>
          <a href="#" class="lable-button">Заказать звонок</a>
        </section>
        <div class="BG">
          <div class="lable-BG">
            <img src="images/Lable.svg" alt="Lable" width="100%" />
          </div>
        </div>
        <div style="width: 100%" class="catalog-button">
          <a href="#" class="cat-button"
            >Каталог
            <div class="arrow">
              <img src="images/Arrow.svg" alt="Arrow" />
            </div>
          </a>
        </div>
      </div>
    </header>
    <section class="catalog">
      <div class="container">
        <div class="catalog-content">
          <div class="catalog-category">
            <div class="category-lable">Категории</div>
            <div class="category-line"></div>
            <div class="categories">
              <div class="category-item">Ножи из булатной стали</div>
              <div class="category-item">Ножи из стали Х12МФ</div>
              <div class="category-item">Ножи из стали 9хс</div>
              <div class="category-item">Ножи из алмазной стали</div>
              <div class="category-item">Ножи из стали 95x18</div>
              <div class="category-item">Ножи из дамасской стали</div>
              <div class="category-item">Ножи из стали D2</div>
              <div class="category-item">Кортики</div>
              <div class="category-item">Ножи из стали У8</div>
              <div class="category-item">Ножи, Часы, Картины</div>
              <div class="category-item">Шкатулки для ножей</div>
              <div class="category-item">Ягдташи, Патронташи, Ремни</div>
            </div>
          </div>
          <div class="catalog-content--wrapper">
            <div class="block_top">
              <div class="search">
                <form>
                  <input type="text" placeholder="Поиск" />
                  <div class="sorting">
                    Сортировать по
                    <select name="sort" class="sort-select">
                      <option value="low" class="sort-sub">Меньшей цене</option>
                      <option value="high" class="sort-sub">
                        Большей цене
                      </option>
                      <option value="pop" class="sort-sub">Популярности</option>
                      <option value="new" class="sort-sub">Новизне</option>
                    </select>
                  </div>
                </form>
              </div>
            </div>

            <div class="catalog-items">
              <div class="product-item">
                <img src="/images/knife_card.png" />
                <div id="products">
                  </div>
              </div>
              <div class="product-item">
                <img src="/images/knife_card.png" />
                <div class="product-list">
                  <h3>Опричник</h3>
                  <span class="price">₽ 6000</span>
                  <a href="#" class="details">подробнее</a>
                  <a href="#" class="button">В корзину</a>
                </div>
              </div>
              <div class="product-item">
                <img src="/images/knife_card.png" />
                <div class="product-list">
                  <h3>Опричник</h3>
                  <span class="price">₽ 6000</span>
                  <a href="#" class="details">подробнее</a>
                  <a href="#" class="button">В корзину</a>
                </div>
              </div>
              <div class="product-item">
                <img src="/images/knife_card.png" />
                <div class="product-list">
                  <h3>Опричник</h3>
                  <span class="price">₽ 6000</span>
                  <a href="#" class="details">подробнее</a>
                  <a href="#" class="button">В корзину</a>
                </div>
              </div>
              <div class="product-item">
                <img src="/images/knife_card.png" />
                <div class="product-list">
                  <h3>Опричник</h3>
                  <span class="price">₽ 6000</span>
                  <a href="#" class="details">подробнее</a>
                  <a href="#" class="button">В корзину</a>
                </div>
              </div>
              <div class="product-item">
                <img src="/images/knife_card.png" />
                <div class="product-list">
                  <h3>Опричник</h3>
                  <span class="price">₽ 6000</span>
                  <a href="#" class="details">подробнее</a>
                  <a href="#" class="button">В корзину</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script type="module" src="/path/to/js.cookie.mjs"></script>
    <script nomodule defer src="/path/to/js.cookie.js"></script>
    <script scr="js/jsberkut.js"></script>
  </body>
</html>
