<html>
  <head>
  <title>Table Form</title>
  </head>
  <body>
  
   <h1>Student Record</h1>
   
   <table id="student_record" border='4'>
   
   </table>
   
   <script>
       const studentRecord= document.getElementById("student_record");
	   
	   console.log("Hello World");
	   
	   const row1 = studentRecord.insertRow();
	   
	   const row1col1 = row1.insertCell();
	   row1col1.innerHTML = "Last Name";
	  
	   const row1col2 = row1.insertCell();
	   row1col2.innerHTML = "First Name";
	   
	   const row2 = studentRecord.insertRow();
	   const row2col1 = row2.insertCell();
	   const row2col2 = row2.insertCell();
	   
	   const inputLastName = document.createElement("INPUT");
	   inputLastName.type = "text";
	   inputLastName.placeholder = "Enter Last Name";
	   
	   row2col1.append(inputLastName);
	   
	   console.log(studentRecord);
   </script>
  </body>
 </html>