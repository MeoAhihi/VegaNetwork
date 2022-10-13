// Class List
const btn1 = document.getElementById("btn1");
const btn2 = document.getElementById("btn2");
const btn3 = document.getElementById("btn3");
const btn4 = document.getElementById("btn4");
const btn = document.querySelectorAll(".Btn--hover");
const img = document.getElementById("IMG");

btn.forEach(function (value) {
  value.addEventListener("mouseout", () => {
    img.src = "../img/Loading.png";
  });
});

btn1.addEventListener("mouseover", () => {
  img.src = "../img/res_img/pic-1.png";
});

btn2.addEventListener("mouseover", () => {
  img.src =
    "https://i0.wp.com/digiticket.vn/blog/wp-content/uploads/2021/06/ag.jpg?resize=750%2C784&ssl=1";
});

btn3.addEventListener("mouseover", () => {
  img.src =
    "https://nld.mediacdn.vn/2020/4/3/nql9705-1585919332931100866889.jpg";
});

btn4.addEventListener("mouseover", () => {
  img.src =
    "https://gongcha.com.vn/wp-content/uploads/2018/03/Banner-Trang-Ch%E1%BB%A7-k%E1%BA%BF-%C4%91%E1%BB%8Ba-ch%E1%BB%89-CH-800x380-01.jpg";
});
