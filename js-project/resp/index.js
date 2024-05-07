var index = 0;


function ChangeColour(){
    var color =["red","blue","orange","yellow","purple","green"];

    document.getElementsByTagName("body")[0].
    style.background = color[index++];

    if(index > color.length - 1)
    index = 0;
    change_image();
}
ChangeColour();
var indeximage = 0;


function change_image(){
    var change_image = ["cat.jpg", "dog.jpg", "cow.jpg"];


    if (indeximage > change_image.length - 1) {
        indeximage = 0;
    }    document.getElementById("change-me-img").src = "animals/" + change_image[indeximage++];

}
change_image()

