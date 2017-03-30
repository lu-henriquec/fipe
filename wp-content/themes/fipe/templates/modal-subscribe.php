<!-- MODAL -->
<div class="themodal-overlay subscribe-modal hide">
	<div class="modal">
		<div class="modal__conteudo">

			<div class="box-modal">
				<form action="" id="form-cadastro" class="form-cadastro">
					<div class="form_part-1">
						<div class="modal__conteudo-title">Você já iniciou o preenchimento?</div>
						<div class="form-row">
							<div class="form-field">
								<label for="nome">Nome Completo*</label>
								<input type="text" name="nome" id="nome" >
							</div>
						</div>

						<div class="form-row">
							<div class="form-field">
								<label for="nome">E-mail*</label>
								<input type="text" name="email" id="email" >
							</div>
						</div>

						<div class="form-row">
							<div class="form-field">
								<label for="nome">Telefone principal*</label>
								<input type="text" name="telefone" id="telefone" >
							</div>
						</div>

						<div class="form-row">
							<div class="form-field">
								<label for="nome">CPF*</label>
								<input type="text" name="cpf" id="cpf" >
							</div>
						</div>

						<div class="form-row">
							<div class="form-field">
								<label for="nome">Curso escolhido</label>
								<input type="text" name="curso" id="curso" value="<?php the_title(); ?>" disabled>
							</div>
						</div>

						<div class="form-row">
							<div class="form-field">
								<label for="nome">Turma do curso</label>
								<input type="text" name="turma" id="turma" value="<?php the_field('turma'); ?>" disabled>
							</div>
						</div>

						<div class="form-row">
							<p class="text-obrigatorio">*Campos obrigatórios</p>
						</div>

						<div class="form-row">
							<a href="#" class="btn btn-form open-form">Enviar</a>
						</div>
					</div>

					<div class="form_part-2">
						<p class="modal__conteudo-title">Falta pouco. Complete o procedimento</p>

						<div class="form-row">
							<div class="form-field-large">
								<label for="nome">RG</label>
								<input type="text" name="rg" id="rg" >
							</div>
							<div class="form-field-small">
								<label for="nome">ÓRGÃO EMISSOR</label>
								<input type="text" name=orgao id="orgao" >
							</div>
						</div>

						<div class="form-row">
							<div class="form-field-large">
								<label for="nome">data de nascimento</label>
								<input type="text" name="data" id="data" >
							</div>
						</div>

						<div class="form-row">
							<div class="form-field-large">
								<label for="nome">nacionalidade</label>
								<input type="text" name="nacionalidade" id="nacionalidade" >
							</div>
						</div>

						<div class="form-row">
							<div class="form-field-large">
								<label for="nome">naturalidade</label>
								<input type="text" name="naturalidade" id="naturalidade" >
							</div>
						</div>

						<div class="form-row">
							<div class="form-field-large">
								<label for="nome">sexo</label>
								<input type="text" name="sexo" id="sexo" >
							</div>
						</div>

						<div class="form-row">
							<div class="form-field-large">
								<label for="nome">endereço</label>
								<input type="text" name="endereco" id="endereco" >
							</div>
						</div>

						<div class="form-row">
							<div class="form-field-large">
								<label for="nome">cep</label>
								<input type="text" name="cep" id="cep" >
							</div>
						</div>

						<div class="form-row">
							<div class="form-field-large">
								<label for="nome">cidade</label>
								<input type="text" name="cidade" id="cidade" >
							</div>
							<div class="form-field-small">
								<label for="nome">estado</label>
								<input type="text" name=estado" id="estado" >
							</div>
						</div>

						<div class="form-row">
							<div class="form-field-large">
								<label for="nome">telefone alternativo</label>
								<input type="text" name="tel" id="tel" >
							</div>
						</div>

						<div class="form-row">
							<div class="form-field-large">
								<label for="nome">graduação</label>
								<input type="text" name="graduacao" id="graduacao" >
							</div>
						</div>

						<div class="form-row">
							<div class="form-field-large">
								<label for="nome">conclusão</label>
								<input type="text" name="conclusao" id="conclusao" >
							</div>
						</div>

						<div class="form-row">
							<div class="form-field-large">
								<label for="nome">instituição</label>
								<input type="text" name="instituicao" id="instituicao" >
							</div>
						</div>

						<div class="form-row">
							<div class="form-field-large">
								<label for="nome">cidade</label>
								<input type="text" name="cidade-curso" id="cidade-curso" >
							</div>
						</div>

						<div class="form-row">
							<input type="submit" class="btn btn-form open-form" value="concluir">
						</div>
					</div>
				</form>
			</div>
		</div>
		<a href="#" class="btn-close close">X</a>
	</div>
</div>











