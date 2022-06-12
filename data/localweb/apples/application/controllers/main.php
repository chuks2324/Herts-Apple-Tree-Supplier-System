<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	 
	 function __construct()
	{
		parent::__construct();	 
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
		$this->load->library('table');
	}
	
	public function index()
	{	
		$this->load->view('header');
		$this->load->view('home');
	}
	
	public function tree()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		
		//table name exact from database
		$crud->set_table('tree');
		
		//give focus on name used for operations e.g. Add Order, Delete Order
		$crud->set_subject('Tree');
		
		//the columns function lists attributes you see on frontend view of the table
		$crud->columns('idTree', 'variety', 'retailPrice');
	
		//the fields function lists attributes to see on add/edit forms.
		//Note no inclusion of invoiceNo as this is auto-incrementing
		$crud->fields('variety', 'retailPrice');
		
		//set the foreign keys to appear as drop-down menus
		// ('this fk column','referencing table', 'column in referencing table')
		$crud->set_relation('variety','applevariety','name');
		
		
		
		//form validation (could match database columns set to "not null")
		$crud->required_fields('idTree', 'variety', 'retailPrice');
		
		//change column heading name for readability ('columm name', 'name to display in frontend column header')
		$crud->display_as('idTree', 'TreeID');
		$crud->display_as('variety', 'Variety');
		$crud->display_as('retailPrice', 'Price');
		
		$output = $crud->render();
		$this->tree_output($output);
	}
	
	function tree_output($output = null)
	{
		//this function links up to corresponding page in the views folder to display content for this table
		$this->load->view('tree_view.php', $output);
	}

	public function variety()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		
		$crud->set_table('applevariety');
		$crud->set_subject('Variety');
		$crud->columns('idvariety', 'name', 'colour_idcolour', 'crop_idcrop', 'season_idseason', 'size_idSize');
		$crud->fields('idvariety', 'name', 'colour_idcolour', 'crop_idcrop', 'season_idseason', 'size_idSize');
		$crud->required_fields('idvariety', 'name', 'colour_idcolour', 'crop_idcrop', 'season_idseason', 'size_idSize');
		$crud->set_relation('crop_idcrop', 'crop', 'cropName');
		$crud->set_relation('size_idSize', 'size', 'size');
		$crud->set_relation('colour_idcolour', 'colour', 'name');
		$crud->set_relation('season_idseason', 'season', 'season');
		//$crud->set_relation_n_n('orders', 'order_items', 'orders', 'item_id', 'invoice_no', 'invoiceNo');
		$crud->display_as('idvariety', 'VarietyID');
		$crud->display_as('name', 'Variety');
		$crud->display_as('colour_idcolour', 'Fruit_colour');
		$crud->display_as('crop_idcrop', 'Crop');
		$crud->display_as('season_idseason', 'Season');
		$crud->display_as('size_idSize', 'Size');
		
		
		$output = $crud->render();
		$this->variety_output($output);
	}
	
	function variety_output($output = null)
	{
		$this->load->view('variety_view.php', $output);
	}

	public function orchard()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('orchard');
		$crud->set_subject('orchard');
		$crud->fields('idOrchard', 'Location');
		$crud->required_fields('idOrchard', 'Location');
		$crud->display_as('idOrchard', 'OrchardID');

		
		
		$output = $crud->render();
		$this->orchard_output($output);
	}
	
	function orchard_output($output = null)
	{
		$this->load->view('orchard_view.php', $output);
	}

	
	public function treesplanted()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('treesplanted');
		$crud->set_subject('Planted_Info');
		$crud->columns('Name', 'orchard_idOrchard', 'date');
		$crud->fields('orchard_idOrchard', 'tree_idTree', 'date');
		$crud->set_relation('orchard_idOrchard','orchard','{Location} ({idOrchard})');
		//many-to-many relationship with link table see grocery crud website: www.grocerycrud.com/examples/set_a_relation_n_n
		//('give a new name to related column for list in fields here', 'join table', 'other parent table', 'this fk in join table', 'other fk in join table', 'other parent table's viewable column to see in field')
		$crud->set_relation_n_n('Name', 'tree', 'applevariety', 'idTree', 'variety', '{tree_idTree} - {name}');

		//have multiple columns show in one FK column by concatenation:  www.grocerycrud.com/forums/topic/479-concatenate-two-or-more-fields-into-one-field/
		$crud->set_relation('tree_idTree','tree','{idTree} - {variety}');
		$crud->required_fields('orchard_idOrchard', 'tree_idTree', 'date');
		$crud->display_as('orchard_idOrchard', 'Orchard');
		$crud->display_as('tree_idTree', 'TreeID');
		$crud->display_as('date', 'Date');
		
		$output = $crud->render();
		$this->treesplanted_output($output);
	}
	
	function treesplanted_output($output = null)
	{
		$this->load->view('treesplanted_view.php', $output);
	}
	
	
	public function querynav()
	{	
		$this->load->view('header');
		$this->load->view('querynav_view');
	}
		
	public function query1()
	{	
		$this->load->view('header');
		$this->load->view('query1_view');
	}
	
	public function help()
	{	
		$this->load->view('header');
		$this->load->view('help.php');
	}
}
