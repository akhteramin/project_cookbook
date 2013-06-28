        <fieldset id="higher_secondary_add">
          <legend>Higher Secondary Degree Information</legend>
          <!-- Higher Secondary Degree Obtained From Field -->
       
          <div class="control-group" id="higher_secondary_info">
            <label class="control-label" for="select05">Higher Secondary Degree Obtained From</label>
            <div class="controls">
              <select id="higher_secondary_degree_obtained_from" class="input-xlarge" name="higher_secondary_degree_obtained_from" onChange="higher_secondary_degree_from('higher_secondary_degree_obtained_from')">
                <option value="Select">Select</option>
                <option value="Milestone School And College">Milestone School And College</option>
                <option value="Notra Dame College">Notra Dame College</option>
                <option value="Rajuk School And College">Rajuk School And College</option>
                <option value="OTHERS">OTHERS</option>
              </select>
            </div>
            <br/>
          </div>
          
          <!-- Degree Name Field -->
          <div class="control-group" id="higher_secondary_name_info">
            <label class="control-label" for="input08">Degree Name</label>
            <div class="controls">
              <select id="degree_name_higher_secondary" class="input-xlarge" name="degree_name_higher_secondary" onChange="higher_secondary_degree_name('degree_name_higher_secondary')">
                <option value="Select">Select</option>
                <option value="HSC">HSC</option>
                <option value="ALEVEL">A Level</option>
                <option value="OTHERS">OTHERS</option>
              </select>
            </div>
            <br/>
          </div>
          
          <!-- Board Field -->
          <div class="control-group" id="higher_secondary_board_info">
            <label class="control-label" for="input08">Board</label>
            <div class="controls">
              <select id="board_higher_secondary" class="input-xlarge" name="board_higher_secondary" onChange="higher_secondary_board('board_higher_secondary')">
                <option value="Select">Select</option>
                <option value="DHAKA">DHAKA</option>
                <option value="BARISAL">BARISAL</option>
                <option value="CUMILLA">CUMILLA</option>
                <option value="CHITTAGONG">CHITTAGONG</option>
                <option value="RAJSHAHI">RAJSHAHI</option>
                <option value="OTHERS">OTHERS</option>
              </select>
            </div>
            <br/>
          </div>
         
          <!-- Higher Secondary Grade System Field -->
          <div class="control-group">
            <label class="control-label" for="select05">Higher Secondary Grade System</label>
            <div class="controls">
              <select id="higher_secondary_grade_system" class="input-xlarge" name="higher_secondary_grade_system">
                <option value="Select">Select</option>
                  <option value="GPA">GPA</option>
                <option value="PERECNTAGE_MARKS">Percentage of Marks</option>
              </select>
            </div>
          </div>
          
          <!--Higher Secondary Grade Field -->
          <div class="control-group">
            <label class="control-label" for="input08">Higher Secondary Grade or Percentage of Marks</label>
            <div class="controls">
              <input type="text" class="input-xlarge"  name="higher_secondary_grade">
            </div>
          </div>
          
          <!-- Higher Secondary Grade Scale Field -->
          <div class="control-group">
            <label class="control-label" for="input08" id="higher_secondary_grade_scale">Higher Secondary Grade Scale or Total Marks</label>
            <div class="controls">
              <input type="text" class="input-xlarge"  name="higher_secondary_grade_scale">
            </div>
          </div>
          
          <!-- Passing Year Field -->
          <div class="control-group">
            <label class="control-label" for="input08">Passing Year</label>
            <div class="controls">
              <input type="text" class="input-xlarge"  name="passing_year_higher_secondary">
            </div>
          </div>
          
          <!-- Duration From Field -->
          <div class="control-group">
            <label class="control-label" for="input08">Duration From</label>
            <div class="controls">
              <input type="date" class="input-xlarge"  name="duration_from_higher_secondary">
            </div>
          </div>
          
          <!-- Duration To Field -->
          <div class="control-group">
            <label class="control-label" for="input08">Duration To</label>
            <div class="controls">
              <input type="date" class="input-xlarge"  name="duration_to_higher_secondary">
            </div>
          </div>
          
          <!-- Duration Of Degree Field -->
          <div class="control-group">
            <label class="control-label" for="input08">Duration Of Degree</label>
            <div class="controls">
              <input type="text" class="input-xlarge"  name="duration_of_degree_higher_secondary">
            </div>
          </div>
          
          <!-- Major Field Field -->
          <div class="control-group" id="higher_secondary_major">
            <label class="control-label" for="select05">Major Field</label>
            <div class="controls" >
              <select id="major_field_higher_secondary" class="input-xlarge" name="major_field_higher_secondary" onchange="major_higher_secondary('major_field_higher_secondary')" >
                <option value="Select">Select</option>
                <option value="SCIENCE">SCIENCE</option>
                <option value="ARTS">ARTS</option>
                <option value="COMMERCE">COMMERCE</option>
                <option value="OTHERS">OTHERS</option>
              </select>
            </div>
            <br/>
          </div>
        </fieldset>
        