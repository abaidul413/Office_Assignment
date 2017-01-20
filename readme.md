# Install

  Check the composer Installation Otherwise install composer
  
       composer install
 
  if you have already composer installed
   
      composer update
           
 ####Run this command to clone
 
 git clone https://github.com/abaidul413/Office_Assignment.git job_portal
 
 Go to job_portal server folder
 
      cd job_portal
      
 Check the Database and username and password in the .env file.
 
 ####After install 
 
 run following command
 
     php artisan migrate
 
 You are done. Check your server, run following command
 
      php artisan serve

Then, Browsing the following url,

     http://localhost:8000/

##### Wellcome Our Job Portal Home page
   
   ##step-1:
      
   ##### Registration:  click to registration button
         
           Name:  Requered
           E-Mail Address: Requered and valide email
           Password: Requered and at least 6 digit
           Confirm Password: Requered 
     
     Message: Welcome, You are register Successfully As a Company HR
     
   ##step-2:
   
   #####Login: Click Login button.
   
        E-mail: Registered email that You have registration
        Password: Registered password
        
    wellcome, You are login, You can see Your posted job.
    
    Click On your name that is situated corner of right side. And click to Jobs
    for Post a new  job.
    
   ## Step-3:
   
   #####Create A new job
      
       Email: your registered Email
       Title: Job title will go here
       Post Description: Job description will go here
       
   Then, click Create Job, Your job Created Successfully!!
   
   you will get A email, check your email By,
    
       mailtrap.io
   
   Then, Click Approve or spam
    
   Your Job will publish when this will approved from moderation board
   
   You can see the All job in home page those jobs are approve from moderation board
   
  ###### You can Edit And Delete Your job 
  
  You can see Bar Chart of how many job posted in Last six month
  
     visite: http://localhost:8000/barchart
  
  You can see Pix Chart of rating Approve and Spam jobs per month
  
     visite: http://localhost:8000/piechart
  
                  
            
         
 
 
 
 