
          <script>
              
                var phone_total = 1;
                var bsc_total = 1;
                var msc_total = 1;
                var ref_total = 1;
                var job_total = 1;
                
                
                
                function secondary_degree_from(secondary_degree_obtained_from)
                {
                    if(document.getElementById(secondary_degree_obtained_from).value=="OTHERS")
                      {
                          var add ='<div class="control-group" id="secondary_degree_obtained_from_sub">';
                              
                              add +='<!-- secondary_degree_obtained_from Field -->';
                              add +='<div class="control-group">';
                              //add +='  <label class="control-label" for="input08"></label>';
                              add +='  <div class="controls">';
                              add +='    <input type="text" class="input-xlarge"  name="secondary_degree_obtained_from_others">';
                              add +='  </div>';
                              add +='</div>';
                              
                              add +='</div>';
                              
                              
                              $('#secondary_info').append(add);  
                      }    
                      else
                      {
                            $('#secondary_degree_obtained_from_sub').remove();
                      }
                }
                
                function higher_secondary_degree_from(higher_secondary_degree_obtained_from)
                {
                    if(document.getElementById(higher_secondary_degree_obtained_from).value=="OTHERS")
                      {
                          var add ='<div class="control-group" id="higher_secondary_degree_obtained_from_sub">';
                              
                              add +='<!-- higher_secondary_degree_obtained_from Field -->';
                              add +='<div class="control-group">';
                              //add +='  <label class="control-label" for="input08"></label>';
                              add +='  <div class="controls">';
                              add +='    <input type="text" class="input-xlarge"  name="higher_secondary_degree_obtained_from_others">';
                              add +='  </div>';
                              add +='</div>';
                              
                              add +='</div>';
                              
                              
                              $('#higher_secondary_info').append(add);  
                      }    
                      else
                      {
                            $('#higher_secondary_degree_obtained_from_sub').remove();
                      }
                }
                
                function secondary_degree_name(degree_name_secondary)
                {
                    if(document.getElementById(degree_name_secondary).value=="OTHERS")
                      {
                          var add ='<div class="control-group" id="degree_name_secondary_sub">';
                              
                              add +='<!-- secondary_degree_obtained_from Field -->';
                              add +='<div class="control-group">';
                              //add +='  <label class="control-label" for="input08"></label>';
                              add +='  <div class="controls">';
                              add +='    <input type="text" class="input-xlarge"  name="degree_name_secondary_others">';
                              add +='  </div>';
                              add +='</div>';
                              
                              add +='</div>';
                              
                              
                              $('#secondary_name_info').append(add);  
                      }    
                      else
                      {
                            $('#degree_name_secondary_sub').remove();
                      }
                }
                
                function higher_secondary_degree_name(degree_name_higher_secondary)
                {
                    if(document.getElementById(degree_name_higher_secondary).value=="OTHERS")
                      {
                          var add ='<div class="control-group" id="degree_name_higher_secondary_sub">';
                              
                              add +='<!-- higher_secondary_degree_obtained_from Field -->';
                              add +='<div class="control-group">';
                              //add +='  <label class="control-label" for="input08"></label>';
                              add +='  <div class="controls">';
                              add +='    <input type="text" class="input-xlarge"  name="degree_name_higher_secondary_others">';
                              add +='  </div>';
                              add +='</div>';
                              
                              add +='</div>';
                              
                              
                              $('#higher_secondary_name_info').append(add);  
                      }    
                      else
                      {
                            $('#degree_name_higher_secondary_sub').remove();
                      }
                }
                
                function secondary_board(board_secondary)
                {
                    if(document.getElementById(board_secondary).value=="OTHERS")
                      {
                          var add ='<div class="control-group" id="board_secondary_sub">';
                              
                              add +='<!-- board_secondary Field -->';
                              add +='<div class="control-group">';
                              //add +='  <label class="control-label" for="input08"></label>';
                              add +='  <div class="controls">';
                              add +='    <input type="text" class="input-xlarge"  name="board_secondary_others">';
                              add +='  </div>';
                              add +='</div>';
                              
                              add +='</div>';
                              
                              
                              $('#secondary_board_info').append(add);  
                      }    
                      else
                      {
                            $('#board_secondary_sub').remove();
                      }
                }
                
                function higher_secondary_board(board_higher_secondary)
                {
                    if(document.getElementById(board_higher_secondary).value=="OTHERS")
                      {
                          var add ='<div class="control-group" id="board_higher_secondary_sub">';
                              
                              add +='<!-- board_higher_secondary Field -->';
                              add +='<div class="control-group">';
                              //add +='  <label class="control-label" for="input08"></label>';
                              add +='  <div class="controls">';
                              add +='    <input type="text" class="input-xlarge"  name="board_higher_secondary_others">';
                              add +='  </div>';
                              add +='</div>';
                              
                              add +='</div>';
                              
                              
                              $('#higher_secondary_board_info').append(add);  
                      }    
                      else
                      {
                            $('#board_higher_secondary_sub').remove();
                      }
                }
                
                function major_secondary(major_field_secondary)
                {
                    if(document.getElementById(major_field_secondary).value=="OTHERS")
                      {
                          var add ='<div class="control-group" id="major_field_secondary_sub">';
                              
                              add +='<!-- major_field_secondary Field -->';
                              add +='<div class="control-group">';
                              //add +='  <label class="control-label" for="input08"></label>';
                              add +='  <div class="controls">';
                              add +='    <input type="text" class="input-xlarge"  name="major_field_secondary_others">';
                              add +='  </div>';
                              add +='</div>';
                              
                              add +='</div>';
                              
                              $('#secondary_major').append(add);  
                      }    
                      else
                      {
                            $('#major_field_secondary_sub').remove();
                      }
                }
                
                function major_higher_secondary(major_field_higher_secondary)
                {
                    if(document.getElementById(major_field_higher_secondary).value=="OTHERS")
                      {
                          var add ='<div class="control-group" id="major_field_higher_secondary_sub">';
                              
                              add +='<!-- major_field_higher_secondary Field -->';
                              add +='<div class="control-group">';
                              //add +='  <label class="control-label" for="input08"></label>';
                              add +='  <div class="controls">';
                              add +='    <input type="text" class="input-xlarge"  name="major_field_higher_secondary_others">';
                              add +='  </div>';
                              add +='</div>';
                              
                              add +='</div>';
                              
                              
                              $('#higher_secondary_major').append(add);  
                      }    
                      else
                      {
                            $('#major_field_higher_secondary_sub').remove();
                      }
                }
                
                function removePhone()
                {
                    if(phone_total>1)
                    {
                        var add ='#phone'+phone_total;
                        $(add).remove();
                        phone_total--;
                    }
                }
                
                function removeBsc()
                {
                    if(bsc_total>1)
                    {
                        var add ='#bsc'+bsc_total;
                        $(add).remove();
                        bsc_total--;
                    }
                }
                function removeMsc()
                {
                    if(msc_total>1)
                    {
                        var add ='#msc_add'+msc_total;
                        $(add).remove();
                        msc_total--;
                    }
                }
                function removeRef()
                {
                    if(ref_total>1)
                    {
                        var add ='#ref'+ref_total;
                        $(add).remove();
                        ref_total--;
                    }
                }
                function removeJobExp()
                {
                    if(job_total>1)
                    {
                        var add ='#job'+job_total;
                        $(add).remove();
                        job_total--;
                    }
                }
                
                function addPhone()
                {
                    phone_total++;
                    var add ='<div class="control-group" id="phone'+phone_total+'" >';
                        add +='<label class="control-label" for="input08">Phone</label>';
                        add +='<div class="controls">';
                        add +='<input type="text" class="input-xlarge"  name="phone'+phone_total+'">';
                        add +='</div>';
                        add +='</div>';
                        
                    $("#phone1").append(add);
                    
                }
                
                function employee()
                {
                    if (document.getElementById('is_employed').checked) {
                        var add ='<div class="control-group" id="emp_status">';
                            add +='<label class="control-label" for="select05">Employee Status</label>';
                            add +='<div class="controls">';
                            add +='<select id="employee_status" class="input-xlarge" name="employee_status">';
                            add +='<option value="Select">Select</option>';
                            add +='<option value="Full Time">Full Time</option>';
                            add +='<option value="Part Time">Part Time</option>';
                            add +='</select>';
                            add +='</div>';
                            add +='</div>';
                            
                        $("#employee_status").append(add);
                    }
                    else{
                        $("#emp_status").remove();
                    }
                }
                
                function previous_admission()
                {
                    var program = document.getElementById('program').value;
                    if (document.getElementById('is_pre_admission').checked) {
                        var add ='<div class="control-group" id="prev_adm">';
                            add +='  <div class="control-group">';
                            add +='    <label class="control-label" for="select06"> Previous Program</label>';
                            add +='    <div class="controls">';
                            add +='         <span class="input-xlarge uneditable-input">'+program+'</span>';
                            add +='    </div>';
                            add +='  </div>';

                            add +='  <!-- Previous Student Id Field -->';
                            add +='  <div class="control-group">';
                            add +='    <label class="control-label" for="input10">Previous Student Id</label>';
                            add +='    <div class="controls">';
                            add +='      <input type="text" class="input-xlarge" id="pre_std_id" name="pre_std_id">';
                            add +='    </div>';
                            add +='  </div>';

                            add +='  <!-- Previous Department or Institute Field -->';
                            add +='  <div class="control-group">';
                            add +='    <label class="control-label" for="input11">Previous Department or Institute</label>';
                            add +='    <div class="controls">';
                            add +='      <input type="text" class="input-xlarge" id="pre_dept_inst" name="pre_dept_inst">';
                            add +='    </div>';
                            add +='  </div>';

                            add +='  <!-- Previous Semester Field -->';
                            add +='  <div class="control-group">';
                            add +='    <label class="control-label" for="input12">Previous Semester</label>';
                            add +='    <div class="controls">';
                            add +='      <input type="text" class="input-xlarge" id="pre_semester" name="pre_semester">';
                            add +='    </div>';
                            add +='  </div>';

                            add +='</div>';
                            
                        $("#pre_admission").append(add);
                    }
                    else{
                        $("#prev_adm").remove();
                    }
                }
                
                function major_bsc(major_field_bsc)
                {
                    var i;
                    for ( i = 1; i <=bsc_total; i++) {
                      var major_bsc = "major_field_bsc"+i;
                      if(major_bsc == major_field_bsc) break;
                    }
                    
                    if(document.getElementById(major_field_bsc).value=="OTHERS")
                      {
                          var add ='<div class="control-group" id="major_field_bsc_sub'+i+'">';
                              
                              add +='<!-- BSc Major From Field -->';
                              add +='<div class="control-group">';
                              //add +='  <label class="control-label" for="input08"></label>';
                              add +='  <div class="controls">';
                              add +='    <input type="text" class="input-xlarge"  name="major_field_bsc_others'+i+'">';
                              add +='  </div>';
                              add +='</div>';
                              
                              add +='</div>';
                              
                              var major_bsc_info='#bsc_major'+i;
                              $(major_bsc_info).append(add);  
                      }    
                      else
                      {
                            var major_field_bsc_sub="#major_field_bsc_sub"+i;
                            $(major_field_bsc_sub).remove();
                      }
                }
                
                function major_msc(major_field_msc)
                {
                    var i;
                    for ( i = 1; i <=msc_total; i++) {
                      var major_msc = "major_field_msc"+i;
                      if(major_msc == major_field_msc) break;
                    }
                    
                    if(document.getElementById(major_field_msc).value=="OTHERS")
                      {
                          var add ='<div class="control-group" id="major_field_msc_sub'+i+'">';
                              
                              add +='<!-- MSc Major From Field -->';
                              add +='<div class="control-group">';
                              //add +='  <label class="control-label" for="input08"></label>';
                              add +='  <div class="controls">';
                              add +='    <input type="text" class="input-xlarge"  name="major_field_msc_others'+i+'">';
                              add +='  </div>';
                              add +='</div>';
                              
                              add +='</div>';
                              
                              var major_msc_info='#msc_major'+i;
                              $(major_msc_info).append(add);  
                      }    
                      else
                      {
                            var major_field_msc_sub="#major_field_msc_sub"+i;
                            $(major_field_msc_sub).remove();
                      }
                }
                
                
                function buet_gradute(bsc_degree_obtained_from)
                {
                    var i;
                    for ( i = 1; i <=bsc_total; i++) {
                      var bsc_obtained_from = "bsc_degree_obtained_from"+i;
                      if(bsc_obtained_from == bsc_degree_obtained_from) break;
                    }
                     
                      if(document.getElementById(bsc_degree_obtained_from).value=="BUET")
                      {
                          var add ='<div class="control-group" id="buet_grad_info_bsc'+i+'">';
                          
                              add +='<!-- BUET Graduation Department Field -->';
                              add +='<div class="control-group">';
                              add +='  <label class="control-label" for="select05">BUET Graduation Department</label>';
                              add +='  <div class="controls">';
                              add +='    <select id="buet_graduate_dept_bsc'+i+'" class="input-xlarge" name="buet_graduate_dept_bsc'+i+'">';
                              add +='      <option value="Select">Select</option>';
                              add +='      <option value="CSE">CSE</option>';
                              add +='      <option value="EEE">EEE</option>';
                              add +='    </select>';
                              add +='  </div>';
                              add +='</div>';

                              add +='<!-- BUET Student ID Field -->';
                              add +='<div class="control-group">';
                              add +='  <label class="control-label" for="input08">BUET Student ID</label>';
                              add +='  <div class="controls">';
                              add +='    <input type="text" class="input-xlarge"  name="buet_student_id_bsc'+i+'">';
                              add +='  </div>';
                              add +='</div>';
                              
                              add +='</div>';
                              
                              var bsc_info='#bsc_info'+i;
                              $(bsc_info).append(add);  
                      } 
                      else
                      {
                            var buet_grad_info_bsc="#buet_grad_info_bsc"+i;
                            $(buet_grad_info_bsc).remove();
                            
                      }
                      
                      if(document.getElementById(bsc_degree_obtained_from).value=="OTHERS")
                      {
                          var add ='<div class="control-group" id="bsc_degree_obtained_uni'+i+'">';
                              
                              add +='<!-- BSc Degree Obtained From Field -->';
                              add +='<div class="control-group">';
                              //add +='  <label class="control-label" for="input08"></label>';
                              add +='  <div class="controls">';
                              add +='    <input type="text" class="input-xlarge"  name="bsc_degree_obtained_from_others'+i+'">';
                              add +='  </div>';
                              add +='</div>';
                              
                              add +='</div>';
                              
                              var bsc_info='#bsc_info'+i;
                              $(bsc_info).append(add);  
                      }    
                      else
                      {
                            var bsc_degree_obtained_uni="#bsc_degree_obtained_uni"+i;
                            $(bsc_degree_obtained_uni).remove();
                      }
                    
                }
                
                function buet_masters(msc_degree_obtained_from)
                {
                    var i;
                    for ( i = 1; i <=msc_total; i++) {
                      var msc_obtained_from = "msc_degree_obtained_from"+i;
                      if(msc_obtained_from == msc_degree_obtained_from) break;
                     }
                      if(document.getElementById(msc_degree_obtained_from).value=="BUET")
                      {
                          var add ='<div class="control-group" id="buet_grad_info_msc'+i+'">';
                          
                              add +='<!-- BUET Masters Department Field -->';
                              add +='<div class="control-group">';
                              add +='  <label class="control-label" for="select05">BUET Masters Department</label>';
                              add +='  <div class="controls">';
                              add +='    <select id="buet_masters_dept_msc'+i+'" class="input-xlarge" name="buet_masters_dept_msc'+i+'">';
                              add +='      <option value="Select">Select</option>';
                              add +='      <option value="CSE">CSE</option>';
                              add +='      <option value="EEE">EEE</option>';
                              add +='    </select>';
                              add +='  </div>';
                              add +='</div>';

                              add +='<!-- BUET Masters Student ID Field -->';
                              add +='<div class="control-group">';
                              add +='  <label class="control-label" for="input08">BUET Masters Student ID</label>';
                              add +='  <div class="controls">';
                              add +='    <input type="text" class="input-xlarge"  name="buet_student_id_msc'+i+'">';
                              add +='  </div>';
                              add +='</div>';
                              
                              add +='</div>';
                          
                                var msc_info='#msc_info'+i;
                              $(msc_info).append(add);  
                      }
                      else
                      {
                            var buet_grad_info_msc="#buet_grad_info_msc"+i;
                            $(buet_grad_info_msc).remove();
                      }
                      
                      if(document.getElementById(msc_degree_obtained_from).value=="OTHERS")
                      {
                          var add ='<div class="control-group" id="msc_degree_obtained_uni'+i+'">';
                              
                              add +='<!-- MSc Degree Obtained From Field -->';
                              add +='<div class="control-group">';
                              //add +='  <label class="control-label" for="input08"></label>';
                              add +='  <div class="controls">';
                              add +='    <input type="text" class="input-xlarge"  name="msc_degree_obtained_from_others'+i+'">';
                              add +='  </div>';
                              add +='</div>';
                              
                              add +='</div>';
                              
                              var msc_info='#msc_info'+i;
                              $(msc_info).append(add);  
                      }    
                      else
                      {
                            var msc_degree_obtained_uni="#msc_degree_obtained_uni"+i;
                            $(msc_degree_obtained_uni).remove();
                      }
                    
                }
                
                function addBsc()
                {
                    bsc_total++;
                          var add ='<div class="control-group" id="bsc'+bsc_total+'">';
                              add +='<fieldset>';
                              add +='<legend>Another BSc Information</legend>';
                              add +='<!-- BSc Degree Obtained From Field -->';
                              
                              add +='<div class="control-group" id="bsc_info'+bsc_total+'">';
                              add +='  <label class="control-label" for="select05">BSc Degree Obtained From</label>';
                              add +='  <div class="controls">';
                              add +='    <select id="bsc_degree_obtained_from'+bsc_total+'" class="input-xlarge" name="bsc_degree_obtained_from'+bsc_total+'" onChange="buet_gradute(\'bsc_degree_obtained_from'+bsc_total+'\')">';
                              add +='      <option value="Select">Select</option>';
                              add +='      <option value="BUET">BUET</option>';
                              add +='      <option value="DU">DU</option>';
                              add +='      <option value="KUET">KUET</option>';
                              add +='      <option value="RUET">RUET</option>';
                              add +='      <option value="CUET">CUET</option>';
                              add +='      <option value="AUST">AUST</option>';
                              add +='      <option value="NSU">NSU</option>';
                              add +='      <option value="BRACK">BRACK</option>';
                              add +='      <option value="OTHERS">OTHERS</option>';
                              add +='    </select>';
                              add +='  </div>';
                              add +='  <br/>';
                              add +='</div>';

                              add +='<!-- Credit Transfer Field -->';
                              add +='<div class="control-group">';
                              add +='  <label class="control-label" for="optionsCheckbox">Is Credit Transfer</label>';
                              add +='  <div class="controls">';
                              add +='    <label class="checkbox">';
                              add +='      <input type="checkbox" id="is_credit_transfer_bsc'+bsc_total+'"  value="yes" name="is_credit_transfer_bsc'+bsc_total+'">';
                              add +='      Yes';
                              add +='    </label>';
                              add +='  </div>';
                              add +='</div>';

                              add +='<!-- Degree Name Field -->';
                              add +='<div class="control-group">';
                              add +='  <label class="control-label" for="input08">Degree Name</label>';
                              add +='  <div class="controls">';
                              add +='    <input type="text" class="input-xlarge"  name="degree_name_bsc'+bsc_total+'">';
                              add +='  </div>';
                              add +='</div>';

                              add +='<!-- Credit Earned Field -->';
                              add +='<div class="control-group">';
                              add +='  <label class="control-label" for="input08">Credit Earned</label>';
                              add +='  <div class="controls">';
                              add +='    <input type="text" class="input-xlarge"  name="credit_earned_bsc'+bsc_total+'">';
                              add +='  </div>';
                              add +='</div>';

                              add +='<!-- Credit Earned Without Exemption Field -->';
                              add +='<div class="control-group">';
                              add +='  <label class="control-label" for="input08">Credit Earned Without Exemption</label>';
                              add +='  <div class="controls">';
                              add +='    <input type="text" class="input-xlarge"  name="credit_earned_without_exemption_bsc'+bsc_total+'">';
                              add +='  </div>';
                              add +='</div>';


                              add +='<!-- BSc Grade System Field -->';
                              add +='<div class="control-group">';
                              add +='  <label class="control-label" for="select05">BSc Grade System</label>';
                              add +='  <div class="controls">';
                              add +='    <select id="bsc_grade_system'+bsc_total+'" class="input-xlarge" name="bsc_grade_system'+bsc_total+'">';
                              add +='      <option value="Select">Select</option>';
                              add +='      <option value="CGPA">CGPA</option>';
                              add +='      <option value="Percentage of Marks">Percentage of Marks</option>';
                              add +='    </select>';
                              add +='  </div>';
                              add +='</div>';

                              add +='<!-- BSc Grade Field -->';
                              add +='<div class="control-group">';
                              add +='  <label class="control-label" for="input08">BSc Grade</label>';
                              add +='  <div class="controls">';
                              add +='    <input type="text" class="input-xlarge"  name="bsc_grade'+bsc_total+'">';
                              add +='  </div>';
                              add +='</div>';

                              add +='<!-- BSc Grade Scale Field -->';
                              add +='<div class="control-group">';
                              add +='  <label class="control-label" for="input08" id="bsc_grade_scale">BSc Grade Scale or Total Marks</label>';
                              add +='  <div class="controls">';
                              add +='    <input type="text" class="input-xlarge"  name="bsc_grade_scale'+bsc_total+'">';
                              add +='  </div>';
                              add +='</div>';

                              add +='<!-- Passing Year Field -->';
                              add +='<div class="control-group">';
                              add +='  <label class="control-label" for="input08">Passing Year</label>';
                              add +='  <div class="controls">';
                              add +='    <input type="text" class="input-xlarge"  name="passing_year_bsc'+bsc_total+'">';
                              add +='  </div>';
                              add +='</div>';

                              add +='<!-- Duration From Field -->';
                              add +='<div class="control-group">';
                              add +='  <label class="control-label" for="input08">Duration From</label>';
                              add +='  <div class="controls">';
                              add +='    <input type="date" class="input-xlarge"  name="duration_from_bsc'+bsc_total+'">';
                              add +='  </div>';
                              add +='</div>';

                              add +='<!-- Duration To Field -->';
                              add +='<div class="control-group">';
                              add +='  <label class="control-label" for="input08">Duration To</label>';
                              add +='  <div class="controls">';
                              add +='    <input type="date" class="input-xlarge"  name="duration_to_bsc'+bsc_total+'">';
                              add +='  </div>';
                              add +='</div>';

                              add +='<!-- Duration Of Degree Field -->';
                              add +='<div class="control-group">';
                              add +='  <label class="control-label" for="input08">Duration Of Degree</label>';
                              add +='  <div class="controls">';
                              add +='    <input type="text" class="input-xlarge"  name="duration_of_degree_bsc'+bsc_total+'">';
                              add +='  </div>';
                              add +='</div>';

                              add +='<!-- Major Field Field -->';
                              add +='<div class="control-group" id="bsc_major'+bsc_total+'">';
                              add +='  <label class="control-label" for="select05">Major Field</label>';
                              add +='  <div class="controls" >';
                              add +='    <select id="major_field_bsc'+bsc_total+'" class="input-xlarge" name="major_field_bsc'+bsc_total+'" onchange="major_bsc(\'major_field_bsc'+bsc_total+'\')">';
                              add +='      <option value="Select">Select</option>';
                              add +='      <option value="CSE">CSE</option>';
                              add +='      <option value="EEE">EEE</option>';
                              add +='      <option value="MATH">MATH</option>';
                              add +='      <option value="OTHERS">OTHERS</option>';
                              add +='    </select>';
                              add +='  </div>';
                              add +='  <br/>';
                              add +='</div>';
                              add +='</fieldset>';
                              
                              add +='</div>';
                          
                            $("#bsc_add1").append(add);  
                      
                }
                
                function addMsc()
                {
                    msc_total++;
                          var add ='<div class="control-group" id="msc_add'+msc_total+'">';
                              add +='<fieldset>';
                              add +='    <legend>Another MSc Information</legend>';
                              add +='    <!-- MSc Degree Obtained From Field -->';
                              add +='    <div class="control-group" id="msc_info'+msc_total+'">';
                              add +='      <label class="control-label" for="select05">MSc Degree Obtained From</label>';
                              add +='      <div class="controls">';
                              add +='        <select id="msc_degree_obtained_from'+msc_total+'" class="input-xlarge" name="msc_degree_obtained_from'+msc_total+'" onChange="buet_masters(\'msc_degree_obtained_from'+msc_total+'\')">';
                              add+='         <option value="Select">Select</option>';
                              add+='         <option value="BUET">BUET</option>';
                              add+='         <option value="DU">DU</option>';
                              add+='         <option value="KUET">KUET</option>';
                              add+='         <option value="RUET">RUET</option>';
                              add+='         <option value="CUET">CUET</option>';
                              add+='         <option value="AUST">AUST</option>';
                              add+='         <option value="NSU">NSU</option>';
                              add+='         <option value="BRACK">BRACK</option>';
                              add+='         <option value="OTHERS">OTHERS</option>';
                              add +='        </select>';
                              add +='      </div>';
                              add +='      <br/>';
                              add +='    </div>';

                              add +='    <!-- Credit Transfer Field -->';
                              add +='    <div class="control-group">';
                              add +='      <label class="control-label" for="optionsCheckbox">Is Credit Transfer</label>';
                              add +='      <div class="controls">';
                              add +='        <label class="checkbox">';
                              add +='          <input type="checkbox" id="is_credit_transfer_masters'+msc_total+'" value="credit_transfer" name="is_credit_transfer_masters'+msc_total+'">';
                              add +='          Yes';
                              add +='        </label>';
                              add +='      </div>';
                              add +='    </div>';

                              add +='    <!-- Degree Name Field -->';
                              add +='    <div class="control-group">';
                              add +='      <label class="control-label" for="input08">Degree Name</label>';
                              add +='      <div class="controls">';
                              add +='        <input type="text" class="input-xlarge"  name="degree_name_msc'+msc_total+'">';
                              add +='      </div>';
                              add +='    </div>';

                              add +='    <!-- Credit Earned Field -->';
                              add +='    <div class="control-group">';
                              add +='      <label class="control-label" for="input08">Credit Earned</label>';
                              add +='      <div class="controls">';
                              add +='        <input type="text" class="input-xlarge"  name="credit_earned_msc'+msc_total+'">';
                              add +='      </div>';
                              add +='    </div>';

                              add +='    <!-- Credit Earned Without Exemption Field -->';
                              add +='    <div class="control-group">';
                              add +='      <label class="control-label" for="input08">Credit Earned Without Exemption</label>';
                              add +='      <div class="controls">';
                              add +='        <input type="text" class="input-xlarge"  name="credit_earned_without_exemption_msc'+msc_total+'">';
                              add +='      </div>';
                              add +='    </div>';


                              add +='    <!-- MSc Grade System Field -->';
                              add +='    <div class="control-group">';
                              add +='      <label class="control-label" for="select05">MSc Grade System</label>';
                              add +='      <div class="controls">';
                              add +='        <select id="bsc_grade_system'+msc_total+'" class="input-xlarge" name="msc_grade_system'+msc_total+'">';
                              add+='         <option value="Select">Select</option>';
                              add+='         <option value="CGPA">CGPA</option>';
                              add+='         <option value="Percentage of Marks">Percentage of Marks</option>';
                              add +='        </select>';
                              add +='      </div>';
                              add +='    </div>';

                              add +='    <!-- MSc Grade Field -->';
                              add +='    <div class="control-group">';
                              add +='      <label class="control-label" for="input08">MSc Grade</label>';
                              add +='      <div class="controls">';
                              add +='        <input type="text" class="input-xlarge"  name="msc_grade'+msc_total+'">';
                              add +='      </div>';
                              add +='    </div>';

                              add +='    <!-- MSc Grade Scale Field -->';
                              add +='    <div class="control-group">';
                              add +='      <label class="control-label" for="input08" id="bsc_grade_scale">MSc Grade Scale or Total Marks</label>';
                              add +='      <div class="controls">';
                              add +='        <input type="text" class="input-xlarge"  name="msc_grade_scale'+msc_total+'">';
                              add +='      </div>';
                              add +='    </div>';

                              add +='    <!-- Passing Year Field -->';
                              add +='    <div class="control-group">';
                              add +='      <label class="control-label" for="input08">Passing Year</label>';
                              add +='      <div class="controls">';
                              add +='        <input type="text" class="input-xlarge"  name="passing_year_msc'+msc_total+'">';
                              add +='      </div>';
                              add +='    </div>';

                              add +='    <!-- Duration From Field -->';
                              add +='    <div class="control-group">';
                              add +='      <label class="control-label" for="input08">Duration From</label>';
                              add +='      <div class="controls">';
                              add +='        <input type="date" class="input-xlarge"  name="duration_from_msc'+msc_total+'">';
                              add +='      </div>';
                              add +='    </div>';

                              add +='    <!-- Duration To Field -->';
                              add +='    <div class="control-group">';
                              add +='      <label class="control-label" for="input08">Duration To</label>';
                              add +='      <div class="controls">';
                              add +='        <input type="date" class="input-xlarge"  name="duration_ro_msc'+msc_total+'">';
                              add +='      </div>';
                              add +='    </div>';

                              add +='    <!-- Duration Of Degree Field -->';
                              add +='    <div class="control-group">';
                              add +='      <label class="control-label" for="input08">Duration Of Degree</label>';
                              add +='      <div class="controls">';
                              add +='        <input type="text" class="input-xlarge"  name="duration_of_degree_msc'+msc_total+'">';
                              add +='      </div>';
                              add +='    </div>';

                              add +='<!-- Major Field Field -->';
                              add +='<div class="control-group" id="msc_major'+msc_total+'">';
                              add +='  <label class="control-label" for="select05">Major Field</label>';
                              add +='  <div class="controls" >';
                              add +='    <select id="major_field_msc'+msc_total+'" class="input-xlarge" name="major_field_msc'+msc_total+'" onchange="major_msc(\'major_field_msc'+msc_total+'\')">';
                              add +='      <option value="Select">Select</option>';
                              add +='      <option value="CSE">CSE</option>';
                              add +='      <option value="EEE">EEE</option>';
                              add +='      <option value="MATH">MATH</option>';
                              add +='      <option value="OTHERS">OTHERS</option>';
                              add +='    </select>';
                              add +='  </div>';
                              add +='  <br/>';
                              add +='</div>';
                              add +='  </fieldset>';  
        
                              add +='</div>';
                          
                            $("#msc_add1").append(add);  
                      
                    
                }
                
                function addRef()
                {
                    ref_total++;
                          var add ='<div class="control-group" id="ref'+ref_total+'">';
                              add +='<fieldset id="ref_add">';
                              add +='<legend>Another Reference</legend>';

                              add +='<!-- Reference Name Field -->';
                              add +='<div class="control-group">';
                              add +='  <label class="control-label" for="input01">Reference Name</label>';
                              add +='  <div class="controls">';
                              add +='    <input type="text" class="input-xlarge" id="ref_name'+ref_total+'" name="ref_name'+ref_total+'">';
                              add +='  </div>';
                              add +='</div>';

                              add +='<!-- Reference Address Field -->';
                              add +='<div class="control-group">';
                              add +='  <label class="control-label" for="presentaddress">Reference Address</label>';
                              add +='  <div class="controls">';
                              add +='    <textarea class="input-xlarge" id="ref_address'+ref_total+'" name="ref_address'+ref_total+'" class="input-xlarge" rows="3"></textarea>';
                              add +='  </div>';
                              add +='</div>';

                              add +='<!-- Reference Phone Field -->';
                              add +='<div class="control-group">';
                              add +='  <label class="control-label" for="input01">Reference Phone</label>';
                              add +='  <div class="controls">';
                              add +='    <input type="text" class="input-xlarge" id="ref_phone'+ref_total+'" name="ref_phone'+ref_total+'">';
                              add +='  </div>';
                              add +='</div>';
                              add +='</fieldset>';
                              add +='</div>';
                          
                            $("#ref_add1").append(add);  
                            
                    
                }       
                
                function addJobExp()
                {
                    job_total++;
                          var add ='<div class="control-group" id="job'+job_total+'">';
                            
                              add+='<fieldset id="job_add">';
                              add+='    <legend>Another Job Experience</legend>';

                              add+='  <!-- Designation Field -->';
                              add+='    <div class="control-group">';
                              add+='      <label class="control-label" for="input01">Designation</label>';
                              add+='      <div class="controls">';
                              add+='        <input type="text" class="input-xlarge" id="designation'+job_total+'" name="designation'+job_total+'">';
                              add+='      </div>';
                              add+='    </div>';

                              add+='  <!-- Job Description Field -->';
                              add+='    <div class="control-group">';
                              add+='      <label class="control-label" for="presentaddress">Job Description</label>';
                              add+='      <div class="controls">';
                              add+='        <textarea class="input-xlarge" id="job_description'+job_total+'" name="job_description'+job_total+'" class="input-xlarge" rows="3"></textarea>';
                              add+='      </div>';
                              add+='    </div>';

                              add+='  <!-- Job Duration From Field -->';
                              add+='    <div class="control-group">';
                              add+='      <label class="control-label" for="input08">Duration From</label>';
                              add+='      <div class="controls">';
                              add+='        <input type="date" class="input-xlarge"  name="exp_duration_from'+job_total+'">';
                              add+='      </div>';
                              add+='    </div>';

                              add+='    <!-- Job Duration To Field -->';
                              add+='    <div class="control-group">';
                              add+='      <label class="control-label" for="input08">Duration To</label>';
                              add+='      <div class="controls">';
                              add+='        <input type="date" class="input-xlarge"  name="exp_duration_to'+job_total+'">';
                              add+='      </div>';
                              add+='    </div>';

                              add+='    <!-- Job Organization Field -->';
                              add+='    <div class="control-group">';
                              add+='      <label class="control-label" for="input01">Job Organization</label>';
                              add+='      <div class="controls">';
                              add+='        <input type="text" class="input-xlarge" id="exp_organization'+job_total+'" name="exp_organization'+job_total+'">';
                              add+='      </div>';
                              add+='    </div>';
                              add+='  </fieldset>';
                            
                              add +='</div>';
                          
                            $("#job_exp_add1").append(add);  
                     
                    
                }
                
                
                
         </script>

        