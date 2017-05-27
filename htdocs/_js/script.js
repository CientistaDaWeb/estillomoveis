$(function() {
	$('.produto a').lightBox({
        imageLoading: '/_css/_img/ajax-loader.gif',
        imageBtnClose: '/_css/_img/btn-close.gif',
        imageBtnPrev: '/_css/_img/btn-prev.gif',
        imageBtnNext: '/_css/_img/btn-next.gif',
        txtImage: 'Produto',
        txtOf: 'de'
    });
});
$(document).ready(function(){
    $(document).pngFix();
});
function valida_contato(){
    var nome = document.getElementById('nome');
    var email = document.getElementById('email');
    var mensagem = document.getElementById('mensagem');
    if(nome.value.replace(/[ ]+/g,"").replace(/\r\n/g, "")== ""){
		alert('O nome deve ser preenchido!');
		return false;
    }
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value)){
	}else{
		alert('O e-mail deve ser preenchido corretamente!');
		return false;
	}
    if(mensagem.value.replace(/[ ]+/g,"").replace(/\r\n/g, "")== ""){
		alert('A mensagem deve ser preenchida!');
		return false;
    }
    return true;
}

