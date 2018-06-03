<?php
	$acao = $_REQUEST['acao'];

	if($acao=="Enviar")
	{
		$Nome = $_REQUEST['Nome'];
		$Email = $_REQUEST['Email'];
		$Telefone = $_REQUEST['Telefone'];
		$Data = $_REQUEST['Data'];
		$Descricao = $_REQUEST['Descricao'];
		$NumeroPessoas = $_REQUEST['NumeroPessoas'];
		$Local = $_REQUEST['Local'];
		$TipoLocal = $_REQUEST['TipoLocal'];
		$Observacoes = $_REQUEST['Observacoes'];
	
		//para o envio em formato HTML
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html;
		charset=iso-8859-1\r\n";
		
		//endere�o do remitente
		if($Email)
		{
			$headers .= "From: ".$Nome." <".$Email.">\r\n";
			$headers .= "Reply-To: ".$Email."\r\n";
		}
		else
		{
			$headers .= "From: ".$Nome." <sememail@studioefestas.com.br>\r\n";
		}
		$ASSUNTO = "Orçamento via site";
		
		$MSG = "";
		if(!empty($Nome)) { $MSG .= "Nome: ".$Nome."<br>"; }
		if(!empty($Email)) { $MSG .= "E-mail: ".$Email."<br>"; }
		if(!empty($Telefone)) { $MSG .= "Telefone: ".$Telefone."<br>"; }
		if(!empty($Data)) { $MSG .= "Data do evento: ".$Data."<br>"; }
		if(!empty($Descricao)) { $MSG .= "Descrição: ".$Descricao."<br>"; }
		if(!empty($Local)) { $MSG .= "Local: ".$Local."<br>"; }
		if(!empty($Observacoes)) { $MSG .= "Observações: ".$Observacoes."<br>"; }

		mail("celsofrias@celsofrias.com",$ASSUNTO,$MSG,$headers);

	}

