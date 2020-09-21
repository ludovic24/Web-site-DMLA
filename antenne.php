<?php 
    if(isset($_POST["BtNumDpt"])){

    $NumDpt=$_POST["NumDpt"] ;



    $sql = $pdo->query('SELECT * FROM dep WHERE num = '.$NumDpt.' ');

    
    while ($donnees = $sql->fetch()){

    $date = $donnees['date'] ;
    $lieu = $donnees['lieu'] ;
    $contact = $donnees['contact'] ;

    echo "<p> <strong>Horraire :</strong> ".$date."<br />
              <strong>Adresse :</strong> ".$lieu."<br />
              <strong>Contact :</strong> ".$contact."<p>";
 
     
}


  
    switch ($_POST["NumDpt"]) {
      case 92 :
          echo "
                <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.874522403188!2d2.26995891567221!3d48.822455511190306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67a8228212361%3A0xc229dd7637b55c86!2s5+Rue+Marcellin+Berthelot%2C+92130+Issy-les-Moulineaux!5e0!3m2!1sfr!2sfr!4v1555348082869!5m2!1sfr!2sfr' width='98%' height='300px' frameborder='0' style='border:0' allowfullscreen></iframe>
                ";
          echo "
                  <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2629.1733606062085!2d2.3120293156708662!3d48.77858051427702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e670d573f43ce1%3A0xe60d8d8d9f669157!2sAll%C3%A9e+Fran%C3%A7oise+Dolto%2C+92340+Bourg-la-Reine!5e0!3m2!1sfr!2sfr!4v1555367020155!5m2!1sfr!2sfr' width='98%' height='300px' frameborder='0' style='border:0' allowfullscreen></iframe>"
                  ;
         break;

      case 94 :
          echo "
                <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2628.2683969770974!2d2.4613956156714187!3d48.79585591306179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60cc7d2d1ae85%3A0x37b18df764b36d9f!2s40+Avenue+de+Verdun%2C+94000+Cr%C3%A9teil!5e0!3m2!1sfr!2sfr!4v1555348213610!5m2!1sfr!2sfr' width='98%' height='300px' frameborder='0' style='border:0' allowfullscreen></iframe>";
          break;

      case 60:
          echo "
                  <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2595.531179141279!2d2.824819715690113!3d49.41777096911049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e7d6872509f781%3A0x10dece2729aa0245!2s2+Rue+de+la+Surveillance%2C+60200+Compi%C3%A8gne!5e0!3m2!1sfr!2sfr!4v1555348275421!5m2!1sfr!2sfr' width='98%' height='300px' frameborder='0' style='border:0' allowfullscreen></iframe>
                  ";
          break;

      case 54:
          echo "
                <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2633.9287919113617!2d6.177888765668151!3d48.68772607066204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4794986e248826c5%3A0x3733deda31e6a58b!2sFlunch!5e0!3m2!1sfr!2sfr!4v1555348385829!5m2!1sfr!2sfr' width='98%' height='300px' frameborder='0' style='border:0' allowfullscreen></iframe>

                ";
          break; 

      case 24:
          echo "
                    <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2812.262732090203!2d0.7184652155667843!3d45.18177756026467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ff70559a5e0d33%3A0xb4506a6c58b940a1!2s12+Cours+F%C3%A9nelon%2C+24000+P%C3%A9rigueux!5e0!3m2!1sfr!2sfr!4v1555366648708!5m2!1sfr!2sfr' width='98%' height='300px' frameborder='0' style='border:0' allowfullscreen></iframe> <br />"

                    ;
          break;           
      case 43:
          echo "
                    <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2818.977464587204!2d3.888829315563005!3d45.04567916929256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f5fa5803b643db%3A0xc23411483aaba9fa!2s31+Boulevard+de+la+R%C3%A9publique%2C+43000+Le+Puy-en-Velay!5e0!3m2!1sfr!2sfr!4v1555366753444!5m2!1sfr!2sfr' width='98%' height='300px' frameborder='0' style='border:0' allowfullscreen></iframe>";
          break;  


      case 76:
          echo "
                    <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2577.509832788846!2d0.38264201570044626!3d49.75766604491977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e06b6e636f84ab%3A0x97cf160695c43707!2s3+Rue+Henri+Dunant%2C+76400+F%C3%A9camp!5e0!3m2!1sfr!2sfr!4v1555367207414!5m2!1sfr!2sfr' width='98%' height='300px' frameborder='0' style='border:0' allowfullscreen></iframe>";
          break;    

      case 75:
          echo "
                  <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.84286549008!2d2.376361015673342!3d48.86120670846254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66dfa0809a077%3A0xd8b5ae025921434!2s8+Rue+du+G%C3%A9n%C3%A9ral+Renault%2C+75011+Paris!5e0!3m2!1sfr!2sfr!4v1555367265019!5m2!1sfr!2sfr' width='98%' height='300px' frameborder='0' style='border:0' allowfullscreen></iframe>";
          break;    

      case 93:
          echo "
                    <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.832393944607!2d2.558568015672806!3d48.84233560979109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e60e1a657a2fad%3A0xb928ace5d4625288!2s15+All%C3%A9e+du+Clos+d&#39;Ambert%2C+93160+Noisy-le-Grand!5e0!3m2!1sfr!2sfr!4v1555367413841!5m2!1sfr!2sfr' width='98%' height='300px' frameborder='0' style='border:0' allowfullscreen></iframe>";
          break;

      case 26:
          echo "
                    <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2842.6586493034974!2d4.751418815549619!3d44.56309060113483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b56b1e7562b925%3A0x354fe519221f1e5f!2s1+Avenue+Saint-Martin%2C+26200+Mont%C3%A9limar!5e0!3m2!1sfr!2sfr!4v1555367481991!5m2!1sfr!2sfr' width='98%' height='300px' frameborder='0' style='border:0' allowfullscreen></iframe>";
          break;
      case 33:
  
          echo "<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2833.7998127131646!2d-1.1034351844453496!3d44.744100789222344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd54a3a67bb9bd29%3A0xf30a2a2d2fe6c0be!2s260+Boulevard+de+la+R%C3%A9publique%2C+33510+Andernos-les-Bains!5e0!3m2!1sfr!2sfr!4v1555345425357!5m2!1sfr!2sfr' width='98%' height='300px' frameborder='0' style='border:0' allowfullscreen></iframe>";

          break;        
      case 87:
          echo "
                  <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2780.0352703942403!2d1.2532985155850225!3d45.830576116942375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f934ae2ab5603d%3A0x5478878469bc536e!2s4+Place+d&#39;Aine%2C+87000+Limoges!5e0!3m2!1sfr!2sfr!4v1555367564963!5m2!1sfr!2sfr' width='98%' height='300px' frameborder='0' style='border:0' allowfullscreen></iframe>";
          break;        
      case 29:
          echo "
                  <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2649.4555665224816!2d-4.494176384340706!3d48.39019384151162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4816b957c1a72ec1%3A0x34ca61d0d9cc94c1!2s12%2C+14+Rue+Fautras%2C+29200+Brest!5e0!3m2!1sfr!2sfr!4v1555367651351!5m2!1sfr!2sfr' width='98%' height='300px' frameborder='0' style='border:0' allowfullscreen></iframe>";
          break;        
      case 60:
          echo "
                  <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2895.52267091658!2d-1.5625833844801509!3d43.47056157223956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5114d59c53ba1b%3A0x438480ca03fee65c!2s2+Rue+Darrichon%2C+64200+Biarritz!5e0!3m2!1sfr!2sfr!4v1555367703137!5m2!1sfr!2sfr' width='98%' height='300px' frameborder='0' style='border:0' allowfullscreen></iframe>";
          break; 


         default : 
               echo "<p> Aucune antenne a proximité </p>";


      }
     } 
    ?>