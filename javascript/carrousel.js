/*(function(){
    
    let boite__carrousel=document.querySelector('.boite__carrousel')
    let boite__carrousel__ferme= document.querySelector('.boite__carrousel__ferme')    
    let boite__carrousel__navigation= document.querySelector('.boite__carrousel__navigation')
    let boite__carrousel__img= document.querySelector('.boite__carrousel__img')
   let galerie__img= document.querySelectorAll('.galerie img')
   console.log(galerie__img.length)
  
    let index = 0
    
        
    
    for (const img of galerie__img) {
        //let timer = document.createElement('setTimeout')
        let button = document.createElement('input')
        button.setAttribute('type', 'radio')
        button.setAttribute('checked','')
        button.setAttribute('name','bouton')
        button.setAttribute('class','bouton')
        button.dataset.index= index++
        boite__carrousel__navigation.append(button)

        let dom_image = document.createElement('img')
        dom_image.setAttribute('src',img.getAttribute('src'))
        boite__carrousel__img.append(dom_image)
//insertion des eleimg de la galeie 
        button.addEventListener('mousedown', function(){
            dom_image.setAttribute('src', galerie__img[this.dataset.index].getAttribute('src'))

}
)
        img.addEventListener('mousedown', function(){
            console.log(this.tagName)
            boite__carrousel.classList.add('boite__carrousel__ouvrir')
            console.log(this.getAttribute('src'))
            dom_image.setAttribute('src',this.getAttribute('src'))
            
        })
    }
    boite__carrousel__ferme.addEventListener('mousedown', function(){
        
        boite__carrousel.classList.remove('boite__carrousel__ouvrir')
    })

})*/
(function(){
    console.log("le carrousel")
    let boite__carrousel=document.querySelector('.boite__carrousel')
    let boite__carrousel__ferme= document.querySelector('.boite__carrousel__ferme')    
    let boite__carrousel__navigation= document.querySelector('.boite__carrousel__navigation')
    let boite__carrousel__img= document.querySelector('.boite__carrousel__img')
   let galerie__img= document.querySelectorAll('.galerie img')
   console.log(galerie__img.length)
  
    let index = 0
    
        
    
    for (const img of galerie__img) {
        let dom_image = document.createElement('img')
        dom_image.setAttribute('src', img.getAttribute('src'))
        boite__carrousel__img.append(dom_image)
        //let timer = document.createElement('setTimeout')
        let button = document.createElement('input')
        button.setAttribute('type', 'radio')
        button.setAttribute('checked',false)
        button.setAttribute('name','bouton')
        button.setAttribute('class','bouton')
        button.dataset.index= index
        boite__carrousel__navigation.append(button)

       
       
       
//insertion des eleimg de la galeie 
        button.addEventListener('change', function(e){
            e.preventDefault
            enleverclassimg()
            
            boite__carrousel__img.children[this.dataset.index].classList.remove('img--ouvrir')
            boite__carrousel__img.children[this.dataset.index].classList.add('img--ouvrir')
            //dom_image.setAttribute('src', galerie__img[this.dataset.index].getAttribute('src'))
            
            

}
)
        img.addEventListener('mousedown', function(){
            boite__carrousel__navigation.children[0].checked=true
            
            //console.log(this.tagName)
            boite__carrousel.classList.add('boite__carrousel__ouvrir')
           // console.log(this.getAttribute('src'))
           // dom_image.setAttribute('src',this.getAttribute('src'))
           
            boite__carrousel__img.children[0].classList.add('img--ouvrir')
           
        
            
        })
        index++
       
    }
    boite__carrousel__ferme.addEventListener('mousedown', function(){
        
        boite__carrousel.classList.remove('boite__carrousel__ouvrir')
        
        
    })
    function enleverclassimg(){
        boite__carrousel__img.children[0].classList.remove('img--ouvrir')
            boite__carrousel__img.children[1].classList.remove('img--ouvrir')
            boite__carrousel__img.children[2].classList.remove('img--ouvrir')
            boite__carrousel__img.children[3].classList.remove('img--ouvrir')
            boite__carrousel__img.children[4].classList.remove('img--ouvrir')
    }
})()
