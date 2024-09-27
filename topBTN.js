  const topBTN = document.querySelector(".top");

    window.addEventListener("scroll", () => {
      if (window.pageYOffset > 100) {

        topBTN.classList.add("activeBTN");
          
      }else{

        topBTN.classList.remove("activeBTN");
      }
  });

