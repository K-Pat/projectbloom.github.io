const form = document.querySelector('CarepageForm');
form.addEventListener('submit', (event) => {
  event.preventDefault(); // Prevent the default form submission behavior

  // Get the form data
  const formData = new FormData(form);

  // Create a text file and write the form data to it
  const file = new Blob([formData], { type: 'text/plain' });
  const fileWriter = new FileWriter();
  fileWriter.write(file, 'test_data.txt');

  // Display a success message to the user
  alert('Form data saved successfully!');
});
