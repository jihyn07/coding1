<?php
    require ('_conn.php');
    // 폼에서 받은 데이터를 DB로 전송 : 글쓰기

    // 태그가 적용되지 않도록 php메소드 적용
    // 1. htmlspecialchars() : 태그 적용 금지
    // 2. nl2br() : 엔터를 br로 변경
    $subject = nl2br(htmlspecialchars($_POST['subject'], ENT_QUOTES, 'UTF-8'));
    $content = nl2br(htmlspecialchars($_POST['content'], ENT_QUOTES, 'UTF-8'));
    $type = $_POST['type'];

    $sqlwrite = "INSERT INTO `codememo` (`no`, `subject`, `type`, `content`) VALUES (NULL, '$subject', '$type', '$content');";
    if (!$subject || !$content) {
        echo "<script>alert('필수항목 미입력');location.href='index.php';</script>";
    } else {
        $result = mysqli_query($conn, $sqlwrite);
        if ($result) {
            echo "<script>location.href='index.php';</script>";
        }    
    }
?>