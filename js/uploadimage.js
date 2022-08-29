function uploadProfile() {
    console.log(firebase);
    //get your select image
    var image = document.getElementById("adminImage").files[0];
    //now get your image name
    var imageName = image.name;
    //firebase storage reference
    //it is the path where your image will store
    var storageRef = firebase.storage().ref('adminImage/' + imageName);
    //upload image to selected storage reference

    var uploadTask = storageRef.put(image);

    uploadTask.on('state_changed', function (snapshot) {
        //observer state chang events such as progress , pause , resume
        //get task progress by including the number of bytes uploaded and total
        //number of bytes
        var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
        console.log("upload is " + progress + "done");
    }, function (error) {
        //handle error here
        console.log(error.message);
    }, function () {
        //handle successful upload on complete
        uploadTask.snapshot.ref.getDownloadURL().then(function (getDownloadURL) {
            //get your upload image url here
            //console.log(getDownloadURL);
            document.getElementById('adminImageURL').value = getDownloadURL;
            document.getElementById('message').innerHTML = "อัพโหลดรูปภาพสำเร็จ";
        });
    });
}


