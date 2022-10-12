const signUpButton = document.getElementById("signUp");
const signInButton = document.getElementById("signIn");
const container = document.getElementById("container");
const inputErr = document.querySelectorAll(".form-message");

signUpButton.addEventListener("click", () =>
  container.classList.add("left-panel-active")
);
signUpButton.addEventListener("click", () =>
  inputErr.forEach(function (value) {
    value.innerHTML = "";
  })
);
signInButton.addEventListener("click", () =>
  container.classList.remove("left-panel-active")
);
signInButton.addEventListener("click", () =>
  inputErr.forEach(function (value) {
    value.innerHTML = "";
  })
);

// Đối tượng 'Validator'
function Validator(options) {
  function getParent(element, selector) {
    while (element.parentElement) {
      if (element.parentElement.matches(selector)) {
        return element.parentElement;
      }
      element = element.parentElement;
    }
  }

  var selectorRules = {};

  // Hàm thực hiện validate
  // value : inputElement.value
  // test function : rule.test
  function validate(inputElement, rule) {
    var errMessage;
    // = rule.test(inputElement.value);
    var errElement = getParent(
      inputElement,
      options.formGroupSelector
    ).querySelector(options.errorSelector);
    //* Lấy ra các rules của selector
    var rules = selectorRules[rule.selector];

    //* Lặp qua từng rule và kiếm tra
    //* Nếu có lỗi thì dừng kiểm tra
    for (var i = 0; i < rules.length; ++i) {
      switch (inputElement.type) {
        case "radio":
        case "checkbox":
          errMessage = rules[i](
            formElement.querySelector(rule.selector + ":checked")
          );
          break;
        default:
          errMessage = rules[i](inputElement.value);
      }
      if (errMessage) break;
    }

    if (errMessage) {
      errElement.innerText = errMessage;
      getParent(inputElement, options.formGroupSelector).classList.add(
        "invalid"
      );
    } else {
      errElement.innerText = "";
      getParent(inputElement, options.formGroupSelector).classList.remove(
        "invalid"
      );
    }

    return !errMessage;
  }

  // Lấy element của form cần validate
  var formElement = document.querySelector(options.form);
  if (formElement) {
    //* Khi submits form
    formElement.onsubmit = function (e) {
      e.preventDefault();

      var isFormValid = true;

      //* Lặp qua từng rules và validate
      options.rules.forEach(function (rule) {
        var inputElement = formElement.querySelector(rule.selector);
        var isValid = validate(inputElement, rule);
        if (!isValid) {
          isFormValid = false;
        }
      });

      if (isFormValid) {
        // * Trường hợp submit với JavaScript
        if (typeof options.onSubmit === "function") {
          var enableInputs = formElement.querySelectorAll(
            "[name]:not([disabled])"
          );
          var formValues = Array.from(enableInputs).reduce(function (
            values,
            input
          ) {
            switch (input.type) {
              case "radio":
                values[input.name] = formElement.querySelector(
                  'input[name="' + input.name + '"]:checked'
                ).value;
                break;
              case "checkbox":
                if (!input.matches(":checked")) {
                  values[input.name] = [];
                  return values;
                }
                if (!Array.isArray(values[input.name])) {
                  values[input.name] = [];
                }
                values[input.name].push(input.value);
                break;
              case "file":
                values[input.name] = input.files;
                break;
              default:
                values[input.name] = input.value;
            }

            return values;
          },
          {});
          options.onSubmit({ formValues });
        }
        //* Trường hợp submit vs hành vi mặc định
        else {
          formElement.submit();
        }
      }
    };

    //* Lặp qua mỗi rule và xử lý ( lắng nghe sự kiện: blur, input,...)
    options.rules.forEach(function (rule) {
      //* Lưu lại các rules cho mỗi input
      if (Array.isArray(selectorRules[rule.selector])) {
        selectorRules[rule.selector].push(rule.test);
      } else {
        selectorRules[rule.selector] = [rule.test];
      }

      var inputElements = formElement.querySelectorAll(rule.selector);

      Array.from(inputElements).forEach(function (inputElement) {
        //* Xử lý trường hợp blur khỏi input
        inputElement.onblur = function () {
          validate(inputElement, rule);
        };
        //* Xử lý mỗi khi người dùng nhập vào input
        inputElement.oninput = function () {
          var errElement = getParent(
            inputElement,
            options.formGroupSelector
          ).querySelector(options.errorSelector);
          errElement.innerText = "";
          getParent(inputElement, options.formGroupSelector).classList.remove(
            "Invalid"
          );
        };
      });
    });
  }
}

// Định nghĩa rules
// Nguyên tác của các rules:
// 1. Khi có lỗi => trả ra message lỗi
// 2. Khi hợp lệ => Không trả ra cái gì cả (undefined)
Validator.isRequired = function (selector, message) {
  return {
    selector: selector,
    test: function (value) {
      return value.trim() ? undefined : message || "Vui lòng nhập trường này";
    },
  };
};
Validator.isEmail = function (selector, message) {
  return {
    selector: selector,
    test: function (value) {
      var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      return regex.test(value)
        ? undefined
        : message || "Trường này phải là email";
    },
  };
};
Validator.minLength = function (selector, min, message) {
  return {
    selector: selector,
    test: function (value) {
      return value.length >= min
        ? undefined
        : message || "Vui lòng nhập tối thiểu " + min + " kí tự";
    },
  };
};
Validator.isChecked = function (selector, message) {
  return {
    selector: selector,
    test: function (value) {
      return value ? undefined : message || "Vui lòng nhập trường này";
    },
  };
};
// Validator.isConfirmed = function (selector, getConfirmValue, message) {
//   return {
//     selector: selector,
//     test: function (value) {
//       return value === getConfirmValue()
//         ? undefined
//         : message || "Giá trị nhập vào không chính xác";
//     },
//   };
// };
