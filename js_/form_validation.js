const isRequired = (value) => (value === "" ? false : true);
const isBetween = (length, min, max) =>
  length < min || length > max ? false : true;
const isEmailValid = (email) => {
  const re =
    /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
};
const isPasswordSecure = (password) => {
  const re = new RegExp(
    "^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*])(?=.{8,})"
  );
  return re.test(password);
};
const isPhoneValid = (phone) => {
  const re = /^((\+212|0)([ \-_/]*)(\d[ \-_/]*){9})$/;
  return re.test(phone);
};
const isLettersValid = (input) => {
  const re = /^[a-zA-Z ]+$/;
  return re.test(input);
};
const checkName = (input) => {
  let valid = false;
  let errorMessage = null;

  if (!isRequired(input)) {
    valid = false;
    errorMessage = "Ce champ ne peut pas être vide";
  } else if (!isLettersValid(input)) {
    valid = false;
    errorMessage = "Ce champ ne doit contenir que des lettres";
  } else if (marque.trim() === "") {
    valid = false;
    errorMessage = "Les espaces ne sont pas valides ";
  } else {
    valid = true;
    errorMessage = null;
  }
  return { valid, errorMessage };
};
const checkRequired = (input) => {
  let valid = false;
  let errorMessage = null;

  if (!isRequired(input)) {
    valid = false;
    errorMessage = "Ce champ ne peut pas être vide";
  } else if (marque.trim() === "") {
    valid = false;
    errorMessage = "Les espaces ne sont pas valides ";
  } else {
    valid = true;
    errorMessage = null;
  }
  return { valid, errorMessage };
};
const checkEmail = (input) => {
  let valid = false;
  let errorMessage = null;
  if (!isRequired(input)) {
    valid = false;
    errorMessage = "Ce champ ne peut pas être vide";
  } else if (!isEmailValid(input)) {
    valid = false;
    errorMessage = "Email non valide";
  } else if (marque.trim() === "") {
    valid = false;
    errorMessage = "Les espaces ne sont pas valides ";
  } else {
    valid = true;
    errorMessage = null;
  }
  return { valid, errorMessage };
};

const checkPhone = (input) => {
  let valid = false;
  let errorMessage = null;
  if (!isRequired(input)) {
    valid = false;
    errorMessage = "Ce champ ne peut pas être vide";
  } else if (!isPhoneValid(input)) {
    valid = false;
    errorMessage = "Le N° de téléphone est non valide";
  } else if (marque.trim() === "") {
    valid = false;
    errorMessage = "Les espaces ne sont pas valides ";
  } else {
    valid = true;
    errorMessage = null;
  }
  return { valid, errorMessage };
};

const checkPassword = (input) => {
  let valid = false;
  let errorMessage = null;

  if (!isRequired(input)) {
    valid = false;
    errorMessage = "Ce champ ne peut pas être vide";
  } else if (marque.trim() === "") {
    valid = false;
    errorMessage = "Les espaces ne sont pas valides ";
  } else if (!isPasswordSecure(input)) {
    valid = false;
    errorMessage =
      "Le mot de passe doit contenir au moins 8 caractères, dont au moins 1 caractère minuscule, 1 caractère majuscule, 1 chiffre et 1 caractère spécial dans (!@#$%^&*)";
  } else {
    valid = true;
    errorMessage = null;
  }

  return { valid, errorMessage };
};

const checkConfirmPassword = (pwd, confirmpwd) => {
  let valid = false;
  let errorMessage = null;

  if (!isRequired(confirmpwd)) {
    valid = false;
    errorMessage = "Ce champ ne peut pas être vide";
  } else if (pwd !== confirmpwd) {
    valid = false;
    errorMessage = "Les mots de passes ne sont pas compatibles";
  } else {
    valid = true;
    errorMessage = null;
  }

  return { valid, errorMessage };
};

const checkDate = (date_demande) => {
  let valid = false;
  let errorMessage = null;
  if (!isRequired(date_demande)) {
    valid = false;
    errorMessage = "Vous devez entrer une date de demande";
  } else {
    valid = true;
    errorMessage = null;
  }

  return { valid, errorMessage };
};

const checkLocalisation = (localisation) => {
  let valid = false;
  let errorMessage = null;
  if (!isRequired(localisation)) {
    valid = false;
    errorMessage = "Vous devez entrer une localisation valide";
  } else if (localisation.trim() === "") {
    valid = false;
    errorMessage = "Les espaces ne sont pas valides ";
  } else {
    valid = true;
    errorMessage = null;
  }

  return { valid, errorMessage };
};

