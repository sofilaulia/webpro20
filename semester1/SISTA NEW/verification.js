let login = document.getElementById("login-form");
console.log('login');
login.addEventListener("click", (even) => {
    even.preventDefault();
    let email = document.getElementById("emaillogin").value;
    let pw = document.getElementById("pwlogin").value; 
    if (email === "admin" && pw === "12345678") {
        let link = document.createElement("a")
        link.href = "index_admin.html";
        console.log('click');
        link.click()
        
    } 
    else{
        if (email === "user" && pw === "12345678") {
            let link = document.createElement("a")
            link.href = "index_user.html";
            console.log('click');
            link.click()
        } 
    }
})
