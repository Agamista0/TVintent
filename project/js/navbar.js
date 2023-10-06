document.addEventListener('DOMContentLoaded', () => {
    const toggleButton = document.getElementById('toggleButton');
    const navbarlist = document.getElementById('navbar-list-small');
    const overlay = document.getElementById('overlay');
    const navbarlistli = navbarlist.getElementsByTagName('li');
  
    if (toggleButton && navbarlist) {
      toggleButton.addEventListener('click', (event) => {
        event.stopPropagation();
        navbarlist.classList.add('active');
        overlay.classList.add('active');
      });
  
      document.body.addEventListener('click', (event) => {
        if (
          event.target !== toggleButton &&  
          event.target !== navbarlist &&    
          ![...navbarlistli].includes(event.target)  
        ) {
          navbarlist.classList.remove('active');
          overlay.classList.remove('active');
        }
      });
    }
  });
  