//clicked on first button
function buyItem1(){
    console.log("first button clicked")
    verifyInfo();
}
//clicked on second button
function buyItem2(){
    console.log("second button clicked")
}
//clicked on third button
function buyItem3(){
    console.log("third button clicked")
}
function verifyInfo(){
    let username = document.getElementById("username-field").value;
    let password = document.getElementById("password-field").value;
    if(password.length == 0 | username.length == 0){
        alert("invalid username or password");
    }
    console.log(username);
    console.log(password);
}