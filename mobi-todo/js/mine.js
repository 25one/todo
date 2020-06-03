var BaseRecord=(function() {

return {

//Get all tasks
index: function(){
   var ajaxSetting={
      method: 'post',
      url: './',
      data: {
         hook: 'Guzzle', 
         type: 'get',
         id: 0,  
         text: '',        
      },
      success: function(data){
         //alert(data);
         BaseRecord.template(data);
      },
      error: function(data){
         alert(data.responseText);
      },
   };
   $.ajax(ajaxSetting);
},

//Store new task
store: function(text){
   //alert(text);
   var ajaxSetting={
      method: 'post',
      url: './',
      data: {
         hook: 'Guzzle', 
         type: 'post',
         task: 0, 
         text: text,
      },
      success: function(data){
         //alert(data);
         BaseRecord.template(data); 
         $("#myInput").val('');       
      },
      error: function(data){
         alert(data.responseText);
      },
   };
   $.ajax(ajaxSetting);
},

//Update selected task
update: function(id){
   //alert(id);
   var ajaxSetting={
      method: 'post',
      url: './',
      data: {
         hook: 'Guzzle', 
         type: 'put',
         task: id, 
         text: '',         
      },
      success: function(data){
         //alert(data);
         BaseRecord.template(data);       
      },
      error: function(data){
         alert(data.responseText);
      },
   };
   $.ajax(ajaxSetting);
},

//Destroy selected task
destroy: function(id){
   //alert(id);
   var ajaxSetting={
      method: 'post',
      url: './',
      data: {
         hook: 'Guzzle', 
         type: 'delete',
         task: id, 
         text: '',         
      },
      success: function(data){
         //alert(data);
         BaseRecord.template(data);        
      },
      error: function(data){
         alert(data.responseText);
      },
   };
   $.ajax(ajaxSetting);
},

//Template of all tasks
template: function(data){
     var data_json=JSON.parse(data);
     //alert(data_json.table);
     if(data_json.notauthorized) {
       alert(data_json.notauthorized);
     } else {
       //---------------------------------
       //brick-standard - php-making
       //$('#myUL').html(data_json.table);
       //---------------------------------
       //js-making

       var li_temlate='';
       for(var i in data_json.table){
          var span_destroy_temlate='';
          var class_update_temlate='';
          if(data_json.table[i]['result']==1) {
             span_destroy_temlate='<span id="'+data_json.table[i]['id']+'" class="close">×</span>';
             class_update_temlate='checked';
          }   
          li_temlate+='<li id="'+data_json.table[i]['id']+'" class="'+class_update_temlate+'">'+data_json.table[i]['task']+span_destroy_temlate+'</li>';
       }
       $('#myUL').html(li_temlate);

       //---------------------------------
       $("#myUL li").click(function(){
          BaseRecord.update($(this).attr("id"));
       });   
       $("#myUL span.close").click(function(){
          BaseRecord.destroy($(this).attr("id"));
       });   
     }                 
},

}

})();