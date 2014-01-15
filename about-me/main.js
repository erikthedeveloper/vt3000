
function chartInit(canvas_el) {
    data = [
        {
            value : canvas_el.dataset.experience * 100,
            // teal-ish
            color:"#4FC2C5"
        },
        {
            value : canvas_el.dataset.excitement * 100,
            // pink-ish
            // color : "#d24d57"
            color : "transparent"
        }
    ];

    var options = [];

    var ctx = canvas_el.getContext("2d");
    new Chart(ctx).Doughnut(data,options);
}

var skills = document.getElementsByClassName('chart-canvas');

for (var i = skills.length - 1; i >= 0; i--) {
    chartInit(skills[i]);
}