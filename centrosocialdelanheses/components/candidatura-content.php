<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidaturas</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/libphonenumber-js/1.7.44/libphonenumber-js.min.js"></script>
   
</head>
<body>
    <!-- Seção Breadcrumb -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <h1>Candidaturas</h1>
                        <p>Candidaturas abertas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Seção Formulário de Contato -->
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
                    <form method="POST" id="personal-info-form" onSubmit="return valid_datas(this);">
                            <!-- Campos do formulário -->
                            <div class="row">
                                <div class="col-md-6">
                                    <!-- Primeira Coluna -->
                                    <div class="form-group">
                                        <label for="name">Nome Completo:</label>
                                        <input class="form-control" type="text" name="name" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="morada">Morada:</label>
                                        <input class="form-control" type="text" name="morada" id="morada">
                                    </div>
                                    <div class="form-group">
                                        <label for="postalCode">Código Postal:</label>
                                        <input class="form-control" type="number" name="postalCode" id="postalCode">
                                    </div>
                                    <div class="form-group">
                                        <label for="localidade">Localidade:</label>
                                        <input class="form-control" type="text" name="localidade" id="localidade">
                                    </div>
                                    <div class="form-group">
                                        <label for="distrito">Distrito:</label>
                                        <input class="form-control" type="text" name="distrito" id="distrito">
                                    </div>
                                    <div class="form-group">
                                        <label for="data">Data de Nascimento:</label>
                                        <input class="form-control" type="date" placeholder="MM/DD/AAAA" name="dob" id="data">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Segunda Coluna -->
                                    <div class="form-group">
                                        <label for="idNumber">Nº CC / B.I.:</label>
                                        <input class="form-control" type="number" placeholder="Nº CC / B.I." name="idNumber" id="idNumber">
                                    </div>
                                    <div class="form-group">
                                        <label for="nif">NIF:</label>
                                        <input class="form-control" type="number" name="nif" id="nif">
                                    </div>
                                    <div class="form-group">
                                        <label for="niss">NISS:</label>
                                        <input class="form-control" type="number" placeholder="NISS" name="niss" id="niss">
                                    </div>
                                    <div class="form-group">
                                        <label for="sns">SNS:</label>
                                        <input class="form-control" type="number" placeholder="SNS" name="sns" id="sns">
                                    </div>
                                </div>
                            </div>
                            <!-- Escolha do Serviço -->
                            <hr>
                            <h4>ESCOLHA O SERVIÇO:</h4>
                            <select id="options" onchange="showFields()" class="form-control">
                                <option value="" selected disabled>Escolha uma opção</option>
                                <option value="option1">Centro do Dia</option>
                                <option value="option2">Residência para Idosos</option>
                                <option value="option3">Apoio Domiciliário</option>
                                <option value="option4">Creche</option>
                            </select>

                            <!-- Campos específicos para cada opção -->
                            <div id="option1Fields" style="display:none;">

                            <div class="form-group">
                                        <label for="sns">Nome completo:</label>
                                        <input  type="text" name="name" id="name">
                            </div>
                            
							<input type="tel" placeholder="telemovel" name="phone" id="phone">
							<input type="email" placeholder="Email" name="email" id="email">
							</p>
							<p>
							<input type="text" placeholder="Relação ou Parentesco" name="relationship" id="relationship">
							<input type="text" placeholder="Código Postal" name="motherPostalCode" id="motherPostalCode">
							<input type="text" placeholder="Localidade" name="motherCity" id="motherCity">
							</p>
							
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
				  
                            </div>

                            <div id="option2Fields" style="display:none;">
                                <!-- Campos específicos para a opção 2 (Residência para Idosos) -->
                            </div>

                            <div id="option3Fields" style="display:none;">
                                <!-- Campos específicos para a opção 3 (Apoio Domiciliário) -->
                            </div>

                            <div id="option4Fields" style="display:none;">
                                <!-- Campos específicos para a opção 4 (Creche) -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Terceira Coluna -->
                                        <h6>FILIAÇÃO - MÃE:</h6>
                                        <div class="form-group">
                                            <label for="motherName">Nome da Mãe:</label>
                                            <input class="form-control" type="text" name="motherName" id="motherName">
                                        </div>
                                        <div class="form-group">
                                            <label for="motherProfession">Profissão da Mãe:</label>
                                            <input class="form-control" type="text" name="motherProfession" id="motherProfession">
                                        </div>
                                        <div class="form-group">
                                            <label for="motherWorkplace">Local de Emprego da Mãe:</label>
                                            <input class="form-control" type="text" name="motherWorkplace" id="motherWorkplace">
                                        </div>
                                        <div class="form-group">
                                            <label for="motherAddress">Morada da Mãe:</label>
                                            <input class="form-control" type="text" name="motherAddress" id="motherAddress">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Quarta Coluna -->
                                        <h6>FILIAÇÃO - PAI:</h6>
                                        <div class="form-group">
                                            <label for="fatherName">Nome do Pai:</label>
                                            <input class="form-control" type="text"  name="fatherName" id="fatherName">
                                        </div>
                                        <div class="form-group">
                                            <label for="fatherProfession">Profissão do Pai:</label>
                                            <input class="form-control" type="text"name="fatherProfession" id="fatherProfession">
                                        </div>
                                        <div class="form-group">
                                            <label for="fatherWorkplace">Local de Emprego do Pai:</label>
                                            <input class="form-control" type="text" name="fatherWorkplace" id="fatherWorkplace">
                                        </div>
                                        <div class="form-group">
                                            <label for="fatherAddress">Morada do Pai:</label>
                                            <input class="form-control" type="text" name="fatherAddress" id="fatherAddress">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Quinta Coluna -->
                                        <div class="form-group">
                                            <label for="motherPostalCode">Código Postal da Mãe:</label>
                                            <input class="form-control" type="number" name="motherPostalCode" id="motherPostalCode">
                                        </div>
                                        <div class="form-group">
                                            <label for="motherCity">Localidade da Mãe:</label>
                                            <input class="form-control" type="text" name="motherCity" id="motherCity">
                                        </div>
                                        <div class="form-group">
                                            <label for="motherPhone">Telemóvel da Mãe:</label>
                                            <input class="form-control" type="tel" name="motherPhone" id="motherPhone">
                                        </div>
                                        <div class="form-group">
                                            <label for="motherEmail">Email da Mãe:</label>
                                            <input class="form-control" type="email" name="motherEmail" id="motherEmail">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Sexta Coluna -->
                                        <div class="form-group">
                                            <label for="fatherPostalCode">Código Postal do Pai:</label>
                                            <input class="form-control" type="text" name="fatherPostalCode" id="fatherPostalCode">
                                        </div>
                                        <div class="form-group">
                                            <label for="fatherCity">Localidade do Pai:</label>
                                            <input class="form-control" type="text" name="fatherCity" id="fatherCity">
                                        </div>
                                        <div class="form-group">
                                            <label for="fatherPhone">Telemóvel do Pai:</label>
                                            <input class="form-control" type="tel"  name="fatherPhone" id="fatherPhone">
                                        </div>
                                        <div class="form-group">
                                            <label for="fatherEmail">Email do Pai:</label>
                                            <input class="form-control" type="email"  name="fatherEmail" id="fatherEmail">
                                        </div>
                                    </div>
                                </div>
                                <!-- Informações Complementares -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <!-- Sétima Coluna -->
                                        <h6>INFORMAÇÕES COMPLEMENTARES:</h6>
                                        <div class="form-group">
                                            <p>Irmãos a frequentar o estabelecimento?</p>
                                            <label for="siblingsAttendingYes">Sim</label>
                                            <input type="radio" name="siblingsAttending" value="Sim" id="siblingsAttendingYes">
                                            <label for="siblingsAttendingNo">Não</label>
                                            <input type="radio" name="siblingsAttending" value="Não" id="siblingsAttendingNo">
                                        </div>
                                        <div class="form-group">
                                            <p>A criança necessita de algum apoio especial?</p>
                                            <label for="specialSupportYes">Sim</label>
                                            <input type="radio" name="specialSupport" value="Sim" id="specialSupportYes">
                                            <label for="specialSupportNo">Não</label>
                                            <input type="radio" name="specialSupport" value="Não" id="specialSupportNo">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <!-- Oitava Coluna -->
                                        <div class="form-group">
                                            <label for="specificSupport">Se sim, especifique:</label>
                                            <input class="form-control" type="text" name="specificSupport" id="specificSupport">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="token" value="FsWga4&@f6aw" />
                            <div class="form-group">
                                <input type="submit" value="Submeter">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showFields() {
            var selectedOption = $("#options").val();
        
            // Ocultar todos os campos específicos
            $("[id$='Fields']").hide();
        
            // Mostrar campos específicos conforme a opção selecionada
            $("#" + selectedOption + "Fields").show();
        }
    </script>
</body>
</html>
