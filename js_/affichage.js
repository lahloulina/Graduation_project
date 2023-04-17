
//afficher et masquer les formulaires selon le boutton
 function afficherdepannage() {
    document.getElementById('depannageForm').style.display="block";
    document.getElementById('lavageForm').style.display="none";
    document.getElementById('portesForm').style.display="none";
    document.getElementById('carburantForm').style.display="none";
    document.getElementById('batterieForm').style.display="none";
    document.getElementById('remorquageForm').style.display="none";
    document.getElementById('reparation_rouesForm').style.display="none";
    document.getElementById('vidangeForm').style.display="none";
    
  } 
  
  function afficherlavage() {
    document.getElementById('depannageForm').style.display="none";
    document.getElementById('lavageForm').style.display="block";
    document.getElementById('portesForm').style.display="none";
    document.getElementById('carburantForm').style.display="none";
    document.getElementById('batterieForm').style.display="none";
    document.getElementById('remorquageForm').style.display="none";
    document.getElementById('reparation_rouesForm').style.display="none";
    document.getElementById('vidangeForm').style.display="none";
   }
  
  function afficherouverture() {
    document.getElementById('depannageForm').style.display="none";
    document.getElementById('lavageForm').style.display="none";
    document.getElementById('portesForm').style.display="block";
    document.getElementById('carburantForm').style.display="none";
    document.getElementById('batterieForm').style.display="none";
    document.getElementById('remorquageForm').style.display="none";
    document.getElementById('reparation_rouesForm').style.display="none";
    document.getElementById('vidangeForm').style.display="none";
  }
  
  function affichercarburant() {
    document.getElementById('depannageForm').style.display="none";
    document.getElementById('lavageForm').style.display="none";
    document.getElementById('portesForm').style.display="none";
    document.getElementById('carburantForm').style.display="block";
    document.getElementById('batterieForm').style.display="none";
    document.getElementById('remorquageForm').style.display="none";
    document.getElementById('reparation_rouesForm').style.display="none";
    document.getElementById('vidangeForm').style.display="none";
  }
  
  function afficherbatterie() {
    document.getElementById('depannageForm').style.display="none";
    document.getElementById('lavageForm').style.display="none";
    document.getElementById('portesForm').style.display="none";
    document.getElementById('carburantForm').style.display="none";
    document.getElementById('batterieForm').style.display="block";
    document.getElementById('remorquageForm').style.display="none";
    document.getElementById('reparation_rouesForm').style.display="none";
    document.getElementById('vidangeForm').style.display="none";
  }
  
  function afficherremorquage() {
    document.getElementById('depannageForm').style.display="none";
    document.getElementById('lavageForm').style.display="none";
    document.getElementById('portesForm').style.display="none";
    document.getElementById('carburantForm').style.display="none";
    document.getElementById('batterieForm').style.display="none";
    document.getElementById('remorquageForm').style.display="block";
    document.getElementById('reparation_rouesForm').style.display="none";
    document.getElementById('vidangeForm').style.display="none";
  }
  function afficherroues() {
    document.getElementById('depannageForm').style.display="none";
    document.getElementById('lavageForm').style.display="none";
    document.getElementById('portesForm').style.display="none";
    document.getElementById('carburantForm').style.display="none";
    document.getElementById('batterieForm').style.display="none";
    document.getElementById('remorquageForm').style.display="none";
    document.getElementById('reparation_rouesForm').style.display="block";
    document.getElementById('vidangeForm').style.display="none";
  }
  function affichervidange() {
    document.getElementById('depannageForm').style.display="none";
    document.getElementById('lavageForm').style.display="none";
    document.getElementById('portesForm').style.display="none";
    document.getElementById('carburantForm').style.display="none";
    document.getElementById('batterieForm').style.display="none";
    document.getElementById('remorquageForm').style.display="none";
    document.getElementById('reparation_rouesForm').style.display="none";
    document.getElementById('vidangeForm').style.display="block";
  }