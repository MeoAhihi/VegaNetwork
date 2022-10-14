<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./assets/css/res.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu" />
  <link rel="icon" href="./assets/img/logo/favicon.png" type="image/x-icon" />
  <script src="https://kit.fontawesome.com/65ca83241b.js" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <title>VegaNetWork - Quán ăn</title>
</head>

<body>
  <div id="main">
    <div id="header">
      <!-- Begin: Nav -->
      <div class="nav">
        <div class="logo">
          <a href="./php/homes.php">
            <img style="width: 220px" src="./assets/img/logo/Logo_lobby.png" alt="logo" /></a>
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
              <a href="#" class="menu-link">Trang chủ</a>
            </li>
            <li class="menu-item">
              <a style="color: #7fb77e; font-weight: bold" href="#" class="menu-link">Quán ăn</a>
            </li>
            <li class="menu-item">
              <a href="#footer" class="menu-link">Về chúng tôi</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End: Nav -->

    <!-- Begin: Aside -->
    <div class="col-20" id="aside">
      <div class="aside__content">
        <h3>Thông tin chính</h3>
        <ul>
          <li>
            <a href="#gotomenu">Thực đơn</a>
            <ul>
              <li><a href="#content">Món nước</a></li>
              <li><a href="#gotodry">Món khô</a></li>
              <li><a href="#gotodrink">Đồ uống</a></li>
            </ul>
          </li>
          <li><a href="#gotocomment">Bình luận</a></li>
        </ul>
      </div>
    </div>
    <!-- End: Aside -->
    <div id="sticky-anchor"></div>

    <!-- Begin: Banner -->

    <div class="col-80" id="banner">
      <div class="banner__img">
        <!-- Chỗ này thế data dô -->
        <img src="./assets/img/res_img/banner1.png" alt="Quán chay Phúc Ấn An Gia" />
      </div>
      <div class="banner__card row">
        <div class="banner__card--name col-third">
          <!-- Chỗ này thế data dô -->
          <p style="font-size: 20px">quán chay</p>
          <p style="font-size: 30px">Phúc Ấn An Gia</p>
        </div>
        <div class="banner__card--logo text-center col-third">
          <!-- Chỗ này thế data dô -->
          <img style="height: 132px" src="./assets/img/logo/logo_res.png" alt="Quán chay Phúc Ấn An Gia" />
        </div>
        <div class="banner__card--info col-third">
          <!-- Chỗ này thế data dô -->
          <div class="info_time">
            <p>
              6:30-21:00 &nbsp;&nbsp;
              <i style="color: rgb(94, 119, 228)" class="fa-solid fa-clock"></i>
            </p>
          </div>
          <div class="info_price">
            <p>
              31.000-51.000 &nbsp;&nbsp;&nbsp;
              <i style="color: green" class="fa-solid fa-dong-sign"></i>
            </p>
          </div>
          <div class="info_rate">
            <p>
              4.7 &nbsp;&nbsp;&nbsp;
              <i style="color: rgb(250, 250, 39); margin-right: -3px" class="fa-solid fa-star"></i>
            </p>
          </div>
          <div id="gotomenu" class="info_position">
            <p>
              163/21/3 Tô Hiến Thành, P13, Q10 &nbsp;&nbsp;
              <i style="color: red" class="fa-solid fa-location-dot"></i>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- End: Banner -->

    <div class="space col-20">&nbsp;</div>

    <!-- Begin: Content -->
    <div class="col-80" id="content">
      <div class="content__menu">
        <h1 class="mg-12" id="menu">Thực đơn</h1>
        <p id="menu_wet" class="mg-24 fz-20 text-bold">Món nước</p>
        <!-- Chỗ này thế data dô -->
        <div class="menu__box">
          <?php
          include './php/classes/view/restaurant.view.php';
          $view = new Test();
          $dishes = $view->getWetDishes();
          ?>
          <?php foreach ($dishes as $dish) : ?>
            <div class="menu__box--child">
              <img class="mg-8" src="./assets/img/icon/menu_wet.png" alt="Món nước" />
              <p class="fz-24 mg-12 col-half"><?php echo $dish['dish_name']; ?></p>
              <p class="price"><?php echo $dish['price'] . "đ"; ?></p>
            </div>
          <?php endforeach ?>
          <div id="gotodry"></div>

        </div>

        <!-- <div class="menu__box--child">
              <img
                class="mg-8"
                src="/assets/img/icon/menu_wet.png"
                alt="Món nước"
              />
              <p class="fz-24 mg-12 col-half">Bún Huế</p>
              <p class="price">35.000đ</p>
            </div>
            <div id="gotodry"></div>

            <div class="menu__box--child">
              <img
                class="mg-8"
                src="/assets/img/icon/menu_wet.png"
                alt="Món nước"
              />
              <p class="fz-24 mg-12 col-half">Bún riêu</p>
              <p class="price">37.000đ</p>
            </div>
            <div class="menu__box--child">
              <img
                class="mg-8"
                src="/assets/img/icon/menu_wet.png"
                alt="Món nước"
              />
              <p class="fz-24 mg-12 col-half">Hủ tiếu Nam Vang</p>
              <p class="price">31.000đ</p>
            </div>-->
        <div id="gotodrink"></div>
        <div class="menu__box">
          <p id="menu_dry" class="mg-24 fz-20 text-bold">Món khô</p>
          <?php $dishes = $view->getDryDishes(); ?>
          <?php foreach ($dishes as $dish) : ?>
            <div class="menu__box--child">
              <img class="mg-8" src="./assets/img/icon/menu_dry.png" alt="Món nước" />
              <p class="fz-24 mg-12 col-half"><?php echo $dish['dish_name']; ?></p>
              <p class="price"><?php echo $dish['price'] . "đ"; ?></p>
            </div>
          <?php endforeach ?>
          <!-- Chỗ này thế data dô -->
        </div>
        <!-- <div class="menu__box--child">
              <img
                class="mg-8"
                src="/assets/img/icon/menu_dry.png"
                alt="Món khô"
              />
              <p class="fz-24 mg-12 col-half">Hoành thánh chiên</p>
              <p class="price">25.000đ</p>
            </div>
            <div id="gotodrink"></div>

            <div class="menu__box--child">
              <img
                class="mg-8"
                src="/assets/img/icon/menu_dry.png"
                alt="Món khô"
              />
              <p class="fz-24 mg-12 col-half">Gỏi xoài</p>
              <p class="price">30.000đ</p>
            </div>
            <div class="menu__box--child">
              <img
                class="mg-8"
                src="/assets/img/icon/menu_dry.png"
                alt="Món khô"
              />
              <p class="fz-24 mg-12 col-half">Đậu hủ non chiên xù</p>
              <p class="price">30.000đ</p>
            </div>-->
        <div class="menu__box">
          <p id="menu_drink" class="mg-24 fz-20 text-bold">Đồ uống</p>
          <?php $dishes = $view->getDrinks(); ?>
          <?php foreach ($dishes as $dish) : ?>
            <div class="menu__box--child">
              <img class="mg-8" src="./assets/img/icon/menu_drink.png" alt="Món nước" />
              <p class="fz-24 mg-12 col-half"><?php echo $dish['dish_name']; ?></p>
              <p class="price"><?php echo $dish['price'] . "đ"; ?></p>
            </div>
          <?php endforeach ?>
          <!-- Chỗ này thế data dô -->
        </div>
        <!-- <div class="menu__box--child">
              <img
                class="mg-8"
                src="/assets/img/icon/menu_drink.png"
                alt="Đồ uống"
              />
              <p class="fz-24 mg-12 col-half">Trà đá</p>
              <p class="price">10.000đ</p>
            </div>
            <div class="menu__box--child">
              <img
                class="mg-8"
                src="/assets/img/icon/menu_drink.png"
                alt="Đồ uống"
              />
              <p class="fz-24 mg-12 col-half">Coca Cola</p>
              <p class="price">20.000đ</p>
            </div>

            <div class="menu__box--child">
              <img
                class="mg-8"
                src="/assets/img/icon/menu_drink.png"
                alt="Đồ uống"
              />
              <p class="fz-24 mg-12 col-half">C2</p>
              <p class="price">20.000đ</p>
            </div>-->
        <div id="gotocomment"></div>

      </div>
    </div>
    <!-- End: Content -->

    <!-- Begin: Comment -->
    <div class="col-80" id="comment">
      <div class="comment__content">
        <h1 class="mg-12">Bình luận</h1>
        <div class="comment__content--typing_box">
          <div class="typing_box--img">
            <img src="./assets/img/icon/user_phong.png" alt="user" />
          </div>
          <div class="typing_box--input">
            <textarea style="width: 100%" name="textbox" id="textbox" cols="100" rows="8" placeholder="Tạo bình luận..."></textarea>
          </div>
          <div class="typing_box--submit">
            <button>
              <i class="fa-solid fa-paper-plane"></i>
            </button>
          </div>
        </div>
        <div class="comment__visiter">
          <div class="comment__visiter--child">
            <hr />
            <div class="user">
              <b>Lý Vĩ Phong</b> &nbsp;&nbsp;
              <span>03/09/2022</span>
            </div>
            <div class="user_img">
              <img src="./assets/img/icon/user_phong.png" alt="user" />
            </div>
            <div class="user_comment">
              <p>Đồ ăn ngon, phục vụ thân thiện</p>
              <img src="./assets/img/icon/heart.png" alt="img" />
              <img src="./assets/img/icon/heart.png" alt="img" />
            </div>
          </div>
          <div class="comment__visiter--child">
            <hr />
            <div class="user">
              <b>Lý Vĩ Phong</b> &nbsp;&nbsp;
              <span>03/09/2022</span>
            </div>
            <div class="user_img">
              <img src="./assets/img/icon/user_phong.png" alt="user" />
            </div>
            <div class="user_comment">
              <p>Đồ ăn ngon, phục vụ thân thiện</p>
              <img src="./assets/img/icon/heart.png" alt="img" />
              <img src="./assets/img/icon/heart.png" alt="img" />
            </div>
          </div>
          <div class="comment__visiter--child">
            <hr />
            <div class="user">
              <b>Lý Vĩ Phong</b> &nbsp;&nbsp;
              <span>03/09/2022</span>
            </div>
            <div class="user_img">
              <img src="./assets/img/icon/user_phong.png" alt="user" />
            </div>
            <div class="user_comment">
              <p>Đồ ăn ngon, phục vụ thân thiện</p>
              <img src="./assets/img/icon/heart.png" alt="img" />
              <img src="./assets/img/icon/heart.png" alt="img" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End: Comment -->

    <!-- Begin: Footer -->
    <div id="footer">
      <div class="contact col col-half">
        <div class="contact_dir">
          <h1 style="font-size: 1.5rem">Contact us</h1>
          <div class="contact__child">
            <p>Lý Vĩ Phong</p>
            <a href="www.facebook.com/viphong.ly.1">www.facebook.com/viphong.ly.1</a>
          </div>
          <div class="contact__child">
            <p>Lưu Khoa Học</p>
            <a href="www.facebook.com/lkh2111">www.facebook.com/lkh2111</a>
          </div>
        </div>
      </div>
      <div class="link__icon col col-half">
        <div class="row icon_list">
          <a href=""><img src="./assets/img/icon/bxl_figma.png" alt="figma" /></a>
          <a href=""><img src="./assets/img/icon/akar-icons_pinterest-fill.png" alt="pinterest" /></a>
          <a href=""><img src="./assets/img/icon/akar-icons_google-contained-fill.png" alt="google" /></a>
        </div>
        <div class="copy_right">
          <h1>&#169; 2022&#x2013; Created by vegaNetWork</h1>
        </div>
      </div>
    </div>
    <!-- End: Footer -->
  </div>
  <script src="./assets/js/res.js"></script>
</body>

</html>