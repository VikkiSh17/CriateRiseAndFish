
/*let*/ /*const NewHeader= document.querySelector('.NewHeader');
const h1=document.querySelector('.h1');
window.addEventListener('scroll', NewHeader);*/
/*NewHeaderVisible.addEventListener('scroll', scrollUndo);*/

/*function NewHeader() {*/
    
    /*document.getElementById('NewHeader').style.display = 'none';
    document.getElementById('NewHeader').style.display='block';
    let scroll=window.pageYOffset;*/

    /*if (scroll > h1) {
        window.scroll(0, -80);
        setTimeout(0, 0);
    }
    if (scroll < h1) {
        NewHeaderVisible.classList.add('NewHeader');
        document.getElementById('NewHeader').style.display = 'none';
        document.getElementById('NewHeader').style.visibility = "hidden";
    }*/

  /*  console.log(content.classList);
    if (NewHeader.classList.cantains('hidden')){
        if(scroll>h1){
            NewHeader.style.display='none';
        }
        if(scroll<h1){
            NewHeader.style.display='block';
        }
        else {
            NewHeader.classList.toggle('hidden');
        }
        
    }

}*/

$(documemt).ready(function() {
    const NewHeaderOffset = $('#NewHeader').offset().top;

    $(window).scroll(function() {
        
        const scrolled = $(this).scrollTop();

            if (scrolled > NewHeaderOffset) {
                $('#wrapper').addClass('NewHeaderFixed');

            } else if (scrolled < NewHeaderOffset) {
                $('#wrapper').removeClass('NewHeaderFixed');
            }

    });

});

