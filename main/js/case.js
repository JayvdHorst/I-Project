var nr_inside = 50;
var div_size = 150;
var won_items = [];

var spinner = document.getElementById("spinner-inside");
var varChecker = [];
for (i = 0; i < nr_inside; i++) {
    var prize = prizes[Math.floor(Math.random() * prizes.length)];
    var d = document.createElement("div");

    d.className = "prize";
    d.innerHTML = prize.label;
    d.style.backgroundImage = "url(" + prize.src + ")";

    varChecker.push(prize);

    spinner.appendChild(d);
}
spinner.style.width = (div_size * nr_inside) + "px";

function openCase() {
    document.getElementById("Btn").style.display = "none";
// create the prize divs inside the spinner-inside.
// repeat a few times to fill it up enough.

    var speed = 100 + Math.random() * 2;
    var pos = 0;
    var same_selected_counter = 0;
    var selected_prize = 0;
    var last_selected = 0;
    var last_speed = 0;

    function sign(d) {
        if (d < 0)
            return -1;
        else
            return 1;
    }

    spinIt();

    function spinIt() {
// move spinner.
        pos = pos - speed;

        // friction on speed
        speed = speed * 0.95;

        selected_prize = Math.round((pos + div_size / 2) / div_size);
        if (selected_prize == last_selected) {
            same_selected_counter++;
        } else {
            same_selected_counter = 0;
            last_selected = selected_prize;
        }

        //show the spinner position.
        spinner.style.left = (pos - div_size / 2) + "px";
        if (same_selected_counter < 150) {
            if (same_selected_counter < 100) {

            }
            window.requestAnimationFrame(spinIt);
        } else {
            if (Math.abs(speed > 0.01)) {
                window.requestAnimationFrame(spinIt);
            } else {
                document.getElementById("you_won").innerHTML = "You Won!<br> [$" + varChecker[19].value + "] " + varChecker[19].label;
                won_items.push(varChecker[19].src);
                console.log(won_items);
            }
        }

    }
}