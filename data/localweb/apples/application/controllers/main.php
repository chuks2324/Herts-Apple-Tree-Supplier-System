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
		$crud->fields('idTree', 'variety', 'retailPrice');
		
		//set the foreign keys to appear as drop-down menus
		// ('this fk column','referencing table', 'column in referencing table')
		$crud->set_relation('variety','applevariety','idvariety');
		
		//many-to-many relationship with link table see grocery crud website: www.grocerycrud.com/examples/set_a_relation_n_n
		//('give a new name to related column for list in fields here', 'join table', 'other parent table', 'this fk in join table', 'other fk in join table', 'other parent table's viewable column to see in field')
		//$crud->set_relation_n_n('items', 'order_items', 'items', 'invoice_no', 'item_id', 'itemDesc');
		
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

	public function items()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		
		$crud->set_table('items');
		$crud->set_subject('item');
		$crud->columns('itemID', 'itemDesc', 'orders');
		$crud->fields('itemDesc', 'orders');
		$crud->required_fields('itemID', 'itemDesc');
		$crud->set_relation_n_n('orders', 'order_items', 'orders', 'item_id', 'invoice_no', 'invoiceNo');
		$crud->display_as('itemDesc', 'Description');
		
		$output = $crud->render();
		$this->items_output($output);
	}
	
	function items_output($output = null)
	{
		$this->load->view('items_view.php', $output);
	}

	public function orchard()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('orchard');
		$crud->set_subject('orchard');
		$crud->fields('orchardID', 'Location');
		$crud->required_fields('orchardID', 'Location');
		//$crud->display_as('custID', 'CustomerID');
		//$crud->display_as('custName', 'Name');
		
		
		$output = $crud->render();
		$this->orchard_output($output);
	}
	
	function orchard_output($output = null)
	{
		$this->load->view('orchard_view.php', $output);
	}
	
	public function orderline()
	{	
		$this->load->view('header');
		$crud = new grocery_CRUD();
		$crud->set_theme('datatables');
		$crud->set_table('order_items');
		$crud->set_subject('order line');
		$crud->fields('invoice_no', 'item_id', 'itemQty', 'itemPrice');
		$crud->set_relation('invoice_no','orders','invoiceNo');
		//have multiple columns show in one FK column by concatenation:  www.grocerycrud.com/forums/topic/479-concatenate-two-or-more-fields-into-one-field/
		$crud->set_relation('item_id','items','{itemID} - {itemDesc}');
		$crud->required_fields('invoice_no', 'item_id', 'itemQty', 'itemPrice');
		$crud->display_as('invoice_no', 'InvoiceNo');
		$crud->display_as('item_id', 'ItemID');
		$crud->display_as('itemQty', 'Quantity');
		$crud->display_as('itemPrice', 'Price');
		
		$output = $crud->render();
		$this->orderline_output($output);
	}
	
	function orderline_output($output = null)
	{
		$this->load->view('orderline_view.php', $output);
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
	
	public function query2()
	{	
		$this->load->view('header');
		$this->load->view('query2_view');
	}
	
	public function blank()
	{	
		$this->load->view('header');
		$this->load->view('blank_view');
	}
}
