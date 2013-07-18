<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Sample Events Class
 * 
 * @package        PyroCMS
 * @subpackage    Sample Module
 * @category    events
 * @author        Jerel Unruh - PyroCMS Dev Team
 * @website        http://unruhdesigns.com
 */
class Events_dtlstats {
    
    protected $ci;
    
    public function __construct()
    {
        $this->ci =& get_instance();        
        //register the public_controller event
        Events::register('public_controller', array($this, 'run'));
    }
    
    public function run()
    {
        $this->ci->load->library('dtlstats/dtlserver');
        $this->ci->load->library('dtlstats/dtlstats');        
    }
    
}
/* End of file events.php */