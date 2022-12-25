let inputBlocks= document.querySelectorAll('form .inputBlock')
let inputs= Array.from(document.querySelectorAll('form input'))
let submitBtn= document.querySelector('form button')
// convert the nodeList to an array
let p= document.createElement('p')
p.textContent= "venligst udfylde alle fjer";
p.className="errorMessage"

// check data before send there 
document.forms[0].addEventListener('submit',e=>{
    inputCheck= inputs.every(e=> e.value);
    if(!inputCheck ){
        if(submitBtn.nextElementSibling.className !=='errorMessage'){
            inputs.forEach(e=>{ !e.value? e.classList.add("inputIsEmpty"):""})
            submitBtn.after(p)
        }
        e.preventDefault()
    }
})
    
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
    if(inp.type=="password"){
        eyeIcon.addEventListener('click',()=>{
            if(inp.type=="password"){
                inp.type='text';
                eyeIcon.textContent='visibility_off'
            }else{
                eyeIcon.textContent='visibility'
                inp.type='password'
            }
          
           
        })
    }
});