const checkDestination = (destination) => {
  let valid = false;
  let errorMessage = null;
  if (!isRequired(destination)) {
    valid = false;
    errorMessage = "Vous devez entrer une destination valide";
  } else if (destination.trim() === "") {
    valid = false;
    errorMessage = "Les espaces ne sont pas valides ";
  } else {
    valid = true;
    errorMessage = null;
  }

  return { valid, errorMessage };
};

const checkDescriptionDepannage = (description_Panne) => {
  let valid = false;
  let errorMessage = null;
  if (!isRequired(description_Panne)) {
    valid = false;
    errorMessage = "Vous devez entrer une description";
  } else if (description_Panne.trim() === "") {
    valid = false;
    errorMessage = "Les espaces ne sont pas valides ";
  } else {
    valid = true;
    errorMessage = null;
  }

  return { valid, errorMessage };
};

const checkMarque = (marque) => {
  let valid = false;
  let errorMessage = null;
  if (!isRequired(marque)) {
    valid = false;
    errorMessage = "Vous devez entrer une marque";
  } else if (marque.trim() === "") {
    valid = false;
    errorMessage = "Les espaces ne sont pas valides ";
  } else {
    valid = true;
    errorMessage = null;
  }

  return { valid, errorMessage };
};

const checkExigence = (exigence) => {
  let valid = false;
  let errorMessage = null;
  if (!isRequired(exigence)) {
    valid = false;
    errorMessage = "Vous devez décrire vos exigences";
  } else if (exigence.trim() === "") {
    valid = false;
    errorMessage = "Les espaces ne sont pas valides ";
  } else {
    valid = true;
    errorMessage = null;
  }

  return { valid, errorMessage };
};

const checkDimensions = (dimension) => {
  let valid = false;
  let errorMessage = null;
  if (!isRequired(dimension)) {
    valid = false;
    errorMessage = "Vous devez saisir vos dimensions";
  } else if (dimension.trim() === "") {
    valid = false;
    errorMessage = "Les espaces ne sont pas valides ";
  } else if (isNaN(parseFloat(dimension))) {
    valid = false;
    errorMessage = "Les dimensions doivent contenir que des nombres ";
  } else {
    valid = true;
    errorMessage = null;
  }

  return { valid, errorMessage };
};

function checkform_Connexion() {
  var validForm_Connexion = false;
  var email = document.getElementById("email_connexion").value;
  var mdp = document.getElementById("password").value;

  var validEmail = checkEmail(email);
  var validMDP = checkRequired(mdp);

  validForm = validEmail.valid && validMDP.valid;

  if (!validEmail.valid) {
    document.getElementById("email_connexion-error-message").innerHTML =
      validEmail.errorMessage;
    document.getElementById("email_connexion").style.borderColor = "red";
  } else {
    document.getElementById("email_connexion-error-message").innerHTML = "";
    document.getElementById("email_connexion").style.borderColor = "";
  }

  if (!validMDP.valid) {
    document.getElementById("password-error-message").innerHTML =
      validMDP.errorMessage;
    document.getElementById("password").style.borderColor = "red";
  } else {
    document.getElementById("password-error-message").innerHTML = "";
    document.getElementById("password").style.borderColor = "";
  }
  return validForm;
}

