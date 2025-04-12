<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['full-name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "park0630p@naver.com"; // 여기에 네 메일 주소 입력 (회사 연락 받을 곳)
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $body = "이름: $name\n이메일: $email\n제목: $subject\n메시지:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "메일이 성공적으로 전송되었습니다.";
    } else {
        echo "메일 전송에 실패했습니다.";
    }
}
?>