<div id="msc"></div>
<script>
      function selectedProgram()
      {
          if(document.getElementById("program").value=="PhD")
          {  
           var add='<div id="msc_add">';
               add+='<fieldset id="msc_add1">';
               add+='   <legend>MSc Information</legend>';
               add+='   <!-- MSc Degree Obtained From Field -->';
               add+='   <div class="control-group" id="msc_info1">';
               add+='     <label class="control-label" for="select05">MSc Degree Obtained From</label>';
               add+='     <div class="controls">'; 
               add+='       <select id="msc_degree_obtained_from1" class="input-xlarge" name="msc_degree_obtained_from1" onChange="buet_masters(\'msc_degree_obtained_from1\')">';
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
               add+='       </select>';
               add+='     </div>';
               add+='     <br/>';
               add+='   </div>';

               add+='   <!-- Credit Transfer Field -->';
               add+='   <div class="control-group">';
               add+='     <label class="control-label" for="optionsCheckbox">Is Credit Transfer</label>';
               add+='     <div class="controls">';
               add+='       <label class="checkbox">';
               add+='         <input type="checkbox" id="is_credit_transfer_masters1" value="credit_transfer" name="is_credit_transfer_masters1">';
               add+='         Yes';
               add+='       </label>';
               add+='     </div>';
               add+='   </div>';

               add+='   <!-- Degree Name Field -->';
               add+='   <div class="control-group">';
               add+='     <label class="control-label" for="input08">Degree Name</label>';
               add+='     <div class="controls">';
               add+='       <input type="text" class="input-xlarge"  name="degree_name_msc1">';
               add+='     </div>';
               add+='   </div>';

               add+='   <!-- Credit Earned Field -->';
               add+='   <div class="control-group">';
               add+='     <label class="control-label" for="input08">Credit Earned</label>';
               add+='     <div class="controls">';
               add+='       <input type="text" class="input-xlarge"  name="credit_earned_msc1">';
               add+='     </div>';
               add+='   </div>';

               add+='   <!-- Credit Earned Without Exemption Field -->';
               add+='   <div class="control-group">';
               add+='     <label class="control-label" for="input08">Credit Earned Without Exemption</label>';
               add+='     <div class="controls">';
               add+='       <input type="text" class="input-xlarge"  name="credit_earned_without_exemption_msc1">';
               add+='     </div>';
               add+='   </div>';


               add+='   <!-- MSc Grade System Field -->';
               add+='   <div class="control-group">';
               add+='     <label class="control-label" for="select05">MSc Grade System</label>';
               add+='    <div class="controls">';
               add+='       <select id="msc_grade_system1" class="input-xlarge" name="msc_grade_system1">';
               add+='         <option value="Select">Select</option>';
               add+='         <option value="CGPA">CGPA</option>';
               add+='         <option value="Percentage of Marks">Percentage of Marks</option>';
               add+='       </select>';
               add+='     </div>';
               add+='   </div>';

               add+='   <!-- MSc Grade Field -->';
               add+='   <div class="control-group">';
               add+='     <label class="control-label" for="input08">MSc Grade  or Percentage of Marks</label>';
               add+='     <div class="controls">';
               add+='       <input type="text" class="input-xlarge"  name="msc_grade1">';
               add+='     </div>';
               add+='   </div>';

               add+='   <!-- MSc Grade Scale Field -->';
               add+='   <div class="control-group">';
               add+='     <label class="control-label" for="input08" id="bsc_grade_scale">MSc Grade Scale or Total Marks</label>';
               add+='     <div class="controls">';
               add+='       <input type="text" class="input-xlarge"  name="msc_grade_scale1">';
               add+='     </div>';
               add+='   </div>';

               add+='   <!-- Passing Year Field -->';
               add+='   <div class="control-group">';
               add+='     <label class="control-label" for="input08">Passing Year</label>';
               add+='     <div class="controls">';
               add+='       <input type="text" class="input-xlarge"  name="passing_year_msc1">';
               add+='     </div>';
               add+='   </div>';

               add+='   <!-- Duration From Field -->';
               add+='   <div class="control-group">';
               add+='    <label class="control-label" for="input08">Duration From</label>';
               add+='     <div class="controls">';
               add+='       <input type="date" class="input-xlarge"  name="duration_from_msc1">';
               add+='     </div>';
               add+='   </div>';

               add+='   <!-- Duration To Field -->';
               add+='   <div class="control-group">';
               add+='     <label class="control-label" for="input08">Duration To</label>';
               add+='     <div class="controls">';
               add+='       <input type="date" class="input-xlarge"  name="duration_to_msc1">';
               add+='     </div>';
               add+='   </div>';

               add+='   <!-- Duration Of Degree Field -->';
               add+='   <div class="control-group">';
               add+='     <label class="control-label" for="input08">Duration Of Degree</label>';
               add+='     <div class="controls">';
               add+='       <input type="text" class="input-xlarge"  name="duration_of_degree_msc1">';
               add+='     </div>';
               add+='   </div>';

               add +='<!-- Major Field Field -->';
               add +='<div class="control-group" id="msc_major1">';
               add +='  <label class="control-label" for="select05">Major Field</label>';
               add +='  <div class="controls" >';
               add +='    <select id="major_field_msc1" class="input-xlarge" name="major_field_msc1" onchange="major_msc(\'major_field_msc1\')">';
               add +='      <option value="Select">Select</option>';
               add +='      <option value="CSE">CSE</option>';
               add +='      <option value="EEE">EEE</option>';
               add +='      <option value="MATH">MATH</option>';
               add +='      <option value="OTHERS">OTHERS</option>';
               add +='    </select>';
               add +='  </div>';
               add +='  <br/>';
               add +='</div>';
               add+=' </fieldset>  ';

               add+=' <div class="control-group id ="msc_button" >';
               add+='     <div class="controls">';
               add+='       <p class="btn btn-primary" id="addmsc" onclick="addMsc()">Add Another MSc Information</p>';
               add+='       <p class="btn btn-inverse" id="removemsc" onclick="removeMsc()">Remove MSc Information</p>';
               add+='     </div>';
               add+=' </div>';
               add+=' </div>';
               add+=' </div>';
               
               $("#msc").prepend(add);  
           }
           else
           {
                    $("#msc_add").remove();
                    msc_total=1;
                    
           }
      }
                    
</script>