function checkform_inscription() {
  var validForm = false;
  var firstname = document.getElementById("firstname").value;
  var lastname = document.getElementById("lastname").value;
  var email = document.getElementById("email").value;
  var cin = document.getElementById("cin").value;
  var mdp = document.getElementById("mdp").value;
  var confirm_mdp = document.getElementById("confirm-mdp").value;
  var phone = document.getElementById("phone").value;

  var validFirstName = checkName(firstname);
  var validLastName = checkName(lastname);
  var validEmail = checkEmail(email);
  var validCIN = checkRequired(cin);
  var validMDP = checkPassword(mdp);
  var validConfirmMDP = checkConfirmPassword(mdp, confirm_mdp);
  var validPhone = checkPhone(phone);

  validForm =
    validFirstName.valid &&
    validLastName.valid &&
    validEmail.valid &&
    validMDP.valid &&
    validConfirmMDP.valid &&
    validCIN.valid;
  //firstname
  if (!validFirstName.valid) {
    document.getElementById("firstname-error-message").innerHTML =
      validFirstName.errorMessage;
    document.getElementById("firstname").style.borderColor = "red";
  } else {
    document.getElementById("firstname-error-message").innerHTML = "";
    document.getElementById("firstname").style.borderColor = "";
  }
  //lastname
  if (!validLastName.valid) {
    document.getElementById("lastname-error-message").innerHTML =
      validLastName.errorMessage;
    document.getElementById("lastname").style.borderColor = "red";
  } else {
    document.getElementById("lastname-error-message").innerHTML = "";
    document.getElementById("lastname").style.borderColor = "";
  }
  //email
  if (!validEmail.valid) {
    document.getElementById("email-error-message").innerHTML =
      validEmail.errorMessage;
    document.getElementById("email").style.borderColor = "red";
  } else {
    document.getElementById("email-error-message").innerHTML = "";
    document.getElementById("email").style.borderColor = "";
  }
  //cin
  if (!validCIN.valid) {
    document.getElementById("cin-error-message").innerHTML =
      validCIN.errorMessage;
    document.getElementById("cin").style.borderColor = "red";
  } else {
    document.getElementById("cin-error-message").innerHTML = "";
    document.getElementById("cin").style.borderColor = "";
  }
  //mdp
  if (!validMDP.valid) {
    document.getElementById("mdp-error-message").innerHTML =
      validMDP.errorMessage;
    document.getElementById("mdp").style.borderColor = "red";
  } else {
    document.getElementById("mdp-error-message").innerHTML = "";
    document.getElementById("mdp").style.borderColor = "";
  }
  //confirm mdp
  if (!validConfirmMDP.valid) {
    document.getElementById("confirm-mdp-error-message").innerHTML =
      validConfirmMDP.errorMessage;
    document.getElementById("confirm-mdp").style.borderColor = "red";
  } else {
    document.getElementById("confirm-mdp-error-message").innerHTML = "";
    document.getElementById("confirm-mdp").style.borderColor = "";
  }
  //phone
  if (!validPhone.valid) {
    document.getElementById("phone-error-message").innerHTML =
      validPhone.errorMessage;
    document.getElementById("phone").style.borderColor = "red";
  } else {
    document.getElementById("phone-error-message").innerHTML = "";
    document.getElementById("phone").style.borderColor = "";
  }
  return validForm;
}

function checkform_Remorquage() {
  let validForm_Remo = false;

  const date = document.getElementById("date_demande").value;
  const localisation = document.getElementById("localisation").value;
  const destination = document.getElementById("destination").value;

  const validDate = checkDate(date);
  const validLocalisation = checkLocalisation(localisation);
  const validDestination = checkDestination(destination);

  validForm_Remo =
    validDate.valid && validLocalisation.valid && validDestination.valid;

  if (!validDate.valid) {
    document.getElementById("date-error-message").innerHTML =
      validDate.errorMessage;
    document.getElementById("date_demande").style.borderColor = "red";
  } else {
    document.getElementById("date-error-message").innerHTML = "";
    document.getElementById("date_demande").style.borderColor = "";
  }

  if (!validLocalisation.valid) {
    document.getElementById("localisation-error-message").innerHTML =
      validLocalisation.errorMessage;
    document.getElementById("localisation").style.borderColor = "red";
  } else {
    document.getElementById("localisation-error-message").innerHTML = "";
    document.getElementById("localisation").style.borderColor = "";
  }

  if (!validDestination.valid) {
    document.getElementById("destination-error-message").innerHTML =
      validDestination.errorMessage;
    document.getElementById("destination").style.borderColor = "red";
  } else {
    document.getElementById("destination-error-message").innerHTML = "";
    document.getElementById("destination").style.borderColor = "";
  }

  return validForm_Remo;
}

