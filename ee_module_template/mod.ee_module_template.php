<?php
/*
 * {{ module_name_full }} Mod
 *
 * @package     {{ docblock_package }}
 * @version     {{ docblock_version }}
 * @author      {{ docblock_author }}
 * @link        {{ docblock_link }}
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

// require
require_once PATH_THIRD . '{{ module_name_lcase }}/config' . EXT;

class {{ module_name_ucfirst }}
{
    private $version = {{ module_name_ucase }}_VERSION;

    public function __construct()
    {
        // ee super object
        $this->EE      =& get_instance();
        $this->site_id = $this->EE->config->item('site_id');

        // models
        $this->EE->load->model('{{ module_name_lcase }}_mod', '{{ module_name_lcase }}');

        // db cache
        $this->EE->db->cache_off();
    }
}

/* End of file mod.{{ module_name_lcase }}.php */
/* Location: ./system/expressionengine/third_party/{{ module_name_lcase }}/mod.{{ module_name_lcase }}.php */