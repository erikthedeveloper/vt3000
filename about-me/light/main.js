
function chartInit(canvas_el) {
    data = [
        {
            value : canvas_el.dataset.experience * 100,
            // teal-ish
            /* original */
            // color:"#4FC2C5"

            /* for dark */
            // color:"#007EE8"

            /* for light */
            color:"#FF7600"
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
window.onload = function () {
	var skills = document.getElementsByClassName('chart-canvas');

	for (var i = skills.length - 1; i >= 0; i--) {
		chartInit(skills[i]);
	}
}
