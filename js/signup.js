let passwords= Array.from(document.querySelectorAll('form input[type=password]')) 
// check if the passwords same before send the form data
document.forms[0].addEventListener('submit',(e)=>{
   let passwordCheck= passwords.reduce((p,c)=> p.value ==c.value)
   if(!passwordCheck){
        p.textContent="adgangskode er ikke lig med"
        if(submitBtn.nextElementSibling.className !=='errorMessage'){
            passwords.map(e=> e.classList.add('inputIsEmpty'))
            submitBtn.after(p)
        }
        e.preventDefault();
    }
})