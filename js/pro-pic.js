

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            v = btoa(e.target.result.substring(23));
            console.log(v);

            //window.location.href = "profile.php?=" + v;



            

            
            
            
            
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);

});


// $(document).ready(function () {
//                 createCookie("h", v, "10");
//               });
              
//               function createCookie(name, value, days) {
//                 var expires;
//                 if (days) {
//                   var date = new Date();
//                   date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
//                   expires = "; expires=" + date.toGMTString();
//                 }
//                 else {
//                   expires = "";
//                 }
//                 document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
//               }

           
            
            





