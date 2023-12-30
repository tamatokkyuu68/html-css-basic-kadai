// HTML要素をidで取得し、定数に代入
const btn = document.getElementById("btn");

// 要素がクリックされたときにイベントを実行する
btn.addEventListener("click", () => {
   const text = document.getElementById("text");
   text.textContent = "ボタンをクリックしました";
});