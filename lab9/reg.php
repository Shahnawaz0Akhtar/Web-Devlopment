<html>
    <head>
        <meta charset="UTF-8">
        <title>Registion form using css</title>
        <style>
            .account-page
            {
                padding : 50px 0;
                background: radial-gradient(rgb(217, 177, 221),#660a5e);
            }
            .form-container{
                background-color: #fff;
                width: 350px;
                height: 820px;
                position:relative;
                text-align:center;
                padding: 20px 0;
                margin:auto;
                box-shadow: 0 0 20px 0 rgba(0,0,0,0.5);
            }
            .form-btn{
                display: inline-block;
            }
            #Indicator{
                width: 100px;
                border: none;
                margin-top: 8px;
                height: 3px;
                background-color:#660a5e;
            }
            .form-container span{
              padding:0 10px;
              font-weight: bold;
              cursor: pointer;
              width: 100px;
              color:rgb(3, 37, 102);
              font-family:Comic Sans MS, Haettenschweiler, 'Arial Narrow Bold', sans-serif ;
              font-size: 18px;
            }
            .form-container form{
              max-width: 300px;
              top: 70px;
              position: absolute;
              padding: 0 20px;
            }
            form input{
              width:100%;
              height: 30px;
              margin: 10px 0;
              padding: 0 10px;
              border: 1px solid #660a5e;
              border-radius: 30px;
            }
            form .btn{
              border: none;
              cursor: pointer;
              margin: 10px 0;
              width: 80%;
              color:#fff;
              background:#660a5e;
            }
            form.btn:focus{
              outline:none;}
              form .btn:hover{
                background:#230e2e ;
              }
              form a{
                font-size: 12px;
              }

              .btn{
                display: inline-block;
                background: #660a5e;
                color: #fff;
                padding: 8px 30px;
                margin: 30px 0;
                border-radius: 30px;
                transition: background 0.5s;
              }
              .btn:hover{
                background: #230e2e;
              }
              select{
                width:100%;
                height: 30px;
                margin: 10px 0;
                padding: 0 10px;
                border: 1px solid #660a5e;
                border-radius: 30px;
              }
              textarea{
                
                width:100%;
                border: 1px solid #660a5e;
              }
              table{
                width:100%;
                height: 30px;
                margin: 10px 0;
                padding: 0 10px;
                border: 1px solid #660a5e;
                border-radius: 30px;
              }
              
   
        </style>
    </head>


  <body>
    
      
     <div class="account-page">
        <div class="container">
            
                
                 <div class="form-container">
                       <div class="form-btn">
                           <span>Registration Form</span>
                           <hr id="Indicator">
                       </div>
                       
                       <form name="reg_form" action="Connection.php" method="post" >

                        <input type="text" name="Stu_ID" placeholder="Student ID">
                        <input type="text" name="fn" id="idfname" placeholder="First name">
                        <input type="text" name="mn" id="idmname" placeholder="Midle Name">
                        <input type="text" name="ln" placeholder="Last Name">
                        <input type="DATE" name="DOB" placeholder="DOB">
                        <table class="Gender">
                          <tr>
                            <td>
                                Gender :
                            </td>
                            <td>
                                <input type="radio" name="Gender" value="Male">&emsp;&emsp;Male
                            </td>
                            <td >
                                <input type="radio" name="Gender" value ="Female">&emsp;&emsp;&nbsp;Female
                            </td>
                        </tr>
                        </table>
                        <select id="Course" name="Co">
                          <option><-- Please Select Course name --></option>
                          <option>Diploma Engineering (CS)</option>
                          <option>Diploma Engineering (DME)</option>
                          <option>Diploma Engineering (DCE)</option>
                          <option>Diploma Engineering (DEE)</option>
                        </select>
                        <select id="Year_Sem" name="Year">
                          <option><-- Please Select Year/Sem --></option>
                          <option>Semester 1</option>
                          <option>Semester 2</option>
                          <option>Semester 3</option>
                          <option>Semester 4</option>
                          <option>Semester 5</option>
                          <option>Semester 6</option>
                          <option>1ST Year</option>
                          <option>2ND Year</option>
                          <option>3RD Year</option>
                        </select>
                        <select id="Dapartment" name="Dep">
                          <option><-- Please Select Dapartment Name --></option>
                          <option>Faculty of Engineering & Technology</option>
                          <option>Faculty of Commerce & Business Studies</option>
                          <option>Faculty of LAW</option>
                          <option>Faculty of Education</option>
                        </select>
                        <input type="text" name="mobile" placeholder="Enter your number">
                        <input type="email" name="email" placeholder="Email">
                        <textarea id="ADDRESS" name="address" cols="30" rows="5"></textarea>
                        <button type="submit" class="btn" name="sb">Submit</button>
                        <button type="reset" class="btn">Reset</button>
                       </form>
                </div>
         </div>
    </div>

  </body>
</html>