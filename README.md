# HOSTEL-MANAGEMENT-SYSTEM
Simple in front-end and fully covered in backend



**INTRODUCTION :-**
			HOSTEL MANAGEMENT SYSTEM is a software developed for managing various activities in the hostel.

**PROPOSAL :-**
				The basic purpose of designing this project is to get rid from manual entry and record system and try to give easy and simple database management system for hostels.
                                   This project is designed to keep the record of the students living in hostel, allocation of rooms, their monthly or semester wise dues and many more things but we are trying to make this management system as much as simple and easy as we  can, but we well try to cover all the basic elements use for hostel management database.

**SOFTWARE USED :-**

**OPERATING SYSTEM**    :	WINDOWS 10
**FRONT-END LANGUAGE**  :	HTML, CSS, JAVASCRIPT
**BACK-END LANGUAGE**   :	PHP, SQL
**DATABASE SERVER**	    : MYSQL
**DATABASE TOOL**   	  : PHPMYADMIN

**TABLES :-**

ENTITY NAMES :	Hostel
DESCRIPTION   :	Many institutes provide the facility of hostel for boys and girls.
ATTRIBUTES | DATA TYPE | 	SIZE | 	NULL |	PRIMARY KEY |	FOREIGN KEY 
--- | --- | --- | --- | --- | ---
Build_no |	Varchar |	10 |	No | 	Yes	
No_of_rooms |	Int | 20 |	No | No		
No_of_student |	Int |	20 |	No | No
Annual_expense |	Int |	20 |	No | No		


ENTITY NAMES	hostel_furniture
ATTRIBUTES	| DATA TYPE	| SIZE |	PRIMARY KEY |	FOREIGN KEY
--- | --- | --- | --- | --- 
Furniture_type	| text |	20	| 		
Furniture_id	| varchar	 |20 |		|Yes	
Room_id |	varchar|	20|			| |Room_entry.room_id



ENTITY NAMES	Mess_entry
ATTRIBUTES	DATA TYPE	SIZE	NULL	PRIMARY KEY	FOREIGN KEY
Memp_name	Text 	20	No		
Memp_id	Varchar 	50	No	Yes	
Ph_no	Int	15	No		
DOB	Date	10	No		
Salary	Int	10	No		
Build_no	Varchar 	10	No		hostel.Build_no



ENTITY NAMES	Room_entry
ATTRIBUTES	DATA TYPE	SIZE	NULL	PRIMARY KEY	FOREIGN KEY
Room_id	Room_id	20	No	Yes	
Capacity	Int 	5	No		
Build_no	Varchar 	20	No		hostel.Build_no



ENTITY NAMES	Student_entry
DESCRIPTION	Students will be in hostel or hostel has students.
ATTRIBUTES	DATA TYPE	SIZE	NULL	PRIMARY KEY	FOREIGN KEY
S_name	Text 	55	No		
sid	Varchar 	20	No	Yes	
Father_name	Text	55	No		
Department	Text	55	No		
Ph_no	Int	20	No		
Gender	Text 	10	No		
Age	Int	5	No		
DOB	Date	10	No		
Email	Varchar	55	No		
Room_id	Varchar	20	No		Room_entry.room_id
Food_type	Text	10	No		
Build_no	Varchar	20	No		hostel.Build_no
Room_type	Text	10	No		
Fee	Int	20	No		



ENTITY NAMES	Visitor
ATTRIBUTES	DATA TYPE	SIZE	NULL	PRIMARY KEY	FOREIGN KEY
V_name	Text	55	No 		
S_name	Text	55	No		
sid	Varchar	20	No		Student_entry.sid
V_date	Date	10	No		
Time_in	Time	6	No		
Time_out	Time	6	No		


RELATIONAL SCHEMA :- 
![image](https://user-images.githubusercontent.com/64410018/128169182-be7abf04-4e80-4798-93b1-81c494ee132a.png)

****Foreign key will be in italic and primary will be in bold****


**SCREENSHOTS :-

**THE MAIN PAGE**

![image](https://user-images.githubusercontent.com/64410018/128169633-5cc9439e-168f-499c-9242-4b3cc2cb34de.png)

**STUDENT LOGIN**

![image](https://user-images.githubusercontent.com/64410018/128169678-98ce5d90-b82a-45b5-a271-bada77d0c7cc.png)

**AFTER SUCCESSFULLY LOGGING IN STUDENT LOGIN,**

![image](https://user-images.githubusercontent.com/64410018/128169720-614cd7e9-b079-441a-b4d4-c4f0b68ff930.png)

**STUDENT REGISTRATION:**

![image](https://user-images.githubusercontent.com/64410018/128169791-c7ae6225-c6a6-4b0e-b4b1-3ebf02f7f4ca.png)

**VISITOR’s ENTRY**

![image](https://user-images.githubusercontent.com/64410018/128169847-d604cfca-5124-405c-a000-75b0d1a6b8ed.png)

**ADMIN LOGIN:**

![image](https://user-images.githubusercontent.com/64410018/128169940-d0cd46e1-4ad6-4f8b-8e92-bb612b558971.png)

**AFTER LOGGING IN ADMIN SUCCESSFULLY,**

![image](https://user-images.githubusercontent.com/64410018/128170025-b3b93bbc-f2cd-4d6e-b06c-7617a6fd6c31.png)

**STUDENT’s DETAILS DISPLAY,**

![image](https://user-images.githubusercontent.com/64410018/128170136-443aea6b-edd4-46fc-8352-fe88417ec4d6.png)

**UPDATING STUDENT DETAILS ON CLICKING THE “UPDATE”
 BUTTON FOR THE RESPECTIVE STUDENT,
**

![image](https://user-images.githubusercontent.com/64410018/128170228-3f261fb3-beb2-422e-99a2-f848a54ca255.png)

**VALUES EXPORTED AS EXCEL ON CLICKING THE BUTTON “EXPORT AS EXCEL”**

![image](https://user-images.githubusercontent.com/64410018/128170270-96ca932b-4152-49f5-a7bd-6f578fa91fbf.png)

**MESS**

![image](https://user-images.githubusercontent.com/64410018/128170343-757960df-0ebd-4248-8f63-173c0a85f2b0.png)

**MESS EMPLOYER’s ENTRY**

![image](https://user-images.githubusercontent.com/64410018/128170376-f1a0c572-e98a-4379-807d-9fe8824c3bd5.png)

**MESS EMPLOYER’s DETAILS**

![image](https://user-images.githubusercontent.com/64410018/128170442-9b8f3b89-2b87-47da-8d63-c997e532363a.png)

**VISITOR’S DETAILS**

![image](https://user-images.githubusercontent.com/64410018/128170566-b8799baf-f09d-48ed-af00-78cffb2bccc5.png)

**ROOM’s ENTRY**

![image](https://user-images.githubusercontent.com/64410018/128170625-e4207fb4-b4ef-475b-9ee0-b2f4314fb5b0.png)

**ROOM DETAIL**

![image](https://user-images.githubusercontent.com/64410018/128170693-02ea2f32-66a7-4366-957f-9e3409cfc0fe.png)


**HOSTEL DETAIL**

![image](https://user-images.githubusercontent.com/64410018/128170733-daa4f4fa-37fb-448b-a3dc-513711ca0936.png)

**FURNITURE’s DETAIL**

![image](https://user-images.githubusercontent.com/64410018/128170784-be302474-8a5d-4c1c-81d3-167ca3d0be07.png)
