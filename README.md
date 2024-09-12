PHP Submit form

Create a PHP web application that allows a user to submit feedback through a form. The submitted feedback should be stored in a text file along with the current timestamp.

Requirements:


1. Create an HTML Form
The form should have the following fields:
Name (text input) Email (text input) Feedback (textarea) Submit (button)
The form should use the POST method to submit data.


2. PHP Script to Handle Form Submission
The PHP script should:
Capture the data from the form fields. Validate the inputs:
Ensure that none of the fields are empty.
Optionally, validate that the email is in a correct format.
Preserve Submitted Data on Validation Failure:
If the validation fails (e.g., a field is empty), the form should be re-displayed with the previously entered data still visible.
Display an appropriate error message indicating which field(s) need correction.
If the validation is successful:
Append the data to a text file ( feedback.txt ).
Each entry should include the name, email, feedback, and the current timestamp. Each entry should be stored on a new line in the following format:
               [Timestamp] Name: <name>, Email: <email>, Feedback: <feedback>
After successful submission, display a success message to the user.


3. File Handling
Ensure that if the feedback.txt file doesn’t exist, it is created by the script.
Use the a+ mode for the fopen function to append data to the file. 4. Styling (Optional)
Add some basic CSS to make the form look neat.


4. Styling (Optional)
Add some basic CSS to make the form look neat.
