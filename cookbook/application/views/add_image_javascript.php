  <script>
  var image=1;
    function addImage()
                {
				image++;
				var add='<div class="control-group" id="image_'+image+'">';
				add+=' <label class="control-label" >Choose File</label>';
               
                    add+='<input type="hidden" name="MAX_FILE_SIZE" value="10000000000" />';
                    add+='<p>  <input type="file" name="userfile["'+image+'"]"  size="18"/><br/></p>';
               
            add+='</div>';
				 $("#image_1").append(add); 
				}
     function removeImage()
                {
                    if(image>1)
                    {
                        var add ='#image_'+image;
                        $(add).remove();
                        image--;
                    }
                }
  </script>