function checkform_Depannage() {
  let validForm_Depannage = false;

  const description_Panne = document.getElementById("description_Panne").value;
  const date = document.getElementById("date").value;
  const localisation = document.getElementById("localisation_dep").value;

  const validDescriptionPanne = checkDescriptionDepannage(description_Panne);
  const validDate = checkDate(date);
  const validLocalisation = checkLocalisation(localisation);

  validForm_Depannage =
    validDescriptionPanne.valid && validDate.valid && validLocalisation.valid;

  if (!validDescriptionPanne.valid) {
    document.getElementById("description_Panne-error-message").innerHTML =
      validDescriptionPanne.errorMessage;
    document.getElementById("description_Panne").style.borderColor = "red";
  } else {
    document.getElementById("description_Panne-error-message").innerHTML = "";
    document.getElementById("description_Panne").style.borderColor = "";
  }

  if (!validDate.valid) {
    document.getElementById("date_dem-error-message").innerHTML =
      validDate.errorMessage;
    document.getElementById("date").style.borderColor = "red";
  } else {
    document.getElementById("date_dem-error-message").innerHTML = "";
    document.getElementById("date").style.borderColor = "";
  }

  if (!validLocalisation.valid) {
    document.getElementById("localisation_dep-error-message").innerHTML =
      validLocalisation.errorMessage;
    document.getElementById("localisation_dep").style.borderColor = "red";
  } else {
    document.getElementById("localisation_dep-error-message").innerHTML = "";
    document.getElementById("localisation_dep").style.borderColor = "";
  }

  return validForm_Depannage;
}

function checkform_Deverouillage() {
  let validForm_Deverouillage = false;

  const date = document.getElementById("date_dev").value;
  const localisation = document.getElementById("localisation_dev").value;

  const validDate = checkDate(date);
  const validLocalisation = checkLocalisation(localisation);

  validForm_Deverouillage = validDate.valid && validLocalisation.valid;

  if (!validDate.valid) {
    document.getElementById("date_dev-error-message").innerHTML =
      validDate.errorMessage;
    document.getElementById("date_dev").style.borderColor = "red";
  } else {
    document.getElementById("date_dev-error-message").innerHTML = "";
    document.getElementById("date_dev").style.borderColor = "";
  }

  if (!validLocalisation.valid) {
    document.getElementById("localisation_dev-error-message").innerHTML =
      validLocalisation.errorMessage;
    document.getElementById("localisation_dev").style.borderColor = "red";
  } else {
    document.getElementById("localisation_dev-error-message").innerHTML = "";
    document.getElementById("localisation_dev").style.borderColor = "";
  }

  return validForm_Deverouillage;
}

function checkform_Reparation_Roue() {
  let validForm_Reparation_Roue = false;
  const marque_vehicule = document.getElementById("marque_vehicule").value;
  const marque_roue = document.getElementById("marque_roue").value;
  const diametre_roue = document.getElementById("diametre_roue").value;
  const hauteur_roue = document.getElementById("hauteur_roue").value;
  const largeur_roue = document.getElementById("largeur_roue").value;
  const date = document.getElementById("date_Reparation_Roue").value;
  const localisation = document.getElementById(
    "localisation_Reparation_Roue"
  ).value;

  const validMarqueVehicule = checkMarque(marque_vehicule);
  const validMarqueRoue = checkMarque(marque_roue);
  const validDiametreRoue = checkDimensions(diametre_roue);
  const validHauteurRoue = checkDimensions(hauteur_roue);
  const validLargeurRoue = checkDimensions(largeur_roue);
  const validDate = checkDate(date);
  const validLocalisation = checkLocalisation(localisation);

  validForm_Reparation_Roue =
    validMarqueVehicule.valid &&
    validMarqueRoue.valid &&
    validDiametreRoue.valid &&
    validHauteurRoue.valid &&
    validLargeurRoue.valid &&
    validDate.valid &&
    validLocalisation.valid;

  if (!validMarqueVehicule.valid) {
    document.getElementById("marque_vehicule-error-message").innerHTML =
      validMarqueVehicule.errorMessage;
    document.getElementById("marque_vehicule").style.borderColor = "red";
  } else {
    document.getElementById("marque_vehicule-error-message").innerHTML = "";
    document.getElementById("marque_vehicule").style.borderColor = "";
  }

  if (!validMarqueRoue.valid) {
    document.getElementById("marque_roue-error-message").innerHTML =
      validMarqueRoue.errorMessage;
    document.getElementById("marque_roue").style.borderColor = "red";
  } else {
    document.getElementById("marque_roue-error-message").innerHTML = "";
    document.getElementById("marque_roue").style.borderColor = "";
  }

  if (!validDiametreRoue.valid) {
    document.getElementById("diametre_roue-error-message").innerHTML =
      validDiametreRoue.errorMessage;
    document.getElementById("diametre_roue").style.borderColor = "red";
  } else {
    document.getElementById("diametre_roue-error-message").innerHTML = "";
    document.getElementById("diametre_roue").style.borderColor = "";
  }

  if (!validHauteurRoue.valid) {
    document.getElementById("hauteur_roue-error-message").innerHTML =
      validHauteurRoue.errorMessage;
    document.getElementById("hauteur_roue").style.borderColor = "red";
  } else {
    document.getElementById("hauteur_roue-error-message").innerHTML = "";
    document.getElementById("hauteur_roue").style.borderColor = "";
  }

  if (!validLargeurRoue.valid) {
    document.getElementById("largeur_roue-error-message").innerHTML =
      validLargeurRoue.errorMessage;
    document.getElementById("largeur_roue").style.borderColor = "red";
  } else {
    document.getElementById("largeur_roue-error-message").innerHTML = "";
    document.getElementById("largeur_roue").style.borderColor = "";
  }

  if (!validDate.valid) {
    document.getElementById("date_Reparation_Roue-error-message").innerHTML =
      validDate.errorMessage;
    document.getElementById("date_Reparation_Roue").style.borderColor = "red";
  } else {
    document.getElementById("date_Reparation_Roue-error-message").innerHTML =
      "";
    document.getElementById("date_Reparation_Roue").style.borderColor = "";
  }

  if (!validLocalisation.valid) {
    document.getElementById(
      "localisation_Reparation_Roue-error-message"
    ).innerHTML = validLocalisation.errorMessage;
    document.getElementById("localisation_Reparation_Roue").style.borderColor =
      "red";
  } else {
    document.getElementById(
      "localisation_Reparation_Roue-error-message"
    ).innerHTML = "";
    document.getElementById("localisation_Reparation_Roue").style.borderColor =
      "";
  }

  return validForm_Reparation_Roue;
}

