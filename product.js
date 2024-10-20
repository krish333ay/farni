// Product Search Functionality
document.getElementById('searchBtn').addEventListener('click', function () {
    const searchQuery = document.getElementById('searchInput').value.toLowerCase();
    const products = document.querySelectorAll('.product__card');
  
    products.forEach(function (product) {
      const productName = product.getAttribute('data-name').toLowerCase();
      
      if (productName.includes(searchQuery)) {
        product.style.display = 'block';
      } else {
        product.style.display = 'none';
      }
    });
  });
  
  // Allow search on pressing "Enter" in the input field
  document.getElementById('searchInput').addEventListener('keypress', function (e) {
    if (e.key === 'Enter') {
      document.getElementById('searchBtn').click();
    }
  });
  