alert("hai")
function validation() {
    var user = document.getElementById("user").value ;
    var pw = document.getElementById("pw").value ;
    if (user == "sofil123" && pw == "hallo" ){
        window.location.href("http://localhost/webpro20/hh/hooh.html")
        return true;
    } else{
        alert("login gagal");
        return false;
    }
}

function validation() {
    var sofil = document.getElementById('user').value + document.getElementById('pw').value ;
    var aulia = ('sofil123') + ('hallo');
    if (sofil == aulia) {
        var muna = document.getElementById('akses').innerHTML = alert ('login sukses');
    }
    else { 
        var muna = document.getElementById('akses').innerHTML = alert ('login failed')
     } ;
}