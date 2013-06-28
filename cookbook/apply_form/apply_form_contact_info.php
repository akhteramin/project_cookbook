<fieldset>
          <legend>Contact Information</legend>
          
          <!-- Present Address Field -->
          <div class="control-group">
            <label class="control-label" for="presentaddress">Present Address</label>
            <div class="controls">
              <textarea class="input-xlarge" id="present_address" name="present_address" class="present_address" rows="3"></textarea>
            </div>
          </div>
          
          <!-- Permanent Address Field -->
          <div class="control-group">
            <label class="control-label" for="permanent_address">Permanent Address</label>
            <div class="controls">
              <textarea class="input-xlarge" id="permanent_address" class="permanent_address" rows="3" name="permanent_address"></textarea>
            </div>
          </div>
          
          <!-- Email Field -->
          <div class="control-group">
            <label class="control-label" for="input07">Email</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="email" name="email">
            </div>
          </div>
          
         
          
          <!-- Phone Field -->
          <div class="control-group" id="phone1">
            <label class="control-label" for="input08">Phone</label>
            <div class="controls">
              <input type="text" class="input-xlarge"  name="phone1">
            </div>
            <br/>
          </div>
          
          
          <div class="control-group" >
            <div class="controls">
              <lable class="btn btn-info btn-primary" name="add_phone" id="addph" onclick="addPhone()">Add Another Phone</lable>
              <lable class="btn btn-inverse" name="remove_phone" id="removeph" onclick="removePhone()">Remove Phone</lable>
            </div>
          </div>
          
</fieldset>
