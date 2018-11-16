<?php

namespace srag\CustomInputGUIs\MailLogger\PropertyFormGUI;

use ilPropertyFormGUI;
use srag\DIC\MailLogger\DICTrait;

/**
 * Class BasePropertyFormGUI
 *
 * @package srag\CustomInputGUIs\MailLogger\PropertyFormGUI
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
abstract class BasePropertyFormGUI extends ilPropertyFormGUI {

	use DICTrait;
	/**
	 * @var object
	 */
	protected $parent;


	/**
	 * BasePropertyFormGUI constructor
	 *
	 * @param object $parent
	 */
	public function __construct($parent) {
		$this->initId();

		parent::__construct();

		$this->parent = $parent;

		$this->initForm();
	}


	/**
	 *
	 */
	protected function initAction()/*: void*/ {
		$this->setFormAction(self::dic()->ctrl()->getFormAction($this->parent));
	}


	/**
	 *
	 */
	protected final function initForm()/*: void*/ {
		$this->initAction();

		$this->initCommands();

		$this->initTitle();

		$this->initItems();
	}


	/**
	 *
	 */
	protected abstract function initCommands()/*: void*/
	;


	/**
	 *
	 */
	protected abstract function initId()/*: void*/
	;


	/**
	 *
	 */
	protected abstract function initItems()/*: void*/
	;


	/**
	 *
	 */
	protected abstract function initTitle()/*: void*/
	;


	/**
	 *
	 */
	public abstract function updateForm()/*: void*/
	;
}
