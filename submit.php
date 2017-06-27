<?php
header("Content-Type: text/html;charset=utf-8");
mb_language('ja');
mb_internal_encoding( "utf-8" );

if(mb_send_mail($_POST[emailAddress], "【要対応】登録テストメール", "これはテストメールです\n\n担当者各位\n\n".$_POST[kanjiName]."（".$_POST[kanaName]."）様よりご応募がありました。\nご登録いただいた内容は以下の通りです。\n====================================\nメールアドレス　：".$_POST[emailAddress]."\n携帯電話番号　　：".$_POST[phoneNumber]."\n年齢　　　　　　：".$_POST[age]." 歳\n現在職種　　　　：".$_POST[current_job]."\n希望職種　　　　：".$_POST[hope_job]."\n契約形態　　　　：".$_POST[contract_form]."\nお住いの最寄り駅：".$_POST[nearest_station]."\n自己PR：\n".$_POST[profile]."\n====================================\n\nご担当者より応募者様へ連絡をお願いします。\n\n※このメールに心当たりがない場合は大変お手数ですがメールを削除してください。\n\n---\nLIVE ESTリクルートシステム\n---", "From: match.suzuki@gmail.com", '-f match.suzuki@gmail.com')){
	echo "メールが送信されました";
}else{
	echo "メールの送信に失敗しました";
}

?>