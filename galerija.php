<?php
      print'
			<h1 style="text-shadow: 2px 2px 4px #5bc783">Galerija</h1><br><br>
            
              <div class="kontejner">
                <div class="slajdovi">
                  <div class="brojslike">1 / 6</div>
                  <img src="images/s111.jpg" style="width:1200px; height: 600px;">  
                </div>
              
                <div class="slajdovi">
                  <div class="brojslike">2 / 6</div>
                  <img src="images/izgl1.jpg" style="width:1200px; height: 600px;">
                </div>
              
                <div class="slajdovi">
                  <div class="brojslike">3 / 6</div>
                  <img src="images/izgl2.jpg" style="width:1200px; height: 600px;">
                </div>
                  
                <div class="slajdovi">
                  <div class="brojslike">4 / 6</div>
                  <img src="images/izgl3.jpg" style="width:1200px; height: 600px;">
                </div>
              
                <div class="slajdovi">
                  <div class="brojslike">5 / 6</div>
                  <img src="images/izgl4.jpg" style="width:1200px; height: 600px;">
                </div>
                  
                <div class="slajdovi">
                  <div class="brojslike">6 / 6</div>
                  <img src="images/izgl5.jpg" style="width:1200px; height: 600px;">
                </div>
                  
                <a class="gprev" onclick="plusSlides(-1)">❮</a>
                <a class="gnext" onclick="plusSlides(1)">❯</a>
              
                <div class="caption-container">
                  <p id="caption"></p>
                </div>
              
                <div class="red">
                  <div class="kolona">
                    <img class="eff gcursor" src="images/s111.jpg" style="width:200px; height: 130px;" onclick="currentSlide(1)" alt="Izgled teretane Špansko">
                  </div>
                  <div class="kolona">
                    <img class="eff gcursor" src="images/izgl1.jpg" style="width:200px; height: 130px;" onclick="currentSlide(2)" alt="Izgled teretane Špansko">
                  </div>
                  <div class="kolona">
                    <img class="eff gcursor" src="images/izgl2.jpg" style="width:200px; height: 130px;" onclick="currentSlide(3)" alt="Izgled teretane Špansko">
                  </div>
                  <div class="kolona">
                    <img class="eff gcursor" src="images/izgl3.jpg" style="width:200px; height: 130px;" onclick="currentSlide(4)" alt="Izgled teretane Rudeš">
                  </div>
                  <div class="kolona">
                    <img class="eff gcursor" src="images/izgl4.jpg" style="width:200px; height: 130px;" onclick="currentSlide(5)" alt="Svlačionica">
                  </div>    
                  <div class="kolona">
                    <img class="eff gcursor" src="images/izgl5.jpg" style="width:200px; height: 130px;" onclick="currentSlide(6)" alt="Grupni trening">
                  </div>
                  
                </div>
              </div>
              
              <script>
              
              let indexSlajda = 1;

              galerija(indexSlajda);
              
              function plusSlides(n) {
                galerija(indexSlajda += n);
              }
              
              function currentSlide(n) {
                galerija(indexSlajda = n);
              }
              
              function galerija(n) {
                let i;
                let slajdovi = document.getElementsByClassName("slajdovi");
                let tocke = document.getElementsByClassName("eff");
                let naslov = document.getElementById("caption");
                if (n > slajdovi.length) {indexSlajda = 1}
                if (n < 1) {indexSlajda = slajdovi.length}
                for (i = 0; i < slajdovi.length; i++) {
                  slajdovi[i].style.display = "none";
                }
                for (i = 0; i < tocke.length; i++) {
                  tocke[i].className = tocke[i].className.replace(" gactive", "");
                }
                slajdovi[indexSlajda-1].style.display = "block";
                tocke[indexSlajda-1].className += " gactive";
                naslov.innerHTML = tocke[indexSlajda-1].alt;
              }
    
              </script>
            


            <div style="background-color: rgb(49, 46, 46); margin-top: 400px;"><br>
              <p style="padding-left: 40px; margin-bottom: 2px; color: whitesmoke; font-size: 30px;">PRATI NAS</p><br>
              
              <a href="https://hr-hr.facebook.com/Sparta-gym-Zapad-340000349515616/" target="_blank"><img src="images/fb.svg" alt="Twitter" title="facebook" style="width:50px; margin-top:0.4em; padding-left: 35px;"></a>
              <a href="https://www.instagram.com/sparta_gym_zapad/?hl=hr" target="_blank"><img src="images/inst.svg" alt="instagram" title="instagram" style="width: 52px; margin-top:0.4em;"></a>
            
              <div class="container">
                
                <div class="tekst">
                  <p>LOKACIJE</p><br>
                  <p>ŠPANSKO</p>
                  <p>Miroslava Milića 5, 10000 Zagreb</p>
                  <p>RUDEŠ</p>
                  <p>Jablanska 24, 10000 Zagreb</p>
                </div>
                <div class="tekst">
                  <p>RADNO VRIJEME</p><br>
                  <p>Špansko</p>
                  <p>PON – PET: 07:30 – 22:30</p>
                    <p>SUB: 09:00 – 21:00</p>
                    <p>NED: 16:00 – 21:00</p>
                  <p>Rudeš</p>
                  <p>PON – PET: 07:00 – 22:00</p>
                    <p>SUB: 09:00 – 21:00</p>
                    <p>NED: 15:00 – 21:00</p>

				        </div>
              </div>
			      </div>';

?>



