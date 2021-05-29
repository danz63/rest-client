function ajax(data = "", success, load) {
  data = decodeURIComponent(data);
  let xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      if (xhr.status === 200) {
        success(xhr.response);
      } else {
        console.log(xhr);
        return;
      }
    } else {
      load();
    }
  };
  xhr.open("POST", "app/handler.php", true);
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send(data);
}

function generateStringData(form) {
  let method = form.elements.namedItem("method").value;
  let url = encodeURIComponent(form.elements.namedItem("url").value);
  let params = encodeURIComponent(`url=${url}&method=${method}`);
  if (method === "post") {
    let key = form.elements.namedItem("key[]");
    let value = form.elements.namedItem("value[]");
    let data = "";
    for (i = 0; i < key.length; i++) {
      if (key[i].value !== "" && value[i].value !== "") {
        data += `&${key[i].value}=${value[i].value}`;
      }
    }
    params = encodeURIComponent(`url=${url}&method=${method}${data}`);
  }
  return params;
}

function success(response) {
  // console.log(response);
  // return;
  if (isJson(response)) {
    let myJSON = JSON.parse(JSON.parse(response));
    const formatter = new JSONFormatter(myJSON);
    document.getElementById("loading").style.display = "none";
    document.getElementById("result").appendChild(formatter.render());
  }
}

function load() {
  let jsonFormater = document.querySelector(".json-formatter-row");
  if (jsonFormater) {
    jsonFormater.remove();
  }
  document.getElementById("preholder").classList.add("d-none");
  document.getElementById("loading").style.display = "inline-block";
}

function isJson(str) {
  try {
    JSON.parse(str);
  } catch (e) {
    return false;
  }
  return true;
}

function request() {
  let params = generateStringData(document.getElementById("formRequest"));
  ajax(params, success, load);
}

function copyToClipboard(btn) {
  let inputValue = btn.parentNode.previousSibling.previousSibling;
  inputValue.select();
  inputValue.setSelectionRange(0, 99999);
  document.execCommand("copy");
}
document.onreadystatechange = function () {
  if (document.readyState == "interactive") {
    /**
     * Request To Server API Onclick button or enter pressed when focus on url form
     */
    if (typeof document.getElementById("request") != "undefined" && document.getElementById("request") != null) {
      document.getElementById("request").addEventListener("click", request);
    }
    if (typeof document.getElementById("url") != "undefined" && document.getElementById("url") != null) {
      document.getElementById("url").addEventListener("keypress", function (e) {
        if (e.key === "Enter") {
          e.preventDefault();
          // Trigger the button element with a click
          document.getElementById("request").click();
        }
      });
    }
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    /**
     * Show Or Hide Form Table
     */
    if (typeof document.getElementById("switchSelect") != "undefined" && document.getElementById("switchSelect") != null) {
      document.getElementById("switchSelect").addEventListener("change", function () {
        let formTable = document.getElementById("formTable");
        formTable.classList.toggle("hide");
        if (formTable.className === "hide") {
          formTable.style.opacity = 0;
          formTable.style.transform = "scale(0)";
          window.setTimeout(function () {
            formTable.style.display = "none";
          }, 700);
        } else {
          formTable.style.display = "block";
          window.setTimeout(function () {
            formTable.style.opacity = 1;
            formTable.style.transform = "scale(1)";
          }, 0);
        }
      });
    }
  }
};
