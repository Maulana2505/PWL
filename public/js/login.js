document.getElementById('login-click').addEventListener('click', function() {
     document.getElementById('login-form').style.left = "-800px";
     document.getElementById('regis-form').style.left = "10px"
     console.log('click')
})
document.getElementById('regis-click').addEventListener('click', function() {
     document.getElementById('login-form').style.left = "10px";
     document.getElementById('regis-form').style.left = "800px"
     console.log('click')
})