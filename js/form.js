let inputBlocks= document.querySelectorAll('form .inputBlock')
let inputs= Array.from(document.querySelectorAll('form input'))
let passwords= Array.from(document.querySelectorAll('form .password'))
let submitBtn= document.querySelector('form button')
// 
inputBlocks.forEach(e=> {
    let inp =e.querySelector('input')
    let eyeIcon= e.querySelector('.eyeIcon')
    inp.addEventListener('keyup',e=>{
        inp.classList.remove('inputIsEmpty')
        if(!inp.value){
            inp.classList.add('inputIsEmpty');
        }
    })
    // don`t write "e" if input type is number
    if(inp.type=="number"){
        inp.onkeydown = ()=>{return event.keyCode !== 69;}
    }
    // Show and hide the password with the "click" event
    if(inp.className=="password"){
        eyeIcon.addEventListener('click',()=>{
            if(inp.type=="password"){
                inp.type='text';
                eyeIcon.textContent='visibility'
            }else{
                eyeIcon.textContent='visibility_off'
                inp.type='password'
            }
        })
    }
});
console.log(passwords.length)

// check data before send there 
document.forms[0].addEventListener('submit',e=>{

    let inputsCheck= inputs.every(e=> e.value);// check if all data not empty#
    errorMessage= document.createElement('p')
    errorMessage.classList="errorMessage"
    
    let passwordCheck=true;
    if(passwords.length>1){
        passwordCheck= passwords.reduce((p,c)=> p.value ==c.value)// check if password is same
    }
    let emailValidated=true;
    // check if the email is validated
    inputs.map(e=> e.className=='email'?emailValidated=e.value.match(/[a-z0-9]+@[a-z]+\.[a-z]{2,3}/g): "")
    // check if them message  element is already append
    if(!passwordCheck){
        // check if the password is same
        errorMessage.textContent='venligst udfylde alle fjer'
        passwords.map(ele=> ele.classList.add('inputIsEmpty'))
        console.log("password")

        e.preventDefault()
    } 
    if(!emailValidated ){
        passwords.map(ele=> ele.classList.remove('inputIsEmpty'))
        // show the user in wich input is the error
        inputs.map(e=>{e.className == "email"?  e.classList.add("inputIsEmpty"):"" })
        errorMessage.textContent='mailen er ikke valideret'
        console.log('email')        
        e.preventDefault()
    }
   
    if(!inputsCheck){
        
        inputs.map(e=>{;!e.value? e.classList.add("inputIsEmpty"):""})
        errorMessage.textContent='venligst udfylde alle fjer'
        console.log('empty')
        e.preventDefault()
    } 
  
    checkNextElement = submitBtn.nextElementSibling||""

    if(checkNextElement.className!=="errorMessage"&&errorMessage.textContent!==""){
        console.log(errorMessage.textContent=="")
        submitBtn.after(errorMessage)
    }
})
console.log('hallo');