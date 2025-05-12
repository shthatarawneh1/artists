/* Add button action */
function toggleFriendStatus(button) {
  // Check the current state of the button (friend or not)
  if (button.classList.contains('added')) {
    // If the button has the 'added' class, remove friend
    button.innerHTML = '<i class="fa fa-user"></i>';  // Restore icon to "Add Friend"
    button.classList.remove('added');  // Remove the 'added' class
    button.style.backgroundColor = "#fff";  // Set background color to white
    button.style.color = "#007bff";  // Set text color to blue
  } else {
    // If the button does not have the 'added' class, add friend
    button.innerHTML = '<i class="fa fa-check"></i>';  // Change icon to check mark
    button.classList.add('added');  // Add the 'added' class
    button.style.backgroundColor = "#007bff";  // Set background color to blue
    button.style.color = "#fff";  // Set text color to white
  }
}



