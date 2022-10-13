<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Ubuntu"
    />
    <link rel="icon" href="./assets/img/favicon.png" type="image/x-icon" />
    <script
      src="https://kit.fontawesome.com/65ca83241b.js"
      crossorigin="anonymous"
    ></script>
    <title>VegaNetWork - Trang Chủ</title>
  </head>
  <body>
    <div id="main">
      <section id="lobby">
        <div class="nav">
          <div class="logo">
            <a href="">
              <img
                style="width: 220px"
                src="./assets/img/logo/Logo_lobby.png"
                alt="logo"
            /></a>
          </div>
          <div class="nav__user text-white">
            <i style="font-size: 24px" class="fa-solid fa-circle-user"></i>
            <b>User</b>
            <i style="margin-top: 2%" class="fa-solid fa-caret-down"></i>
            <ul class="nav__user--sub">
              <li><a href="">Đăng xuất</a></li>
            </ul>
          </div>
          <div class="nav__selection">
            <ul class="menu">
              <li class="menu-item">
                <a href="#lobby" class="menu-link">Trang chủ</a>
              </li>
              <li class="menu-item">
                <a href="#classlist" class="menu-link">Quán ăn</a>
              </li>
              <li class="menu-item">
                <a href="#footer" class="menu-link">Về chúng tôi</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="slider">
          <i class="fas fa-arrow-left" id="prevBtn"></i>
          <i class="fas fa-arrow-right" id="nextBtn"></i>
          <div class="slider__img">
            <img
              width="100%"
              src="/assets/img/slider/slider2.png"
              id="slider__img--lastClone"
              alt=""
            />
            <img width="100%" src="/assets/img/slider/slider1.png" alt="" />
            <img width="100%" src="/assets/img/slider/slider2.png" alt="" />
            <img
              width="100%"
              src="/assets/img/slider/slider1.png"
              id="slider__img--firstClone"
              alt=""
            />
          </div>
        </div>
      </section>
      <section id="classlist">
        <h1 class="text-center">Phân loại</h1>
        <div class="classlist__content">
          <div class="list col col-half mg-48">
            <ul>
              <li>
                <button id="btn1" class="Btn--hover">
                  <img src="./assets/img/icon/fork.png" alt="" />
                  <p>Nhà hàng</p>
                </button>
              </li>
              <li>
                <button id="btn2" class="Btn--hover">
                  <img src="./assets/img/icon/table_and_chair.png" alt="" />
                  <p>
                    Quán ăn <br />
                    tầm trung
                  </p>
                </button>
              </li>
              <li>
                <button id="btn3" class="Btn--hover">
                  <img src="./assets/img/icon/table.png" alt="" />
                  <p>
                    Quán ăn <br />
                    bình dân
                  </p>
                </button>
              </li>
              <li>
                <button id="btn4" class="Btn--hover">
                  <img src="./assets/img/icon/cake.png" alt="" />
                  <p>Quán ngọt</p>
                </button>
              </li>
            </ul>
          </div>
          <div class="list--img col col-half mg-48">
            <img
              style="width: 760px"
              src="./assets/img/res_img/pic-1.png"
              alt="Nhà hàng giác ngộ"
            />
          </div>
        </div>
      </section>
      <section id="maping">
        <div class="nearRes col col-half">
          <h1>Quán ăn gần bạn</h1>
          <div class="nearRes__box">
            <div class="nearRes__box--child"></div>
          </div>
        </div>
        <div class="map col col-half"></div>
      </section>
      <section style="height: 280px" id="footer">
        <div class="contact col col-half">
          <div class="contact_dir">
            <h1>Contact us</h1>
            <div class="contact__child">
              <p>Lý Vĩ Phong</p>
              <a href="www.facebook.com/viphong.ly.1"
                >www.facebook.com/viphong.ly.1</a
              >
            </div>
            <div class="contact__child">
              <p>Lưu Khoa Học</p>
              <a href="www.facebook.com/lkh2111">www.facebook.com/lkh2111</a>
            </div>
          </div>
        </div>
        <div class="link__icon col col-half">
          <div class="row icon_list">
            <a href=""
              ><img src="/assets/img/icon/bxl_figma.png" alt="figma"
            /></a>
            <a href=""
              ><img
                src="/assets/img/icon/akar-icons_pinterest-fill.png"
                alt="pinterest"
            /></a>
            <a href=""
              ><img
                src="/assets/img/icon/akar-icons_google-contained-fill.png"
                alt="google"
            /></a>
          </div>
          <div class="copy_right">
            <h1>&#169; 2022&#x2013; Created by vegaNetWork</h1>
          </div>
        </div>
      </section>
    </div>
    <script src="./assets/js/lobby.js"></script>
  </body>
</html>
