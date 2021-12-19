const conForm = document.querySelector('#con');
conForm.addEventListener('submit', (e) => {
    e.preventDefault();


    const email = conForm['mail'].value;
    const passe = conForm['pass'].value;

    console.log(email, passe);
})