﻿$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})

var BaseRecord=(function() {

return {

/*
destroy: function(user_id){
   var ajaxSetting={
      method: 'delete',
      url: './messages/'+user_id, 
      success: function(data){
          //alert(data);
          //BaseRecord.userSelect(0, './dashboard');
          $('#pannel').html(data.table);
          $('.listbuttonremove').click(function(){
             BaseRecord.destroy($(this).attr('id'));
             return false;
          });                  
      },
      error: function(data){
         //alert(data.responseText);
         var data_json=JSON.parse(data.responseText);
         alert(data_json['message']);
      },
   };
   $.ajax(ajaxSetting);
},
*/

}

})();