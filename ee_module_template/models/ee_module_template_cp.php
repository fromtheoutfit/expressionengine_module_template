<?php
/*
 * {{ module_name_full }} CP Model
 *
 * @package     {{ docblock_package }}
 * @version     {{ docblock_version }}
 * @author      {{ docblock_author }}
 * @link        {{ docblock_link }}
 */

if (!defined('BASEPATH'))
{
    exit('No direct script access allowed');
}

// require
require_once PATH_THIRD . '{{ module_name_lcase }}/config' . EXT;
require_once PATH_THIRD . '{{ module_name_lcase }}/models/{{ module_name_lcase }}_base' . EXT;

class {{ module_name_ucfirst }}_cp extends {{ module_name_ucfirst }}_base
{
    private $site_id = 1;

    public function __construct()
    {
        $this->EE      =& get_instance();
        $this->site_id = $this->EE->config->item('site_id');
        $this->EE->db->cache_off();
    }
}

/* End of file {{ module_name_lcase }}_cp.php */
/* Location: ./system/expressionengine/third_party/{{ module_name_lcase }}/models/{{ module_name_lcase }}_cp.php */