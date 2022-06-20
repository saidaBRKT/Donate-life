//Add

const na_me=document.getElementById("name");
const phone=document.getElementById("phone");
const age=document.getElementById("age");
const male=document.getElementById("male");
const femal=document.getElementById("female");

function validateInput(ev){
    //check name
    if(na_me.value.trim()===""){
        onError(na_me,"Name cannot be empty!")
        ev.preventDefault();
        }else{
            if(!isValidName(na_me.value.trim())){
                onError(na_me,"Name is not valid")
                ev.preventDefault();
            }else{
                onSuccess(na_me);
            }
        }

    if(age.value.trim()===""){
        onError(age,"age cannot be empty!")
        ev.preventDefault();
        }else{
            if(age.value<0 || age.value>150)
            {
                onError(age,"Age > 0");
                ev.preventDefault();
            }
            else{
                onSuccess(age);
            }
        }
    

            if(phone.value.trim()===""){
                onError(phone,"Phone cannot be empty!")
                ev.preventDefault();
                }else{
                    if(!isValidTel(phone.value.trim())){
                        onError(phone,"Phone is not valid")
                        ev.preventDefault();
                    }else{
                        onSuccess(phone);
                    }
                }
                
        if(!male.checked && !femal.checked){
            document.getElementById("RB").innerText = 'Gender cannot be not checked!';
            }
        else{
            document.getElementById("RB").innerText = ''
            }
}
 

document.getElementById("myF").addEventListener("submit",(e)=>{
    validateInput(e);
});

function onSuccess(input){
    let parent=input.parentElement;
    let messageEl=parent.querySelector("small");
    messageEl.style.visibility="hidden";
    messageEl.innerText="";
}
function onError(input,message){
    let parent=input.parentElement;
    let messageEl=parent.querySelector("small");
    messageEl.style.visibility="visible";
    messageEl.style.color="red";
    messageEl.innerText=message;
}

function isValidEmail(email){
    return /^\w+@\w+(.\w+){1,3}$/.test(email); 
}
function isValidCin(cin){
    return /^[A-Z]{1,2}[0-9]{4,9}$/.test(cin); 
}
// function isValidName(name){
//     return /^[a-z\d]{3,}$/.test(name); 
// }
function isValidName(name){
    return /^[a-zA-Z\-]{4,}$/.test(name); 
}
function isValidTel(tel){
    return /^(\(\+\d{1,3}\)\s[0]?|[0])[56]([\s-]\d{2}){4}$/.test(tel) 
}

