# TEMPLATE PHP-MYSQL -HTML -CSS - JQUERY -BOOTSTRAP /Framework Codeigniter with login Page
 


You can easily load images from an internet URL, drawable, or file. And there are many kinds of amazing animations you can use. :-D

## Demo 
### Home page

I decided to open source this because there is really perfectelly dashboard for all developer who want to use a framework codeigniter 

![ezgif com-video-to-gif](https://user-images.githubusercontent.com/39515872/46099092-bca68280-c17a-11e8-8e67-65c743e09149.gif)


### Forum page

    forum with system comment for your busness

![vlc-record-2018-09-26-11h39m36s-dash mov-](https://user-images.githubusercontent.com/39515872/46101552-1d38be00-c181-11e8-90db-590b42db676a.gif)

## Usage

### Step 1

##### Config/config 

Change the following code with the localhost of your website, the config['baseurl'] must be the same like your own

--------------------------------------------------------------
       $config['base_url'] = 'http://localhost:8888/dashboard-rdc.com/';
---------------------------------------------------------------


### Step 2 

##### Config/database.php
-------------------------------------------------------------------

        $db['default'] = array(
	                            'dsn'	=> '',
	                            'hostname' => 'localhost',// inserer votre domaine pour le bdd
	                            'username' => 'root',
	                            'password' => 'root',
	                            'database' => 'dashboard',
	                            'dbdriver' => 'mysqli',
	                            'dbprefix' => '',
	                            'pconnect' => FALSE,
	                            'db_debug' => (ENVIRONMENT !== 'production'),
	                            'cache_on' => FALSE,
	                            'cachedir' => '',
	                            'char_set' => 'utf8',
                            	    'dbcollat' => 'utf8_general_ci',
	                            'swap_pre' => '',
	                            'encrypt' => FALSE,
	                            'compress' => FALSE,
	                            'stricton' => FALSE,
	                            'failover' => array(),
	                            'save_queries' => TRUE
                            );

