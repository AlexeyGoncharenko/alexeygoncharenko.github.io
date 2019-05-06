$(document).ready(function(){ 
    let last3Images = $('main .blogContent a:nth-last-child(-n+3)');
    let moreImagesBtn = $('main .moreImages');
    let imageVisible = false;

    moreImagesBtn.on('click', function(){
        if (imageVisible) {
            imageVisible = false;
            moreImagesBtn.text("More");
            last3Images.toggle('slow');
        } else {
            imageVisible = true;
            moreImagesBtn.text("Less");
            last3Images.toggle('slow');
        }
    });
});
