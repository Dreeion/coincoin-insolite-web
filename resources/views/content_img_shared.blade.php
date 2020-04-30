<section class="content_img_shared">
    <div class="together">
        <div class="together-title">{{ __('messages.together') }}</div>
        <div class="together-text">{{ __('messages.together_text') }}</div>
    </div>
    <div id="img_shared">
    </div>
    <button id="more_img">{{ __('messages.together_button') }}</button>
<script>

// Initialize Firebase
var config = {
    apiKey: "{{ config('services.firebase.api_key') }}",
    authDomain: "{{ config('services.firebase.auth_domain') }}",
    databaseURL: "{{ config('services.firebase.database_url') }}",
    storageBucket: "{{ config('services.firebase.storage_bucket') }}",
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
            newDivForImage.style.backgroundImage = "url('{{ asset('img/camera.jpg')}}')";
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

</script>

</section>