function checkform_Recharge_Batterie() {
  let validForm_Recharge_Batterie = false;

  const date = document.getElementById("date_recharge_batterie").value;
  const localisation = document.getElementById(
    "localisation_recharge_batterie"
  ).value;

  const validDate = checkDate(date);
  const validLocalisation = checkLocalisation(localisation);

  validForm_Recharge_Batterie = validDate.valid && validLocalisation.valid;

  if (!validDate.valid) {
    document.getElementById("date_recharge_batterie-error-message").innerHTML =
      validDate.errorMessage;
    document.getElementById("date_recharge_batterie").style.borderColor = "red";
  } else {
    document.getElementById("date_recharge_batterie-error-message").innerHTML =
      "";
    document.getElementById("date_recharge_batterie").style.borderColor = "";
  }

  if (!validLocalisation.valid) {
    document.getElementById(
      "localisation_recharge_batterie-error-message"
    ).innerHTML = validLocalisation.errorMessage;
    document.getElementById(
      "localisation_recharge_batterie"
    ).style.borderColor = "red";
  } else {
    document.getElementById(
      "localisation_recharge_batterie-error-message"
    ).innerHTML = "";
    document.getElementById(
      "localisation_recharge_batterie"
    ).style.borderColor = "";
  }

  return validForm_Recharge_Batterie;
}

function checkform_Ravitaillement() {
  let validForm_Ravitaillement = false;

  const date = document.getElementById("date_Ravitaillement").value;
  const localisation = document.getElementById(
    "localisation_Ravitaillement"
  ).value;

  const validDate = checkDate(date);
  const validLocalisation = checkLocalisation(localisation);

  validForm_Ravitaillement = validDate.valid && validLocalisation.valid;

  if (!validDate.valid) {
    document.getElementById("date_Ravitaillement-error-message").innerHTML =
      validDate.errorMessage;
    document.getElementById("date_Ravitaillement").style.borderColor = "red";
  } else {
    document.getElementById("date_Ravitaillement-error-message").innerHTML = "";
    document.getElementById("date_Ravitaillement").style.borderColor = "";
  }

  if (!validLocalisation.valid) {
    document.getElementById(
      "localisation_Ravitaillement-error-message"
    ).innerHTML = validLocalisation.errorMessage;
    document.getElementById("localisation_Ravitaillement").style.borderColor =
      "red";
  } else {
    document.getElementById(
      "localisation_Ravitaillement-error-message"
    ).innerHTML = "";
    document.getElementById("localisation_Ravitaillement").style.borderColor =
      "";
  }

  return validForm_Ravitaillement;
}

