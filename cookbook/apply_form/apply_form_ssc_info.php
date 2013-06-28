        <fieldset id="secondary_add">
          <legend>Secondary Degree Information</legend>
          <!-- Secondary Degree Obtained From Field -->
       
          <div class="control-group" id="secondary_info">
            <label class="control-label" for="select05">Secondary Degree Obtained From</label>
            <div class="controls">
              <select id="secondary_degree_obtained_from" class="input-xlarge" name="secondary_degree_obtained_from" onChange="secondary_degree_from('secondary_degree_obtained_from')">
                <option value="Select">Select</option>
                <option value="A Rob Secondary School">A Rob Secondary School</option>
                <option value="Rajuk School And College">Rajuk School And College</option>
                <option value="Milestone School And College">Milestone School And College</option>
                <option value="OTHERS">OTHERS</option>
              </select>
            </div>
            <br/>
          </div>
          
          <!-- Degree Name Field -->
          <div class="control-group" id="secondary_name_info">
            <label class="control-label" for="input08">Degree Name</label>
            <div class="controls">
              <select id="degree_name_secondary" class="input-xlarge" name="degree_name_secondary" onChange="secondary_degree_name('degree_name_secondary')">
                <option value="Select">Select</option>
                <option value="SSC">SSC</option>
                <option value="OLEVEL">O Level</option>
                <option value="OTHERS">OTHERS</option>
              </select>
            </div>
            <br/>
          </div>
          
          <!-- Board Field -->
          <div class="control-group" id="secondary_board_info">
            <label class="control-label" for="input08">Board</label>
            <div class="controls">
              <select id="board_secondary" class="input-xlarge" name="board_secondary" onChange="secondary_board('board_secondary')">
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
         
          <!-- Secondary Grade System Field -->
          <div class="control-group">
            <label class="control-label" for="select05">Secondary Grade System</label>
            <div class="controls">
              <select id="secondary_grade_system" class="input-xlarge" name="secondary_grade_system">
                <option value="Select">Select</option>
                  <option value="GPA">GPA</option>
                <option value="PERECNTAGE_MARKS">Percentage of Marks</option>
              </select>
            </div>
          </div>
          
          <!-- Secondary Grade Field -->
          <div class="control-group">
            <label class="control-label" for="input08">Secondary Grade or Percentage of Marks</label>
            <div class="controls">
              <input type="text" class="input-xlarge"  name="secondary_grade">
            </div>
          </div>
          
          <!-- Secondary Grade Scale Field -->
          <div class="control-group">
            <label class="control-label" for="input08" id="secondary_grade_scale">Secondary Grade Scale or Total Marks</label>
            <div class="controls">
              <input type="text" class="input-xlarge"  name="secondary_grade_scale">
            </div>
          </div>
          
          <!-- Passing Year Field -->
          <div class="control-group">
            <label class="control-label" for="input08">Passing Year</label>
            <div class="controls">
              <input type="text" class="input-xlarge" placeholder="yyyy"  name="passing_year_secondary">
            </div>
          </div>
          
          <!-- Duration From Field -->
          <div class="control-group">
            <label class="control-label" for="input08">Duration From</label>
            <div class="controls">
              <input type="date" class="input-xlarge"  name="duration_from_secondary">
            </div>
          </div>
          
          <!-- Duration To Field -->
          <div class="control-group">
            <label class="control-label" for="input08">Duration To</label>
            <div class="controls">
              <input type="date" class="input-xlarge"  name="duration_to_secondary">
            </div>
          </div>
          
          <!-- Duration Of Degree Field -->
          <div class="control-group">
            <label class="control-label" for="input08">Duration Of Degree</label>
            <div class="controls">
              <input type="text" class="input-xlarge"  name="duration_of_degree_secondary">
            </div>
          </div>
          
          <!-- Major Field Field -->
          <div class="control-group" id="secondary_major">
            <label class="control-label" for="select05">Major Field</label>
            <div class="controls" >
              <select id="major_field_secondary" class="input-xlarge" name="major_field_secondary" onchange="major_secondary('major_field_secondary')" >
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
        