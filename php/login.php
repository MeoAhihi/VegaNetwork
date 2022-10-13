<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/style.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Ubuntu"
    />
    <link rel="icon" href="../img/logo/favicon.png" type="image/x-icon" />
    <title>VegaNetWork - Login</title>
  </head>
  <body>
    <div class="container" id="container">
      <div class="form-container sign-up-container">
        <form action="./controller/signup.php" class="form" id="form-1" method="POST">
          <h1>Đăng ký</h1>
          <div class="form-group">
            <label class="input-label" for="fullname">Tên người dùng</label>
            <input
              type="text"
              name="fullname"
              id="fullname"
              class="form-control"
              placeholder="Tên đăng nhập..."
            />
            <span class="form-message"></span>
          </div>
          <div class="form-group">
            <label class="input-label" for="email">Email</label>
            <input
              type="email"
              name="email"
              id="email"
              class="form-control"
              placeholder="yourname@vega.network"
            />
            <span class="form-message"></span>
          </div>
          <div class="form-group">
            <label class="input-label" for="password">Mật khẩu</label>
            <input
              type="password"
              name="password"
              id="password"
              class="form-control"
              placeholder="Nhập mật khẩu tại đây"
            />
            <span class="form-message"></span>
          </div>
          <div class="form-group">
            <label for="checkbox" class="checkbox-style">
              <input
                type="checkbox"
                name="checkbox"
                id="checkbox"
                class="checkbox-input"
              />
              <div class="checkbox-box">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path
                    fill-rule="evenodd"
                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                    clip-rule="evenodd"
                  />
                </svg>
              </div>
              <label for="checkbox" class="checkbox-label">
                Chấp nhận <a href="">chính sách quyền riêng tư</a>
              </label>
            </label>
            <span class="form-message"></span>
          </div>
          <button type="submit" name="submit">Đăng ký</button>
        </form>
      </div>

      <div class="form-container sign-in-container">
        <form action="./controller/login.php" class="form" id="form-2" method="POST">
          <h1>Đăng nhập</h1>
          <div class="form-group">
            <label class="input-label" for="email">Email</label>
            <input
              type="email"
              id="email-signin"
              class="form-control"
              name="email"
              placeholder="yourname@vega.network"
            />
            <span class="form-message"></span>
          </div>
          <div class="form-group">
            <label class="input-label" for="password">Mật khẩu</label>
            <input
              type="password"
              id="password-signin"
              class="form-control"
              name="password"
              placeholder="Nhập mật khẩu tại đây"
            />
            <span class="form-message"></span>
          </div>
          <div class="form-group">
            <label for="checkbox-sub" class="checkbox-style">
              <input
                type="checkbox"
                name="checkbox"
                id="checkbox-sub"
                class="checkbox-input"
              />
              <div class="checkbox-box">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5"
                  viewBox="0 0 20 20"
                  fill="currentColor"
                >
                  <path
                    fill-rule="evenodd"
                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                    clip-rule="evenodd"
                  />
                </svg>
              </div>
              <label
                for="checkbox-sub"
                class="checkbox-label"
                id="checkbox-signin"
                name="remember-me"
              >
                Hãy nhớ tôi
                <a class="qmk" href="">Quên mật khẩu</a>
              </label>
            </label>
          </div>
          <button  type="submit" name="submit">Đăng nhập</button>
        </form>
      </div>
      <div class="overlay-container">
        <div class="overlay">
          <div class="overlay-panel overlay-left">
            <img src="../img/logo/Logo.png" alt="VegaNetWork-Icon" />
            <br />
            <button class="ghost" id="signUp">Đăng ký</button>
          </div>
          <div class="overlay-panel overlay-right">
            <img src="../img/logo/Logo.png" alt="VegaNetWork-Icon" />
            <br />
            <button class="ghost" id="signIn">Đăng nhập</button>
          </div>
        </div>
      </div>
    </div>

    <script src="../js/main.js"></script>
    <script>
      // Mong muốn
      // Validate form 1
      Validator({
        form: "#form-1",
        formGroupSelector: ".form-group",
        errorSelector: ".form-message",
        rules: [
          Validator.isRequired("#fullname", "Vui lòng điền tên"),
          Validator.isRequired("#email", "Vui lòng điền email"),
          Validator.isEmail("#email", "Vui lòng nhập đúng email"),
          Validator.isRequired("#password", "Vui lòng điền mật khẩu"),
          Validator.minLength("#password", 6),
          Validator.isChecked(
            'input[name="checkbox"]',
            "Vùi lòng tích vào ô trên"
          ),
          // Validator.isConfirmed("#password_confirmation", function () {
          //   return document.querySelector("#form-1 #password").value;
          // }, "Mật khẩu nhập lại không chính xác"),
        ],
        onSubmit: function (data) {
          // Call API
          console.log(data);
        },
      });
      // Validate form 2
      Validator({
        form: "#form-2",
        formGroupSelector: ".form-group",
        errorSelector: ".form-message",
        rules: [
          Validator.isRequired("#email-signin", "Vui lòng điền email"),
          Validator.isEmail("#email-signin", "Vui lòng nhập đúng email"),
          Validator.isRequired("#password-signin", "Vui lòng điền mật khẩu"),
          Validator.minLength("#password-signin", 6),
          // Validator.isConfirmed("#password_confirmation", function () {
          //   return document.querySelector("#form-1 #password").value;
          // }, "Mật khẩu nhập lại không chính xác"),
        ],
        onSubmit: function (data) {
          // Call API
          console.log(data);
        },
      });
    </script>
  </body>
</html>
