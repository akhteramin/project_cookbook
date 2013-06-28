<fieldset id="ref_add1">
        <legend>Reference</legend>
          
        <!-- Reference Name Field -->
          <div class="control-group">
            <label class="control-label" for="input01">Reference Name</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="ref_name1" name="ref_name1">
            </div>
          </div>
        
          <!-- Reference Address Field -->
          <div class="control-group">
            <label class="control-label" for="presentaddress">Reference Address</label>
            <div class="controls">
              <textarea class="input-xlarge" id="ref_address1" name="ref_address1" class="input-xlarge" rows="3"></textarea>
            </div>
          </div>
        
        <!-- Reference Phone Field -->
          <div class="control-group">
            <label class="control-label" for="input01">Reference Phone</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="ref_phone1" name="ref_phone1">
            </div>
          </div>
        <br/>
         </fieldset>
        
        <div class="control-group" >
            <div class="controls">
              <p class="btn btn-info btn-primary" id="addref" onclick="addRef()">Add Another Reference</p>
              <p class="btn btn-inverse" id="removeref" onclick="removeRef()">Remove Reference</p>
            </div>
        </div>