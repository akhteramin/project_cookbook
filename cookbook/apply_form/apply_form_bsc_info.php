        <fieldset id="bsc_add1">
          <legend>BSc Information</legend>
          <!-- BSc Degree Obtained From Field -->
       
          <div class="control-group" id="bsc_info1">
            <label class="control-label" for="select05">BSc Degree Obtained From</label>
            <div class="controls">
              <select id="bsc_degree_obtained_from1" class="input-xlarge" name="bsc_degree_obtained_from1" onChange="buet_gradute('bsc_degree_obtained_from1')">
                <option value="Select">Select</option>
                <option value="BUET">BUET</option>
                <option value="DU">DU</option>
                <option value="KUET">KUET</option>
                <option value="RUET">RUET</option>
                <option value="CUET">CUET</option>
                <option value="AUST">AUST</option>
                <option value="NSU">NSU</option>
                <option value="BRACK">BRACK</option>
                <option value="OTHERS">OTHERS</option>
              </select>
            </div>
            <br/>
          </div>
          
          <!-- Credit Transfer Field -->
          <div class="control-group">
            <label class="control-label" for="optionsCheckbox">Is Credit Transfer</label>
            <div class="controls">
              <label class="checkbox">
                <input type="checkbox" id="is_credit_transfer_bsc1"  value="yes" name="is_credit_transfer_bsc1">
                Yes
              </label>
            </div>
          </div>
          
          <!-- Degree Name Field -->
          <div class="control-group">
            <label class="control-label" for="input08">Degree Name</label>
            <div class="controls">
              <input type="text" class="input-xlarge"  name="degree_name_bsc1">
            </div>
          </div>
          
          <!-- Credit Earned Field -->
          <div class="control-group">
            <label class="control-label" for="input08">Credit Earned</label>
            <div class="controls">
              <input type="text" class="input-xlarge"  name="credit_earned_bsc1">
            </div>
          </div>
          
          <!-- Credit Earned Without Exemption Field -->
          <div class="control-group">
            <label class="control-label" for="input08">Credit Earned Without Exemption</label>
            <div class="controls">
              <input type="text" class="input-xlarge"  name="credit_earned_without_exemption_bsc1">
            </div>
          </div>
          
          
          <!-- BSc Grade System Field -->
          <div class="control-group">
            <label class="control-label" for="select05">BSc Grade System</label>
            <div class="controls">
              <select id="bsc_grade_system1" class="input-xlarge" name="bsc_grade_system1">
                <option value="Select">Select</option>
                  <option value="CGPA">CGPA</option>
                <option value="Percentage of Marks">Percentage of Marks</option>
              </select>
            </div>
          </div>
          
          <!-- BSc Grade Field -->
          <div class="control-group">
            <label class="control-label" for="input08">BSc Grade or Percentage of Marks</label>
            <div class="controls">
              <input type="text" class="input-xlarge"  name="bsc_grade1">
            </div>
          </div>
          
          <!-- BSc Grade Scale Field -->
          <div class="control-group">
            <label class="control-label" for="input08" id="bsc_grade_scale">BSc Grade Scale or Total Marks</label>
            <div class="controls">
              <input type="text" class="input-xlarge"  name="bsc_grade_scale1">
            </div>
          </div>
          
          <!-- Passing Year Field -->
          <div class="control-group">
            <label class="control-label" for="input08">Passing Year</label>
            <div class="controls">
              <input type="text" class="input-xlarge"  name="passing_year_bsc1">
            </div>
          </div>
          
          <!-- Duration From Field -->
          <div class="control-group">
            <label class="control-label" for="input08">Duration From</label>
            <div class="controls">
              <input type="date" class="input-xlarge"  name="duration_from_bsc1">
            </div>
          </div>
          
          <!-- Duration To Field -->
          <div class="control-group">
            <label class="control-label" for="input08">Duration To</label>
            <div class="controls">
              <input type="date" class="input-xlarge"  name="duration_to_bsc1">
            </div>
          </div>
          
          <!-- Duration Of Degree Field -->
          <div class="control-group">
            <label class="control-label" for="input08">Duration Of Degree</label>
            <div class="controls">
              <input type="text" class="input-xlarge"  name="duration_of_degree_bsc1">
            </div>
          </div>
          
          <!-- Major Field Field -->
          <div class="control-group" id="bsc_major1">
            <label class="control-label" for="select05">Major Field</label>
            <div class="controls" >
              <select id="major_field_bsc1" class="input-xlarge" name="major_field_bsc1" onchange="major_bsc('major_field_bsc1')" >
                <option value="Select">Select</option>
                <option value="CSE">CSE</option>
                <option value="CSE">EEE</option>
                <option value="MATH">MATH</option>
                <option value="OTHERS">OTHERS</option>
              </select>
            </div>
            <br/>
          </div>
          
          <br/>
        </fieldset>
        
        
        <div class="control-group" >
            <div class="controls">
              <p class="btn btn-primary" id="addbsc" onclick="addBsc()">Add Another BSc Information</p>
              <p class="btn btn-inverse" id="removebsc" onclick="removeBsc()">Remove BSc Information</p>
            </div>
        </div>