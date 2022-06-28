

 document.getElementById('btn1').addEventListener('click', function() {
          document.querySelector('.form-container').classList.toggle('active')
          console.log('click')
     })
     document.getElementById('close-login').addEventListener('click', function() {
          document.querySelector('.form-container').classList.remove('active')
          console.log('click')
     })
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
     document.getElementById('book-mobil').addEventListener('click', function() {
          document.querySelector('.form-booknow').classList.toggle('active')
          console.log('click')
     })