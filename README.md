# Course_Feeback_Application

Objective:
This Application takes feedback from all the students for the courses taken for the specific semester and maintains a database. 
It then calculates mean for each course and each  Faculty member and each course.This application is developed using HTML, PHP, CSS , MySQL
Admin will have the permission to view the feedback means and print it in pdf format. Admin is supposed to generate new table for current semester and send the feedback link to all the students.

Inbuilt PHP libraries used:
PHP Mailer: Inbuilt class to send mails.
TCPDF : Inbuilt class for generating pdf

Tables used:
COURSEINFO – It contains details of all courses available for the semester. 
			columns: courseno, coursename, faculty_id, semester, dept, credits, credit type
USERINFO   - User login details - username: Studentid
								  Password: Random password recieved through mail
								  View: 0 or 1. Once, a student gives a feedback, the view column corresponding to his username is made ‘1’
ADMIN_INFO – Contains the Admin login details.	
FEEDBACK_YEAR_SEM – Contains feedback values for each course.


Files: 
Admin.php - Login page for the admin
Admin1-1.php - Current year and current semester (odd - fall or even - spring)
Admin1-2.php - create table for current semester and generates e-mail which contains link for feedback page
index.php - Student login page
form1.php - displays courses taken by the specific student for the current semester
cfeed.php - Contains course evaluation page.
lab.php - contains laboratory course evaluation page
vfeed.php - contains all courses and a link to view feedback
avg.php - calculates avg of feedback given by the students per each course
labavg.php - calculates avg of feedback given by the students per each laboratory course
complete.php - Gives acknowledgement that feedback is submitted
fac.php - COntains all the faculty names with a link to view feedback
mail.php - calls phpmailer

 






