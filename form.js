 const submitBtn = document.querySelector('submit-btn');
 const name = document.querySelector('#name');
 const email = document.querySelector('#email');
 const password = document.querySelector('#password');

 submitBtn.addEventListener('click', () => {
     loader.style.display = 'block';
     sendData('/signUp', {
         name: name.value,
         email: email.value,
         password: password.value
     })
 })

 const showAlert = (msg) => {
     let alertMsg = document.querySelector('alert-msg');
     alertMsg.innerHTML = msg;
     alertMsg.classList.add('show');
     setTimeout(() => {
        alertMsg.classList.remove('show');
     }, 3000)
 }

 // send data function
 const sendData = (path, data) => {
     fetch(path, {
         method: 'POST',
         headers: new Headers({'Content-Type': 'application/json'}),
         body: JSON.stringify(data)
     }).then((res) => res.json())
     .then(response => {
         processData(response);
     })
 }

 const processData = (data) => {
     loader.style.display = null;
     if(data.alert){
         showAlert(data.alert);
     }
 }