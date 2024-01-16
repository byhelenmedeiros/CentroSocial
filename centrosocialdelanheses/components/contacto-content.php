<script src="https://cdnjs.cloudflare.com/ajax/libs/libphonenumber-js/1.7.44/libphonenumber-js.min.js"></script>

	
	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<h1>Contactos</h1>
						<p>Abertos todos os dias</p>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- contact form -->
	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
		  <div class="row">
			<div class="col-lg-8 mb-5 mb-lg-0">
			  <div class="form-title">
				<h2>Candidate-se</h2>
				<p>Para fazer parte de uma de nossas respostas sociais, preenche o nosso questionário.</p>
			  </div>
			  <h3>DADOS DE IDENTIFICAÇÃO DO(A) CANDIDATO(A):</h3>
							  <div id="form_status"></div>
							  <div class="contact-form">
								<form type="POST" id="personal-info-form" onSubmit="return valid_datas( this );">
								  <p>
									<input type="text" placeholder="Nome Completo" name="name" id="name">
									<input type="text" placeholder="Morada" name="morada" id="morada">
								  </p>
								  <p>
									<input type="text" placeholder="Código Postal " name="postalCode" id="postalCode">
									<input type="text" placeholder="Localidade" name="localidade" id="localidade">
								  </p>
								  <p>
									<input type="text" placeholder="Distrito" name="distrito" id="distrito">
									<input type="date" placeholder="Data de Nascimento" name="dob" id="data">
								  </p>
								  <p>
									<input type="text" placeholder="Nº CC / B.I." name="idNumber" id="idNumber">
									<input type="text" placeholder="NIF" name="nif" id="nif">
								  </p>
								  <p>
									<input type="text" placeholder="NISS" name="niss" id="niss">
									<input type="text" placeholder="SNS" name="sns" id="sns">
								  </p>
								  <hr>
								  <h4>ESCOLHA O SERVIÇO:</h4>
					<select id="options" onchange="showFields()">
					<div class="select-selected">Selecione uma opção</div>
  						<div class="select-items">
						<option value="" selected disabled>Escolha uma opção</option>
						<option value="option1">Centro do Dia</option>
					  	<option value="option2">Residencia para Idosos</option>
					  	<option value="option3">Apoio Domiciliário</option>
					  	<option value="option4">Creche</option>
					</select>
						
				  </p>

				  
				  <div id="option1Fields" style="display:none;">
				  <div id="form_status"></div>
				  <div class="contact-form">
							<div class="form-row">
								<div class="form-group col-md-6">
								<label for="name">Nome completo:</label>
								<input type="text" placeholder="Insira seu nome completo" name="name" id="name">
								</div>
								<div class="form-group col-md-6">
								<label for="phone">Telemóvel (+351):</label>
								<input type="tel" placeholder="Insira seu número de telemóvel" name="phone" id="phone">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
								<label for="email">Email:</label>
								<input type="email" placeholder="Insira seu endereço de email" name="email" id="email">
								</div>
								<div class="form-group col-md-6">
								<label for="relationship">Relação ou Parentesco:</label>
								<input type="text" placeholder="Insira sua relação ou parentesco" name="relationship" id="relationship">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6">
								<label for="motherPostalCode">Código Postal:</label>
								<input type="text" placeholder="Insira seu código postal" name="motherPostalCode" id="motherPostalCode">
								</div>
								<div class="form-group col-md-6">
								<label for="motherCity">Localidade:</label>
								<input type="text" placeholder="Insira sua localidade" name="motherCity" id="motherCity">
								</div>
							</div>
							</div>


							<div class="container">
								<form>
									<table class="table">
										<thead>
											<tr>
												<th>SERVIÇOS</th>
												<th>Periodicidade</th>
												<th>Nº de vezes</th>
												<th>Outros</th>
												<th>Qual?</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Refeições</td>
												<td>
													<input type="checkbox" id="refeicao_2a6"><label for="refeicao_2a6"> 2ª a 6ª</label><br>
													<input type="checkbox" id="refeicao_sab"><label for="refeicao_sab"> 2ª a SÁB.</label><br>
													<input type="checkbox" id="refeicao_dom"><label for="refeicao_dom"> 2ª a DOM.</label>
												</td>
												<td>
													<input type="checkbox" id="refeicao_1x"><label for="refeicao_1x"> 1x</label><br>
													<input type="checkbox" id="refeicao_2x"><label for="refeicao_2x"> 2x</label><br>
													<input type="checkbox" id="refeicao_3x"><label for="refeicao_3x"> 3x</label><br>
													<input type="checkbox" id="refeicao_4x"><label for="refeicao_4x"> 4x</label>
												</td>
												<td><input type="checkbox"></td>
												<td><input type="text" class="form-control"></td>
											</tr>
											<tr>
												<td>Higiene Pessoal</td>
												<td>
													<input type="checkbox" id="refeicao_2a6"><label for="refeicao_2a6"> 2ª a 6ª</label><br>
													<input type="checkbox" id="refeicao_sab"><label for="refeicao_sab"> 2ª a SÁB.</label><br>
													<input type="checkbox" id="refeicao_dom"><label for="refeicao_dom"> 2ª a DOM.</label>
												</td>
												<td>
													<input type="checkbox" id="refeicao_1x"><label for="refeicao_1x"> 1x</label><br>
													<input type="checkbox" id="refeicao_2x"><label for="refeicao_2x"> 2x</label><br>
													<input type="checkbox" id="refeicao_3x"><label for="refeicao_3x"> 3x</label><br>
													<input type="checkbox" id="refeicao_4x"><label for="refeicao_4x"> 4x</label>
												</td>
												<td><input type="checkbox"></td>
												<td><input type="text" class="form-control"></td>
											</tr>
											<tr>
												<td>Higiene Habitacional</td>
												<td>
													<input type="checkbox" id="refeicao_2a6"><label for="refeicao_2a6"> 2ª a 6ª</label><br>
													<input type="checkbox" id="refeicao_sab"><label for="refeicao_sab"> 2ª a SÁB.</label><br>
													<input type="checkbox" id="refeicao_dom"><label for="refeicao_dom"> 2ª a DOM.</label>
												</td>
												<td>
													<input type="checkbox" id="refeicao_1x"><label for="refeicao_1x"> 1x</label><br>
													<input type="checkbox" id="refeicao_2x"><label for="refeicao_2x"> 2x</label><br>
													<input type="checkbox" id="refeicao_3x"><label for="refeicao_3x"> 3x</label><br>
													<input type="checkbox" id="refeicao_4x"><label for="refeicao_4x"> 4x</label>
												</td>
												<td><input type="checkbox"></td>
												<td><input type="text" class="form-control"></td>
											</tr>
											<tr>
												<td>Tratamento de Roupa</td>
												<td>
													<input type="checkbox" id="refeicao_2a6"><label for="refeicao_2a6"> 2ª a 6ª</label><br>
													<input type="checkbox" id="refeicao_sab"><label for="refeicao_sab"> 2ª a SÁB.</label><br>
													<input type="checkbox" id="refeicao_dom"><label for="refeicao_dom"> 2ª a DOM.</label>
												</td>
												<td>
													<input type="checkbox" id="refeicao_1x"><label for="refeicao_1x"> 1x</label><br>
													<input type="checkbox" id="refeicao_2x"><label for="refeicao_2x"> 2x</label><br>
													<input type="checkbox" id="refeicao_3x"><label for="refeicao_3x"> 3x</label><br>
													<input type="checkbox" id="refeicao_4x"><label for="refeicao_4x"> 4x</label>
												</td>
												<td><input type="checkbox"></td>
												<td><input type="text" class="form-control"></td>
											</tr>
					
										</tbody>
									</table>
								</form>
							</div>
							<H6>OUTRAS INFORMAÇÕES SOBRE O(A) CANDIDATO(A):</H6>
							<input type="text" name="specificSupport" id="specificSupport">
					</p>
				  </div>
				  
				  <div id="option2Fields" style="display:none;">
					<!-- Campos específicos para la opción 2 -->
					<p>
					  <input type="text" placeholder="Campo Opción 2" name="option2Field" id="option2Field">
					</p>
				  </div>
				  
				  <div id="option3Fields" style="display:none;">
					<!-- Campos específicos para la opción 3 -->
					<p>
					  <input type="text" placeholder="Campo Opción 3" name="option3Field" id="option3Field">
					</p>
				  </div>
				  
				    <div id="option4Fields" style="display:none;">
					<!-- Campos específicos para la opción 4 -->
					<h6>FILIAÇÃO:</h6>
							<p>
							<input type="text" placeholder="Nome da Mãe" name="motherName" id="motherName">
							<input type="text" placeholder="Profissão" name="motherProfession" id="motherProfession">
							<input type="text" placeholder="Local de Emprego" name="motherWorkplace" id="motherWorkplace">
							</p>
							<p>
							<input type="text" placeholder="Morada" name="motherAddress" id="motherAddress">
							<input type="text" placeholder="Código Postal" name="motherPostalCode" id="motherPostalCode">
							<input type="text" placeholder="Localidade" name="motherCity" id="motherCity">
							</p>
							<p>
							<input type="tel" placeholder="Telemóvel" name="motherPhone" id="motherPhone">
							<input type="email" placeholder="Email" name="motherEmail" id="motherEmail">
							</p>
							<p>
							<input type="text" placeholder="Nome do Pai" name="fatherName" id="fatherName">
							<input type="text" placeholder="Profissão" name="fatherProfession" id="fatherProfession">
							<input type="text" placeholder="Local de Emprego" name="fatherWorkplace" id="fatherWorkplace">
							</p>
							<p>
							<input type="text" placeholder="Morada" name="fatherAddress" id="fatherAddress">
							<input type="text" placeholder="Código Postal" name="fatherPostalCode" id="fatherPostalCode">
							<input type="text" placeholder="Localidade" name="fatherCity" id="fatherCity">
							</p>
							<p>
							<input type="tel" placeholder="Telemóvel" name="fatherPhone" id="fatherPhone">
							<input type="email" placeholder="Email" name="fatherEmail" id="fatherEmail">
							</p>
							<h6>INFORMAÇÕES COMPLEMENTARES:</h6>
							<p>Irmãos a frequentar o estabelecimento?</p>
							<p>
							Sim <input type="radio" name="siblingsAttending" value="Sim">
							Não <input type="radio" name="siblingsAttending" value="Não">
							</p>

							<!-- Apoio especial -->
							<p>A criança necessita de algum apoio especial?</p>
							<p>
							Sim <input type="radio" name="specialSupport" value="Sim">
							Não <input type="radio" name="specialSupport" value="Não">
							Se sim, especifique: <input type="text" name="specificSupport" id="specificSupport">
							</p>
				  </div>
				  
				  <input type="hidden" name="token" value="FsWga4&@f6aw" />
				  <p><input type="submit" value="Submeter"></p>
				  </form>
				  </div>
				  </div>
				<div class="col-lg-4">
					<div class="contact-form-wrap">
						<div class="contact-form-box">
							<h4><i class="fas fa-map"></i>Morada</h4>
							<p>Estrada da Igreja, nº468 <br> Lanheses, Viana do Castelo <br> Portugal</p>
						</div>
						<div class="contact-form-box">
							<h4><i class="far fa-clock"></i> Horario</h4>
							<p> Secretaria: <br> SEG-SEX: 09:30 - 17:00 </p>
						</div>
						<div class="contact-form-box">
							<h4><i class="fas fa-address-book"></i> Contacto</h4>
							<p>Telefone: 258 739 000 <br> Email:geral@cpsribalima.pt</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end contact form -->
	<script>
		function showFields() {
		  var selectedOption = $("#options").val();
	  
		  // Ocultar todos los campos específicos
		  $("[id$='Fields']").hide();
	  
		  // Mostrar campos específicos según la opción seleccionada
		  $("#" + selectedOption + "Fields").show();
		}
	  </script>

	<!-- find our location -->
	<div class="find-location blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<p> <i class="fas fa-map-marker-alt"></i> Localização</p>
				</div>
			</div>
		</div>
	</div>
	<!-- end find our location -->

	<!-- google map section -->
	<div class="embed-responsive embed-responsive-21by9">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10013.952762985191!2d-8.671960874936756!3d41.7385128908086!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd25b166099baac5%3A0xc31d57c6d929a1da!2sCentro%20Paroquial%20e%20Social%20Lanheses!5e0!3m2!1spt-PT!2spt!4v1704717117272!5m2!1spt-PT!2spt" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="embed-responsive-item"></iframe>
	</div>
	<!-- end google map section -->

