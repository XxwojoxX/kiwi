function toggleShopping() {
    let body = document.querySelector('body');
    let listCard = document.querySelector('.listcard');
    let total = document.querySelector('.total');
    let quantity = document.querySelector('.quantity');
  
    if (body && listCard && total && quantity) {
      body.classList.toggle('active');
    }
  }