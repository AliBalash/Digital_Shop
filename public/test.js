// var page = 1;
//
//
// var btn = document.getElementById('btn');
// var box = document.getElementById('box');
//
// btn.addEventListener('click', function () {
//
// var ourRequest = new XMLHttpRequest();
// ourRequest.open('GET', 'https://learnwebcode.github.io/json-example/animals-'+page +'.json');
// ourRequest.onload = function (){
//     var ourData = JSON.parse(ourRequest.responseText);
//     renderHtml(ourData);
//     page++;
//
//     if (page > 3 ){
//         btn.style.display = 'none';
//     }
// }
//
//
// ourRequest.send();
//
// });
//
//
//
// function renderHtml(data){
//
//     var htmlString = '';
//
//     for (i = 0; i <data.length;i++){
//
//         htmlString += '<p>' + data[i].name + 'is a' + data[i].species+' And Foods are Likes ';
//         for (ii=0;ii<data[i].foods.likes.length;ii++){
//             htmlString += data[i].foods.likes[ii];
//             if (ii > 1){
//
//                 htmlString += ' and ';
//             }
//
//         }
//
//         htmlString += '; And Foods Dislikes are ';
//
//         for (ii=0;ii<data[i].foods.dislikes.length;ii++){
//             htmlString += data[i].foods.dislikes[ii];
//             if (ii>1){
//
//                 htmlString += ' and ';
//             }
//
//         }
//
//         htmlString += ' ;;</p>';
//
//
//     }
//
//     box.insertAdjacentHTML('beforeend',htmlString +'<hr>');
//     console.log(data);
// }

// ---------------------------------------------------------------------------------------------
var page = 1;


var btn = document.getElementById('btn');
var box = document.getElementById('box');

btn.addEventListener('click', function () {

    var ourRequest = new XMLHttpRequest();
    ourRequest.open('GET', 'http://localhost/home-services/public/api/test?page='+page);
    ourRequest.onload = function (){
        var ourData = JSON.parse(ourRequest.responseText);
        renderHtml(ourData);
        page++;

        if (page > 3 ){
            btn.style.display = 'none';
        }
    }


    ourRequest.send();

});



function renderHtml(data){

    var htmlString = '';

    for (i = 0; i <data.data.length;i++){
        htmlString += '<p> NAME: ' + data.data[i].name + '<br>EMAIL: ' + data.data[i].email+'<br> ROLE: '+data.data[i].role;
    }

    box.insertAdjacentHTML('beforeend',htmlString +'<hr>');
    console.log(data.data);
}

// --------------------------------------------------------------------------------------------------------------------
