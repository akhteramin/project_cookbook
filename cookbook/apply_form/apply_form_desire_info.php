<fieldset>
          <legend>Current Admission Information</legend>
          
          <!-- Program Field -->
          <div class="control-group">
            <label class="control-label" for="select01">Program</label>
            <div class="controls">
              <select id="program" class="input-xlarge" name="program" onchange="selectedProgram()">
                <option value="Select">Select</option>
                <option value="MSc">MSc</option>
                <option value="PhD">PhD</option>
              </select>
            </div>
          </div>
          
          <!-- Department Field -->
          <div class="control-group">
            <label class="control-label" for="select02">Department</label>
            <div class="controls">
              <select id="dept_inst" class="input-xlarge" name="dept_inst">
                <option value="Select">Select</option>
                  <option value="CSE">Computer Science & Engineering (CSE)</option>
                <option value="EEE">Electrical & Electronic Engineering (EEE)</option>
              </select>
            </div>
          </div>
          
          <!-- Division Field -->
          <div class="control-group">
            <label class="control-label" for="select03">Division</label>
            <div class="controls">
              <select id="division" class="input-xlarge" name="division">
                <option value="Select">Select</option>
                <option value="Computer Architecture">Computer Architecture</option>
                <option value="Networking">Networking</option>
                <option value="Software Engineering">Software Engineering</option>
              </select>
            </div>
          </div>
          
          <!-- Desire Status Field -->
          <div class="control-group">
            <label class="control-label" for="select04">Desire Status</label>
            <div class="controls">
              <select id="desire_status" class="input-xlarge" name="desire_status">
                <option value="Select">Select</option>
                  <option value="Full Time">Full Time</option>
                <option value="Part Time">Part Time</option>
              </select>
            </div>
          </div>
</fieldset>