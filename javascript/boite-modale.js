(function(){
    
    let boite__modale=document.querySelector('.boite__modale')
    let boite__modale__ferme= document.querySelector('.boite__modale__ferme')
    let boite__modale__text= document.querySelector('.boite__modale__text')
    let cours__desc__suite = document.querySelectorAll('.cours__desc__suite')
    let cours__desc__complet= document.querySelector('.boite__modale__ferme')
    console.log('collection_bout_suite = ' +  cours__desc__suite .length)

    for (const bouton of  cours__desc__suite ) {
        bouton.addEventListener('mousedown', function(){
            console.log(this.tagName)
            boite__modale.classList.add('boite__modale__ouvrir')
            console.log(this.parentNode.parentNode.children[0].innerHTML)
            boite__modale__text.innerHTML=this.parentNode.parentNode.children[0].innerHTML;
        })
    }
    boite__modale__ferme.addEventListener('mousedown', function(){
        
        boite__modale.classList.remove('boite__modale__ouvrir')jkb
    })

})()