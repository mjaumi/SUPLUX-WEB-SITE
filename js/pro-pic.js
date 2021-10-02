function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            var v = e.target.result;
            
            
            // $(document).ready(function () {
            //     createCookie("height", "hi from saleh", "10");
            //   });
              
            //   function createCookie(name, value, days) {
            //     var expires;
            //     if (days) {
            //       var date = new Date();
            //       date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            //       expires = "; expires=" + date.toGMTString();
            //     }
            //     else {
            //       expires = "";
            //     }
            //     document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
            //   }
            
            
            
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);

});




