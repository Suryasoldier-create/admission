function processPayment() {
  var cardNumber = document.getElementById("cardNumber").value;
  var expiryDate = document.getElementById("expiryDate").value;
  var cvv = document.getElementById("cvv").value;

  // Validate card details
  if (cardNumber === "" || expiryDate === "" || cvv === "") {
    alert("Please fill in all card details.");
    return;
  }

  // Assume payment processing logic here
  // You can make an AJAX request to a server-side script to process payment
  alert("Payment processed successfully!");
}
