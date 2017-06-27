(function($){
	$.fn.validettaLanguage = {};
	$.validettaLanguage = {
		init : function(){
			$.validettaLanguage.messages = {
				required	: '入力必須項目です。',
				email		: 'メールアドレスを正しく入力してください。',
				number		: '半角数字で入力してください。',
				maxLength	: '{count}桁以下で入力してください。',
				minLength	: '{count}桁以上で入力してください。',
				maxChecked	: '{count}個以上チェックしてください。',
				minChecked	: '{count}個以上チェックしないでください。',
				maxSelected : '{count}個以上選択しないでください。',
				minSelected : '{count}個以上選択してください。',
				notEqual	: '入力内容が異なります。',
				different   : '入力内容が異なります。',
				creditCard	: 'クレジットカードを正しく入力してください。'
			};
		}
	};
	$.validettaLanguage.init();
})(jQuery);