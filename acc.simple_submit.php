<?php
class Simple_submit_acc {

  var $name = 'Simple submit';
  var $id = 'simple_submit';
  var $version  = '0.6';
  var $description  = 'Enable to save ExpressionEngine template with a shortcut code.';
  var $sections = array();

  /**
   * Constructor
   */
 function Example_acc(){
    $this->EE =& get_instance();
  }
  
 function set_sections(){
    $this->sections['Submit'] = '
      <p>Usage: when editing template use (ctrl+s) to save the template.</p>
      <script type="text/javascript" charset="utf-8">
      $(function(){
         $("#template_create #template_data").focus();
          var isCtrl = false; 
          $(document).keyup(function(e){
            //cmd = 91
            if(e.which == 17) isCtrl=false; }).keydown(function(e){ 
              if(e.which == 17) isCtrl=true; if(e.which == 83 && isCtrl == true) { 
                e.preventDefault();
                $("#template_create form").submit();
              } 
            });
          });
      </script>
    '; 
  }
}
// END CLASS
?>