<script>
      var t;
      t = 20;
      function changerTaille(modif) {
        t = t + modif;
        
        if (t<=26 || t>4){
        
        document.getElementsByTagName("body")[0].style.fontSize = t + "px";
       

      }}
  </script>

    <div class="zoom">
  <div class="imgPlus"><a href="#" onClick="changerTaille(2); return false;" accesskey="6"><img src="img/zoom.png" alt="Diminuer Police"></a></div>
   <div class="imgMoins"><a href="#" onClick="changerTaille(-2); return false;" accesskey="7"><img src="img/zoomMoins.png" alt="Diminuer Police"></a></div>
 </div>