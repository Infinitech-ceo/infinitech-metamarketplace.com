<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "officialinfo.infinitech@gmail.com";  // 送信先メールアドレス
    $subject = "お問い合わせフォームからのメッセージ";
    $body = "お名前: $name\nメールアドレス: $email\nメッセージ: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "✅ お問い合わせを送信しました。ありがとうございます！";
    } else {
        echo "❌ メールの送信に失敗しました。後ほど再試行してください。";
    }
}
?>
