function generate(){
    var  quotes ={
        "― Aaron Lauritsen" :'"The struggles we endure today will be the good old days we laugh about tomorrow."',
        "―Nenia Campbell" : "“You want to be free. You also want to be mine. You can't be both.”",
        "― Jamie Ford" : "The library is like a candy store where everything is free.",
        "― Matthew Edward Hall" : "“Life is free, food grows on trees.”"
    }


    var author = Object.keys(quotes);

    var authors = author[Math.floor(Math.random() *
        author.length)];

        var quote  = quotes[authors];

        document.getElementById("quote").innerHTML =
        quote;
        document.getElementById("author").innerHTML =
        authors;
}