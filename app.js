const tab_1 = document.getElementById("samsung");
const tab_2 = document.getElementById("apple");
const tab_3 = document.getElementById("huwawei");

const line_one = document.getElementById("one_line");
const line_two = document.getElementById("two_line");
tabController(samsung);

function tabController(slide) {
  if (slide == samsung) {
    tab_1.classList = "grid-auto";
    tab_2.classList = "hide";
    line_one.style.display = "block";
    line_two.style.display = "none";
  } else if (slide == apple) {
    // alert("apple");
    tab_1.classList = "hide";
    tab_2.classList = "grid-auto";
    line_one.style.display = "none";
    line_two.style.display = "block";
    // tab_1.style.display = "none";
  }
}
