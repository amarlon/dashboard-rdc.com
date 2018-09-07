<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Users_migration extends CI_Migration {

        public function up()
        {
             $this->dbforge->add_field(array(
        	        'id' => array(
        	                        'type' => 'INT',
        	                        'unsigned' => TRUE,
        	                        'auto_increment' => TRUE
        	                    ),
        	                    'fullname' => array(
        	                        'type' => 'VARCHAR',
        	                        'constraint' => '255',
        	                        'null' => FALSE
        	                    ),
        	                    'username' => array(
        	                        'type' => 'VARCHAR',
        	                        'constraint' => '255',
        	                        'null' => TRUE
        	                    ),
        	                    'email' => array(
        	                        'type' => 'VARCHAR',
        	                        'constraint' => '255',
        	                        'null' => FALSE
        	                    ),
        	                    'lang' => array(
        	                        'type' => 'VARCHAR',
        	                        'constraint' => '40',
        	                        'null' => TRUE
        	                    ),
        	                    'avatar' => array(
        	                        'type' => 'TEXT',
        	                        'null' => TRUE
        	                    ),
        	                    'profession' => array(
        	                        'type' => 'VARCHAR',
        	                        'constraint' => '255',
        	                        'null' => TRUE
        	                    ),
        	                    'phone' => array(
        	                        'type' => 'VARCHAR',
        	                        'constraint' => '255',
        	                        'null' => TRUE
        	                    ),
        	                    'about' => array(
        	                        'type' => 'TEXT',
        	                        'null' => TRUE
        	                    ),
        	                    'website' => array(
        	                        'type' => 'TEXT',
        	                        'null' => TRUE
        	                    ),
        	                    'gallery_desc' => array(
        	                        'type' => 'TEXT',
        	                        'null' => TRUE
        	                    ),
        	                    'password' => array(
        	                        'type' => 'TEXT',
        	                        'null' => FALSE
        	                    ),
        	                    'country_id' => array(
        	                        'type' => 'INT',
        	                        'unsigned' => TRUE
        	                    ),
        	                    'country_origin_id' => array(
        	                        'type' => 'INT',
        	                        'unsigned' => TRUE
        	                    ),
        	                    'created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
        	                    'last_login' => array(
        	                        'type' => 'DATETIME'
        	                    ),
        	                    'image' => array(
        	                        'type' => 'TEXT',
        	                        'null' => TRUE
        	                    ),
        	                    'image_bytes' => array(
        	                        'type' =>'INT',
        	                        'unsigned' => TRUE
        	                    ),
        	                    'image_public_id' => array(
        	                        'type' =>'TEXT',
        	                        'null' => TRUE
        	                    )
        	));
        	$this->dbforge->add_key('id', TRUE);
        	$this->dbforge->create_table('users');   
        }

        public function down()
        {
                 $this->dbforge->drop_table('users');
        }
}