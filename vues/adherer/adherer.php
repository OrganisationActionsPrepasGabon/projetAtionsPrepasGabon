		<section id="about-us">
		   <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
					 <div class="form-group">
                            <label>Civilité *  </label>
							    <input type="radio" name="name" value="M" class="" required="required">    <label>M</label>
							    <input type="radio" name="name" value="F" class="" required="required">    <label>F</label> 
                     </div>
                        <div class="form-group">
                            <label>Nom *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
						<div class="form-group">
                            <label>Prenom *</label>
                            <input type="text" name="prenom" class="form-control" required="required">
                        </div>
						<div class="form-group">
                            <label>Date de naissance *</label>
                            <input type="date" name="date" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Adresse Domicile</label>
                            <input type="text" class="form-control">
                        </div>   
                        <div class="form-group">
                            <label>Profession</label>
							<p>Choisissez votre profession sur la liste</p>
                            <select class="form-control">
									<option value="volvo" select="selected" >Etudiant</option>
									<option value="saab">Salarié</option>
									<option value="mercedes">Sans</option>
							</select>
                        </div> 	
                        <div class="form-group">
                            <label>Ecole, Université ou Entreprise *</label>
							<p>Indiquez le nom de votre école, de votre université ou de votre entreprise</p>
                            <input type="text" class="form-control">
                        </div>   
                        <div class="form-group">
                            <label>Promotion des Classes Prépas du LNLM (année de sortie) *</label>
							<p>Indiquez "Néant" si vous n'êtes pas issu des Classes Prépas du LNLM</p>
                            <select class="form-control">
								<option value="2017" select="selected">2017</option>
								<option value="2016">2016</option>
								<option value="2015">2015</option>
								<option value="2014">2014</option>
								<option value="2013">2013</option>
								<option value="2012">2012</option>
								<option value="2011">2011</option>
								<option value="2010">2010</option>
								<option value="2009">2009</option>
								<option value="2008">2008</option>
								<option value="2007">2007</option>	
								<option value="2006">2006</option>
								<option value="2005">2005</option>
								<option value="2004">2004</option>
								<option value="2003">2003</option>
								<option value="2002">2002</option>
								<option value="2001">2001</option>
								<option value="2000">2000</option>
								<option value="1999">1999</option>
								<option value="1998">1998</option>
								<option value="1997">1997</option>
								<option value="1996">1996</option>
								<option value="1995">1995</option>
								<option value="1994">1994</option>
								<option value="1993">1993</option>
								<option value="1992">1992</option>
								<option value="1991">1991</option>
								<option value="1991">Neant</option>
							</select>
                        </div> 
						<div class="form-group">
                            <label>Par quelle moyen avez-vous connu notre association *</label><br>
                            <input type="checkbox" name="vehicle" value="ancien"> Par un ancien Taupin<br>
							<input type="checkbox" name="vehicle" value="internet"> Par internet<br>
							<input type="checkbox" name="vehicle" value="autre">Par un autre type de média<br>
                        </div> 
						<div class="form-group">
                            <label>Quelles seraient en deux ou trois lignes vos motivations à intégrer notre association ? *</label>
                            <textarea name="motivation" rows="10" cols="100">
						    </textarea>
                        </div> 
						<div class="form-group">
                            <label>Vous êtes déjà membre d’une ou plusieurs autre(s) association(s), lesquelles ? (précisez le(s) poste(s) occupé(s)).*</label>
                            <textarea name="assos" rows="10" cols="100">
						    </textarea>
                        </div> 
						<p>PRENEZ CONNAISSANCE DE <a href="#">NOS STATUS, REGLEMENT INTERIEUR ET ORGANISATION</a><p>
						
						<div class="form-group">
                            <input type="checkbox" name="vehicle" value="lu_approuve"><b> J'atteste sur l'honneur l'exactitude des informations précédentes et reconnais avoir LU ET ACCEPTE les Statuts et Règlement intérieur * </b><br>
                        </div> 
						<div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary" required="required">Inscription</button>
                        </div>						
                    </div>
                       
                </form> 
            </div><!--/.row-->
		</section>