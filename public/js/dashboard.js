
     
     document.getElementById('book-mobil').addEventListener('click', function() {
                    document.querySelector('.from-booknow').classList.toggle('activet')
                    console.log('click')
               })
     document.getElementById('close-book').addEventListener('click', function() {
          document.querySelector('.from-booknow').classList.remove('activet')
          console.log('click')
     })