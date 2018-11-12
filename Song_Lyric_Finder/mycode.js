var submitButton = document.getElementById("submit");

var lyric = document.getElementById("lyrics");

var artist = document.getElementById("artist");



submitButton.addEventListener("click",function(event){

    event.preventDefault();

    songlyrics.innerHTML = "";

    var lyricsans = document.lyricform.artist.value;
    var artistans = document.lyricform.lyrics.value;

    fetch('https://api.lyrics.ovh/v1/'+ lyricsans  +"/"+ artistans) 

    .then(function(response){

        return response.json();
        
        

    })

    .then(function(data){
        var songlyrics = document.getElementById("songlyrics");

        var songarray = data.lyrics.split("\n")

        var i;

        for ( i = 0; i < songarray.length; i++) {

           var par = document.createElement('p');
            par.innerHTML = (songarray[i]);

            songlyrics.appendChild(par);
        }
       
        
        // songlyrics.innerHTML =(data.lyrics);

        // console.log(data.lyrics.split("\n"));
    })


})