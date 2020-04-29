<section class="content_img_shared">
    <div class="together">
        <div class="together-title">{{ __('messages.together') }}</div>
        <div class="together-text">{{ __('messages.together_text') }}</div>
    </div>
    <div id="img_shared">
        <div style="background-image: url('{{ asset('img/camera.jpg') }}');" class="img"></div>
        <div style="background-image: url('{{ asset('img/camera.jpg') }}');" class="img"></div>
        <div style="background-image: url('{{ asset('img/camera.jpg') }}');" class="img"></div>
        <div style="background-image: url('{{ asset('img/camera.jpg') }}');" class="img"></div>
        <div style="background-image: url('{{ asset('img/camera.jpg') }}');" class="img"></div>
        <div style="background-image: url('{{ asset('img/camera.jpg') }}');" class="img"></div>
        <div style="background-image: url('{{ asset('img/camera.jpg') }}');" class="img"></div>
        <div style="background-image: url('{{ asset('img/camera.jpg') }}');" class="img"></div>
        <div style="background-image: url('{{ asset('img/camera.jpg') }}');" class="img"></div>
        <div style="background-image: url('{{ asset('img/camera.jpg') }}');" class="img"></div>
    </div>
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

var storage = firebase.storage().ref();
var storageRef = storage;


async function pageTokenExample(){

//get list image name on firebase store
var listRef = storageRef.child('Images');
var firstPage = await listRef.list({ maxResults: 10});
//show image

for (let i = 0; i < parent.children.length; i++) {
    let nameFile = firstPage['items'][i]['location']['path_'];
    //get link of image and add to page the images
    storageRef.child(nameFile).getDownloadURL().then(function(url) {
        parent.children[i].style.backgroundImage = "url('"+url+"')"; ;;
    });
}

};


pageTokenExample();






</script>

</section>