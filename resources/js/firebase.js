var firebase = require('firebase/app');
require('firebase/firestore');
require('firebase/auth');
require('firebase/storage');

// Initialize Firebase
var config = {
    apiKey: "AIzaSyCJaKO8d4pkleshE5R2AWPi53eZ0DPGt3M",
    authDomain: "coincoininsolite-1cf37.firebaseapp.com",
    databaseURL: "https://coincoininsolite-1cf37.firebaseio.com",
    storageBucket: "coincoininsolite-1cf37.appspot.com",
};
firebase.initializeApp(config);

const parent = document.getElementById('img_shared');
const buttonMoreImg = document.getElementById('more_img');
const storageRef = firebase.storage().ref();
var nbrPage = 0

//give list of image 
async function getImage(nbrPage){
    //get list image name on firebase store
    var listRef = storageRef.child('Images');
    var firstPage = await listRef.list({ maxResults: 10});

    if(nbrPage > 0){
        getOtherImage(listRef, firstPage, nbrPage)
    }else{
        giveImageToHtml(firstPage, parent);
    }
};

//fonction récursive
async function getOtherImage(listRef, firstList, nbrPage){
    var secondPage = await listRef.list({
      maxResults: 10,
      pageToken: firstList.nextPageToken,
    });
    nbrPage -=1;
    if(nbrPage > 0){
        getOtherImage(listRef, secondPage, nbrPage)
    }else{
        giveImageToHtml(secondPage, parent);
    }
};

//insert link into the background of div
function giveImageToHtml(listImage, parent){
    for (let i = 0; i < listImage['items'].length; i++) {
        let nameFile = listImage['items'][i]['location']['path_'];
        //get link of image and add to page the images
        storageRef.child(nameFile).getDownloadURL().then(function(url) {
            //create the image
            var newDivForImage = document.createElement('div');
            newDivForImage.className = "img";
            newDivForImage.style.backgroundImage = "url('img/camera.jpg')";
            parent.appendChild(newDivForImage);

            //change background image when it's finish to load
            var bgImg = new Image();
            bgImg.onload = function(){
               newDivForImage.style.backgroundImage = 'url(' + bgImg.src + ')';
            };
            bgImg.src = url;
        });
    }
}

getImage(nbrPage);

buttonMoreImg.addEventListener('click', event => {
    nbrPage += 1;
    getImage(nbrPage);
});
