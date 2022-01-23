const formulario = document.getElementById('contact-form');
const fullName = document.getElementById('fname');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const subject = document.getElementById('subject');
const message = document.getElementById('message'),
nameError = document.querySelector('.name-error'),
emailError = document.querySelector('.email-error'),
phoneError = document.querySelector('.phone-error'),
subjectError = document.querySelector('.subject-error'),
messageError = document.querySelector('.message-error');
const btnSend = document.getElementById('btn-send');
const validacion = [fullName, email, phone, subject, message];

/*formulario.onsubmit = (e)=>{
    e.preventDefault();
}*/
function validateSubject(){
    subject.onkeyup = ()=>{
        let patter_name = /[^+\d]/g;
        if(!subject.value.match(patter_name)){
            subjectError.classList.remove('d-none');
            subjectError.textContent = `${subject.value} No es un asunto valido`;
        }
        if(subject.value === ''){
            subjectError.classList.add('d-none');
        }
    }    
}
function validateName(){
    fullName.onkeyup = ()=>{
    	///^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/g;
        let patter_name = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/g;
        if(!fullName.value.match(patter_name)){
            nameError.classList.remove('d-none');
            nameError.textContent = `${fullName.value} - No Es Valido`;
        }else{
            nameError.classList.add('d-none');
        }
        if(fullName.value === ''){
            nameError.classList.add('d-none');
        }
    }
}
function validatePhone(){
    phone.onkeyup = ()=>{
        let patter_num = /[^+\d]/g;
        if(phone.value.match(patter_num)){
            phoneError.classList.remove('d-none');
            phoneError.textContent = "Carácter Invalido";
        }else{
            phoneError.classList.add('d-none');
        }
        if(!phone.value.match(patter_num)){
            if(phone.value.length < 10){
                phoneError.classList.remove('d-none');
                phoneError.textContent = `El Telefono Debe Contener Entre 7 Y 10 Digitos`;
            }else if(phone.value.length > 10){
                phoneError.classList.remove('d-none');
                phoneError.textContent = `El Telefono Debe Contener Entre 7 Y 10 Digitos`;
            }else{
                phoneError.classList.add('d-none');
            }
        }
        if(phone.value.length == 7){
            phoneError.classList.add('d-none');
        }
        if(phone.value === ''){
            phoneError.classList.add('d-none');
        }
    }
}
 function validateEmail(){
    email.onkeyup = ()=>{
        let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if(!email.value.match(pattern)){
            emailError.classList.remove('d-none');
            emailError.innerText = `${email.value} - No Es Un Email Valido`;
        }else{
            emailError.classList.add('d-none');
        }
        if(email.value === ''){
            emailError.classList.add('d-none');
        }
    }
 }
 function validateMessage(){
    message.onkeyup = ()=>{
        let patter_name = /^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/g;
        if(!message.value.match(patter_name)){
            messageError.classList.remove('d-none');
            messageError.textContent = `Su Mensaje Debe Ser Claro, Y No Contener Números O Caracteres Especiales`;
        }else{
            messageError.classList.add('d-none');
        }
        if(message.value === ''){
            messageError.classList.add('d-none');
        }
    }
 }
function cleanInputs(){
    validacion.forEach(input => {
        return input.value = '';
    })
}
validateName();
validateEmail();
validatePhone();
validateSubject();
validateMessage();
btnSend.addEventListener('click', ()=>{
    const xhr = new XMLHttpRequest();
    xhr.open('POST', "./php/form.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status == 200){
                let data = xhr.response;
                console.log(data);
                if (data === "Mensaje enviado") {
                    cleanInputs();
                    location.href = "index.html";
                }else{
                    return;
                }
            }else{
                console.log('error')
            }
        }
    }
    let formData = new FormData(formulario);
    xhr.send(formData);
})