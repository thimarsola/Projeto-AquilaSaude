<!--cta-->
<div class="cta">
	<div class="container">
		<hr>
		<p>Se interessou? Agende já sua avaliação com o nosso especialista clicando no botão abaixo!</p>
		<a rel="nofollow" href="https://api.whatsapp.com/send?phone=55<?= formatPhone(CONTACT["whatsapp"]["number"]); ?>&text=<?= urlencode("Olá " . SITE['name'] . ",gostaria de agendar uma avaliação para a especialidade: " . get_the_title()); ?>" class="btn btn-blue-500" target="_blank" title="Vamos agendar?">Agende sua avaliação</a>
	</div>
</div>
<!--end of cta-->