function change_color() {
    var hex_numbers = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "a", "b", "c", "d", "e", "f"];
    var hex_code = "";

    for (var i = 0; i < 6; i++) {
        var rnm = Math.random();
        var random_index = Math.floor(rnm * hex_numbers.length);
        hex_code += hex_numbers[random_index];
    }

    document.getElementById("hex-color").innerHTML = "#" + hex_code;
    document.getElementsByTagName("body")[0].style.background = "#" + hex_code;
}

function change_name(){
    var colorname = ["red", "blue", "green", "white", "orange", "yellow", "purple"]
    var rnm = Math.random();
    var index = Math.floor(rnm * colorname.length);
    document.getElementsByTagName("body")[0].style.background =  colorname[index];
    document.getElementById("hex-color").innerHTML = colorname[index];

}