<?php
/*
 * {{ module_name_full }} MCP
 *
 * @package     {{ docblock_package }}
 * @version     {{ docblock_version }}
 * @author      {{ docblock_author }}
 * @link        {{ docblock_link }}
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

class {{ module_name_ucfirst }_mcp
{

    private $site_id = 1;

    public function __construct()
    {
        // ee super object
        $this->EE      =& get_instance();
        $this->site_id = $this->EE->config->item('site_id');

        // models
        $this->EE->load->model('{{ module_name_lcase }}_cp', '{{ module_name_lcase }}');

        // db cache
        $this->EE->db->cache_off();
    }

    /**
     * MCP Landing Page
     *
     * @access public
     * @return    string
     */

    public function index()
    {
        // page title
        $this->_cp_page_title($this->EE->lang->line('{{ module_name_lcase }}_mcp_index'));

        // javascript & css
        $this->EE->cp->load_package_js('{{ module_name_lcase }}');
        $this->EE->cp->load_package_css('{{ module_name_lcase }}');

        // libraries
        //  $this->EE->load->library('table');
        //  $this->EE->load->library('javascript');

        // variables
        $data = '';

        return $data;
    }
}
/* End of file mcp.{{ module_name_lcase }}.php */
/* Location: ./system/expressionengine/third_party/{{ module_name_lcase }}/mcp.{{ module_name_lcase }}.php */
