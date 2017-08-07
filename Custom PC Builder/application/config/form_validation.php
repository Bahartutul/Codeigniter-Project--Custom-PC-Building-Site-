<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config = array(
	'addProcessor' => array(
					array(
						'field' => 'item',
						'label' => 'Item Name',
						'rules' => 'required|callback_checkAccNo'
						),
					array(
						'field' => 'details',
						'label' => 'Details',
						'rules' => 'required'
						),
					array(
						'field' => 'price',
						'label' => 'Price',
						'rules' => 'required|is_numeric'
						),
						array(
						'field'=>'shop',
						'label'=>'Shop Name',
						'rules'=>'required'
						)
					),
					
	'login' =>        array(
	                 array(
					 'field'=>'username',
					 'label'=>'Username',
					 'rules'=>'required'
					 ),
					 array(
					 'field'=>'password',
					 'label'=>'Password',
					 'rules'=>'required'
					 )

					)

	);