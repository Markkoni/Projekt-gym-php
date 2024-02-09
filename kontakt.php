<?php
	print'
			<h1 style="text-shadow: 2px 2px 4px #5bc783">Kontakt</h1><br><br>
			<table style="width: 80%; margin-bottom: 50px;">
 
				<tr>
				  <td>E-MAIL</td>
				  <td>ŠPANSKO</td>
				  <td>RUDEŠ</td>
				  
				</tr>
				<tr class="no-color">
				  <td>markosgym@yahoo.com</td>
				  <td>01/580708522</td>
				  <td>01/780508524</td>
				  				  
				</tr>
			   
			  </table>
			<div class="row" style="margin-bottom: 100px;">
				<div class="column">
					<h2 style="text-align: center;">Špansko</h2>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11125.844596251954!2d15.887624737764465!3d45.80202211570039!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d16a23f9a2b9%3A0x6c7b75de94dcad03!2s%C5%A0pansko%2C%2010090%2C%20Zagreb!5e0!3m2!1shr!2shr!4v1673022723560!5m2!1shr!2shr"
					 width= 90% height=400px style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Karta gdje se nalazimo-Špansko"></iframe>
				</div>
				<div class="column">
					<h2 style="text-align: center;">Rudeš</h2>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11126.193554440695!2d15.909645061950107!3d45.80027464684616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4765d14bb03a31c9%3A0xd76d1b209ae68118!2zUnVkZcWhLCAxMDExMCwgWmFncmVi!5e0!3m2!1shr!2shr!4v1692820377985!5m2!1shr!2shr"
					 width= 90% height=400px style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Karta gdje se nalazimo-Rudeš"></iframe>

				</div>
			</div>
			<form action="file:///C:/Users/Marko/Desktop/Projekt/kontakt.html" method="post">
				<h2>KONTAKTIRAJ TE NAS</h2><br>
                <div>
                    <label for="fname">Ime *</label><br>
                    <input type="text" id="fname" name="firstname" placeholder="Vaše ime.." required>
                </div>
                <div>
                    <label for="lname">Prezime *</label><br>
                    <input type="text" id="lname" name="lastname" placeholder="Vaše prezime.." required>
                </div>
                <div>	
                    <label for="email">E-mail *</label><br>
                    <input type="email" id="email" name="email" placeholder="Vaš e-mail.." required>
                </div>
                <div>
                    <label for="country">Država</label><br>
                    <select id="country" name="country">
                      <option value="">Molim izaberite</option>
                      <option value="A">Austrija</option>
                      <option value="BG">Bugarska</option>
                      <option value="BiH">Bosna i Hercegovina</option>
                      <option value="MN">Crna Gora</option>
                      <option value="HR" selected>Hrvatska</option>
                      <option value="SLO">Slovenija</option>
                      <option value="SR">Srbija</option>
                    </select>
                </div>
                <div>
                    <label for="message">Poruka</label><br>
                    <textarea id="message" name="message" placeholder="Napišite nešto..." style="height:200px"></textarea>
                </div>
                <div>
                    <input type="submit" value="Submit"> 
                </div>
            </form>
            
            <div style="background-color: rgb(49, 46, 46); margin-top: 300px;"><br>
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
			</div>';
?>