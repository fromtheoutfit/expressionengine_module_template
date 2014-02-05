<?php
/*
 * {{ module_name_full }} Update
 *
 * @package     {{ docblock_package }}
 * @version     {{ docblock_version }}
 * @author      {{ docblock_author }}
 * @link        {{ docblock_link }}
 */

if (!defined('BASEPATH')) exit('No direct script access allowed');

// require
require_once PATH_THIRD . '{{ module_name_lcase }}/config' . EXT;

class {{ module_name_ucfirst }}_upd
{
    public $version = {{ module_name_ucase }}_VERSION;

    public function __construct()
    {
        // Make a local reference to the ExpressionEngine super object
        $this->EE =& get_instance();
    }

    /**
     * Installer
     *
     * @access public
     * @return bool
     */

    public function install()
    {
        $this->EE->load->dbforge();

        // module
        $data = array(
            'module_name'        => {{ module_name_ucase }}_CLASS,
            'module_version'     => $this->version,
            'has_cp_backend'     => 'y',
            'has_publish_fields' => 'n'
        );

        $this->EE->db->insert('modules', $data);

        // 404s
//        $fields = array(
//            'id'           => array('type'           => 'int',
//                                   'constraint'     => '10',
//                                   'unsigned'       => TRUE,
//                                   'auto_increment' => TRUE),
//            'site_id'      => array('type' => 'int', 'constraint' => '10'),
//            'some_varchar' => array('type' => 'varchar', 'constraint' => '255'),
//            'datecreated' => array('type' => 'datetime'),
//            'dateupdated' => array('type' => 'datetime'),
//        );
//
//        $this->EE->dbforge->add_field($fields);
//        $this->EE->dbforge->add_key('id', TRUE);
//        $this->EE->dbforge->create_table('{{ module_name_lcase }}', TRUE);
//        unset($fields);

        return TRUE;
    }

    /**
     * Uninstaller
     *
     * @access public
     * @return bool
     */

    public function uninstall()
    {
        $this->EE->load->dbforge();

        $this->EE->db->select('module_id');
        $query = $this->EE->db->get_where('modules', array('module_name' => {{ module_name_ucase }}_CLASS));

        $this->EE->db->where('module_id', $query->row('module_id'));
        $this->EE->db->delete('module_member_groups');

        $this->EE->db->where('module_name', {{ module_name_ucase }}_CLASS);
        $this->EE->db->delete('modules');

        $this->EE->db->where('class', {{ module_name_ucase }}_CLASS);
        $this->EE->db->delete('actions');

//        $this->EE->dbforge->drop_table('{{ module_name_lcase }}');

        return TRUE;

    }

    /**
     * Updater
     *
     * @param string $current
     * @return bool
     */

    public function update($current = '')
    {
        $this->EE->load->dbforge();
        return TRUE;
    }
}
/* End of file upd.{{ module_name_lcase }}.php */
/* Location: ./system/expressionengine/third_party/{{ module_name_lcase }}/upd.{{ module_name_lcase }}.php */