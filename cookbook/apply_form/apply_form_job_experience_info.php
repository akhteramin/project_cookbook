
        <fieldset id="job_exp_add1">
          <legend>Job Experience</legend>
          
        <!-- Designation Field -->
          <div class="control-group">
            <label class="control-label" for="input01">Designation</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="designation1" name="designation1">
            </div>
          </div>
        
        <!-- Job Description Field -->
          <div class="control-group">
            <label class="control-label" for="presentaddress">Job Description</label>
            <div class="controls">
              <textarea class="input-xlarge" id="job_description1" name="job_description1" class="input-xlarge" rows="3"></textarea>
            </div>
          </div>
        
        <!-- Job Duration From Field -->
          <div class="control-group">
            <label class="control-label" for="input08">Duration From</label>
            <div class="controls">
              <input type="date" class="input-xlarge"  name="exp_duration_from1">
            </div>
          </div>
          
          <!-- Job Duration To Field -->
          <div class="control-group">
            <label class="control-label" for="input08">Duration To</label>
            <div class="controls">
              <input type="date" class="input-xlarge"  name="exp_duration_to1">
            </div>
          </div>
          
          <!-- Job Organization Field -->
          <div class="control-group">
            <label class="control-label" for="input01">Job Organization</label>
            <div class="controls">
              <input type="text" class="input-xlarge" id="exp_organization1" name="exp_organization1">
            </div>
          </div>
          <br/>
        </fieldset>
        
        <div class="control-group" >
            <div class="controls">
              <p class="btn btn-info btn-primary" id="addjobexp" onclick="addJobExp()">Add Another Job Experience</p>
              <p class="btn btn-inverse" id="removejobexp" onclick="removeJobExp()">Remove Job Experience</p>
            </div>
        </div>