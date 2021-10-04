function showLogin() {
    document.getElementById("login").style.display = "block";
    document.getElementById("products").style.display = "none";
    document.getElementById("register").style.display = "none";
    }
  
    function showSignUp() {
      document.getElementById("register").style.display = "block";
      document.getElementById("products").style.display = "none";
      document.getElementById("login").style.display = "none";
      }
  
    function hideElements(){

      document.getElementById("login").style.display = "none";
      document.getElementById("register").style.display = "none";

     
    }
    function imageClick(name) {
      
      var url = new URL("http://localhost/ITEC%20Dev2/Product.php");
      url.searchParams.set('name',name);
      window.location.href= url;
    }

     function goHome() {
    
     window.location.href="http://localhost/ITEC%20Dev2/Home.php";
      
     }
    
  



