function showModal(itemName) {
    var modal = document.getElementById("mymodel");
    var modalMessage = document.getElementById("model-message");
    modalMessage.textContent = "Do you want to add " + itemName + " to your order?";
    modal.style.display = "block";
  }
  
  var span = document.getElementsByClassName("close")[0];
  var modal = document.getElementById("mymodel");
  
  span.onclick = function() {
    modal.style.display = "none";
  }
  
  window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
  }
  
  var addToOrderBtn = document.getElementById("add-to-order-btn");
  addToOrderBtn.onclick = function() {
    // You can add your logic here to add the item to the order
    // For example, send an AJAX request to the server to add the item
    modal.style.display = "none";
  }