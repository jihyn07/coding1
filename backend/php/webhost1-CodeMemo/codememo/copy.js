function copy(code) {
    alert('복사완료!');
    let $temp = $("<textarea>");
    $("body").append($temp);
    $temp.val($(code).text()).select();
    document.execCommand("copy");
    $temp.remove();
}