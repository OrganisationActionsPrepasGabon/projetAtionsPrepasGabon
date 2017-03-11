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
                            <label>Company Name</label>
                            <input type="text" class="form-control">
                        </div>                        
                    </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary" required="required">Submit Message</button>
                        </div>
                </form> 
            </div><!--/.row-->
		</section>