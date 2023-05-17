// Show chat popup when chat icon is clicked
document.querySelector('.chat-icon img').addEventListener('click', function() {
    document.querySelector('.chat-popup').style.display = 'block';
  });
  
  // Hide chat popup when close button is clicked
  document.querySelector('.close-btn').addEventListener('click', function() {
    document.querySelector('.chat-popup').style.display = 'none';
  });
  