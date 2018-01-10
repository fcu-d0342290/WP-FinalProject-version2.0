
function check() {
    p1 = document.form1.inputPassword.value;
    p2 = document.form1.confirmPassword.value;
    if (p1 == p2) {
        if (p1.length > 6 && p2.length > 6) { alert("加入成功"); return true; }
        else { alert("密碼設定至少 7 碼以上"); return false; }
    }
    else {
        alert("兩組密碼不一致");
        return false;
    }
}