function checkform_Vidange() {
  let validForm_Vidange = false;
  const marque = document.getElementById("marque").value;
  const date = document.getElementById("date_Vidange").value;
  const exigence = document.getElementById("exigence").value;
  const localisation = document.getElementById("localisation_Vidange").value;

  const validMarque = checkMarque(marque);
  const validDate = checkDate(date);
  const validExigence = checkExigence(exigence);
  const validLocalisation = checkLocalisation(localisation);

  validForm_Vidange =
    validMarque.valid &&
    validDate.valid &&
    validExigence.valid &&
    validLocalisation.valid;

  if (!validMarque.valid) {
    document.getElementById("marque-error-message").innerHTML =
      validMarque.errorMessage;
    document.getElementById("marque").style.borderColor = "red";
  } else {
    document.getElementById("marque-error-message").innerHTML = "";
    document.getElementById("marque").style.borderColor = "";
  }

  if (!validDate.valid) {
    document.getElementById("date_Vidange-error-message").innerHTML =
      validDate.errorMessage;
    document.getElementById("date_Vidange").style.borderColor = "red";
  } else {
    document.getElementById("date_Vidange-error-message").innerHTML = "";
    document.getElementById("date_Vidange").style.borderColor = "";
  }

  if (!validExigence.valid) {
    document.getElementById("exigence-error-message").innerHTML =
      validExigence.errorMessage;
    document.getElementById("exigence").style.borderColor = "red";
  } else {
    document.getElementById("exigence-error-message").innerHTML = "";
    document.getElementById("exigence").style.borderColor = "";
  }

  if (!validLocalisation.valid) {
    document.getElementById("localisation_Vidange-error-message").innerHTML =
      validLocalisation.errorMessage;
    document.getElementById("localisation_Vidange").style.borderColor = "red";
  } else {
    document.getElementById("localisation_Vidange-error-message").innerHTML =
      "";
    document.getElementById("localisation_Vidange").style.borderColor = "";
  }

  return validForm_Vidange;
}

function checkform_Lavage() {
  let validForm_Lavage = false;

  const date = document.getElementById("date_Lavage").value;
  const localisation = document.getElementById("localisation_Lavage").value;

  const validDate = checkDate(date);
  const validLocalisation = checkLocalisation(localisation);

  validForm_Lavage = validDate.valid && validLocalisation.valid;

  if (!validDate.valid) {
    document.getElementById("date_Lavage-error-message").innerHTML =
      validDate.errorMessage;
    document.getElementById("date_Lavage").style.borderColor = "red";
  } else {
    document.getElementById("date_Lavage-error-message").innerHTML = "";
    document.getElementById("date_Lavage").style.borderColor = "";
  }

  if (!validLocalisation.valid) {
    document.getElementById("localisation_Lavage-error-message").innerHTML =
      validLocalisation.errorMessage;
    document.getElementById("localisation_Lavage").style.borderColor = "red";
  } else {
    document.getElementById("localisation_Lavage-error-message").innerHTML = "";
    document.getElementById("localisation_Lavage").style.borderColor = "";
  }

  return validForm_Lavage;
}
function checkform_Contact() {
  let validForm_contact = false;
  const name = document.getElementById("nomContact").value;
  const mail = document.getElementById("mailContact").value;
  const message = document.getElementById("messageContact").value;
  const validName = checkName(name);
  const validMail = checkEmail(mail);
  const validMessage = checkRequired(message);
  validForm_contact = validName.valid && validMail.valid && validMessage.valid;
  if (!validName.valid) {
    document.getElementById("name-contact-error-message").innerHTML =
      validName.errorMessage;
    document.getElementById("nomContact").style.borderColor = "red";
  } else {
    document.getElementById("name-contact-error-message").innerHTML = "";
    document.getElementById("nomContact").style.borderColor = "";
  }
  if (!validMail.valid) {
    document.getElementById("mail-contact-error-message").innerHTML =
      validMail.errorMessage;
    document.getElementById("mailContact").style.borderColor = "red";
  } else {
    document.getElementById("mail-contact-error-message").innerHTML = "";
    document.getElementById("mailContact").style.borderColor = "";
  }
  if (!validMessage.valid) {
    document.getElementById("message-contact-error-message").innerHTML =
      validMessage.errorMessage;
    document.getElementById("messageContact").style.borderColor = "red";
  } else {
    document.getElementById("message-contact-error-message").innerHTML = "";
    document.getElementById("messageContact").style.borderColor = "";
  }
  return validForm_contact;
}
