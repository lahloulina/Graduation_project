function checkForm(event) {
    event.preventDefault(); // Empêche l'envoi du formulaire
    const email = document.querySelector('input[name="email"]');
    console.log(email); // Affiche l'élément input dans la console
    const password = document.querySelector('input[name="password"]');
    const emailAvertissement = document.querySelector('.connexion .avertissement:nth-of-type(1)');
    const passwordAvertissement = document.querySelector('.connexion .avertissement:nth-of-type(2)');
   
    // Vérifie si les champs sont vides
    if (email.value.trim() === '') {
      emailAvertissement.style.display = 'block';
    } else {
      emailAvertissement.style.display = 'none';
    }
  
    if (password.value.trim() === '') {
      passwordAvertissement.style.display = 'block';
    } else {
      passwordAvertissement.style.display = 'none';
    }
    
 }
  
    const form = document.querySelector('.connexion');
    form.addEventListener('submit', checkForm);
  