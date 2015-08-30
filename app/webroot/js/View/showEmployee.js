


<!-- LOAD TABLE SCRIPT-->

<script type="text/javascript">
  
$(function () {
                $.get("allEmployees", function (data) {
                    $("#allEmployees").append(data);
                });
            });


</script>

<!-- DELETE SCRIPT-->

<script type="text/javascript">
  $(document).ready(function(){
    $('.delete').click(function(){
     var id = $(this).attr("id");
       bootbox.confirm("Are you sure you want to delete this data?", function(result) {
          if(result == true){
           $.ajax({                   
                  url: 'deleteemp',
                  cache: false,
                  type: 'POST',
                  dataType: 'HTML',
               data: {
                 input: id
                },
                  success: function () {
                  
                   bootbox.alert("Record successfully deleted.");
                  }
                 });
                  $('.remove'+id).hide('fade');
          }
          

        }); 


      return false;
            
    });

  });

</script>

<!-- SEARCH SCRIPT -->

  <script>
     $(document).ready(function(){
      $('#submit').click(function(){
       var search = $('#search').val();
       
       if (search != '') {

                $.ajax({                   
                  url: 'searchEmployee',
                  cache: false,
                  type: 'POST',
                  dataType: 'HTML',
               data: {
                 input: search
                },
                  success: function (clients) {
                   $('#emp').html(clients);
                  }
                 });
              $('.mytable').hide();
              return false;
       } else {
        return false;
       }
              
              
      });

      }
     );

    </script>


    <!-- EDIT 

<script type="text/javascript">
  

   function editGadget(id, ggpropertyno,ggdescription, ggserial, ggstatus, ggavailability){


        bootbox.dialog({
                title: "Edit Gadget Information",
                message: '<div class="row">  ' +
                    '<div class="col-md-12"> ' +
                    '<form class="form-horizontal"> ' +


                    '<div class="form-group"> ' +
                    '<label class="col-md-4 control-label" for="name">Property No.</label> ' +
                    '<div class="col-md-4"> ' +
                    '<input type="hidden" name="id" id="id" value="'+id+'"/>'+ 
                    '<input type="text" name="ggpropertyno" id="ggpropertyno" value="'+ggpropertyno+'" class="form-control input-md"/>'+
                    '</div> ' +
                    '</div> ' +


                    '<div class="form-group"> ' +
                    '<label class="col-md-4 control-label" for="name">Description</label> ' +
                    '<div class="col-md-4"> ' +
                    '<input type="text" name="ggdescription" id="ggdescription" value="'+ggdescription+'" class="form-control input-md"/>'+
                    '</div> ' +
                    '</div> ' +


                    '<div class="form-group"> ' +
                    '<label class="col-md-4 control-label" for="name">Serial</label> ' +
                    '<div class="col-md-4"> ' +
                    '<input type="text" name="ggserial" id="ggserial" value="'+ggserial+'" class="form-control input-md"/>'+
                    '</div> ' +
                    '</div> ' +


                    '<div class="form-group"> ' +
                    '<label class="col-md-4 control-label" for="name">Status</label> ' +
                    '<div class="col-md-4"> ' +
                    '<select name="ggserial" id="ggstatus" class="form-control input-md">'+
                       ' <option value="1"> Working</option>' +
                         ' <option  value="2"> Defective</option> ' +
                    ' </select>' +


                    '</div> ' +
                    '</div> ' +




                    '</form> </div>  </div>',
                buttons: {


                    success: {
                        label: "<i class='fa fa-pencil'></i> Update",
                        className: "btn-success",
                        callback: function () {
                            var id = $('#id').val();
                            var ggpropertyno = $('#ggpropertyno').val();
                            var ggdescription = $('#ggdescription').val();
                            var ggserial = $('#ggserial').val();
                            var ggstatus = $('#ggstatus').val();
                            var ggavailability = $('#ggavailability').val();


                            $.ajax({                   
                                    url: 'editgdgt',
                                    type: 'POST',
                                    cache: false,
                                    dataType: 'HTML',
                                    data: {
                                      id: id,
                                      ggpropertyno: ggpropertyno,
                                      ggdescription: ggdescription,
                                      ggserial: ggserial

                                    },
                                   

                                      success: function () {
                                     
                                     bootbox.alert('Record successfully updated.', function()
                                     {
                                      $("#gadget").remove();
                                     

                                      $.get("allGadgets", function(data) {
                                      $("#allGadgets").append(data);


                                      });

                                     });
                                          
                                    }
                            });
                           
                        }
                        
                    }
                } // close of button
                
            }
                    
        );

  

   }


</script>SCRIPT-->