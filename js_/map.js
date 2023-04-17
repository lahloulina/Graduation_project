if (navigator.geolocation) {
  console.log("aaa")
  actualMap = navigator.geolocation.getCurrentPosition(
    function (position) {
      //remplir la valeur de l'input avec les coordonnées
      console.log(`${position.coords.latitude},${position.coords.longitude}`)
      var liste= document.getElementsByClassName("salam");
      for (let i = 0; i < liste.length; i++) {
       liste[i].value= `${position.coords.latitude},${position.coords.longitude}`;
   }
    }, 
    function (error) {
      console.error(error);
    }
  );
}
