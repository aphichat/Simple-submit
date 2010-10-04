<?php

/**
* @package ExpressionEngine
* @author Aphichat Panjamanee
* @copyright  Copyright (c) 2010, Aphichat.com
* @license    http://creativecommons.org/licenses/by-sa/3.0/
* 
* This work is licensed under the Creative Commons Attribution-Share Alike 3.0 Unported.
* To view a copy of this license, visit http://creativecommons.org/licenses/by-sa/3.0/
* or send a letter to Creative Commons, 171 Second Street, Suite 300,
* San Francisco, California, 94105, USA.
* 
*/

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
    
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