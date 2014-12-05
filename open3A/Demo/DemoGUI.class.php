<?php
/**
 *  This file is part of phynx.

 *  phynx is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.

 *  phynx is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.

 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 * 
 *  2007, 2008, 2009, 2010, Rainer Furtmeier - Rainer@Furtmeier.de
 */
class DemoGUI extends Demo implements iGUIHTML2 {
	function  __construct($ID) {
		parent::__construct($ID);

	}
	
	function getHTML($id){
		$this->loadMeOrEmpty();
		
		return $this->demoPopup("Dateiname");
		/**
		 * DEFAULT HTML TABLE
		 */
		$T = new HTMLTable(1);

		/**
		 * DEFAULT BUTTON
		 *
		 * This button calls a JS-function when clicked
		 */
		$BJS = new Button("JS-Funktion", "computer");
		$BJS->onclick("Demo.demoJS('erfolgreich');");
		$T->addRow($BJS); //Add button to table


		/**
		 * SIDE TABLE
		 */
		$ST = new HTMLSideTable("right");

		/**
		 * RME BUTTON
		 *
		 * This Button executes a PHP method when clicked
		 */
		$BRME = new Button("RME", "computer");
		$BRME->rmePCR("Demo", "-1", "demoRME", array("'par1'", "'par2'"), " ");
		$ST->addRow($BRME); //Add button to table

		/**
		 * POPUP BUTTON
		 *
		 * This Button executes a PHP method when clicked
		 */
		$BPOP = new Button("Popup\nanzeigen", "template");
		$BPOP->popup("demoPopup", "Popup-Title", "Demo", -1, "demoPopup");
		$ST->addRow($BPOP); //Add button to table


		/**
		 * THE EDIT-GUI
		 */
		$gui = new HTMLGUI();
		$gui->setObject($this);
		$gui->setName("Demo");
		
		$gui->setLabel("Dateiname", "Datei");
		$gui->setType("Dateiname", "image");
		
		$gui->setStandardSaveButton($this);
		
		$gui = new HTMLGUIX($this);
		$gui->name("Vorlage");
		
		$B = $gui->addSideButton("Dateiname", "./open3A/Vorlagen/logo.png");
		$B->popup("", "Datei hochladen", "Demo", $this->getID(), "demoPopup", "Dateiname");
		
	
		return $ST.$T.$gui->getEditHTML();
	}



	/**
	 * returns a HTML table with all known demo-entries
	 */
	public function demoPopup($find){
		$fields = $this->getSub($find);
		$file = $this->A($find);
		$exists = $file != null && !empty($file);
		$initFields = array($find);
		if (!$exists){
			$initFields[]="upload";
		}
	
		$F = new HTMLForm("Dateiupload", $initFields);
		$F->getTable()->setColWidth(1, 120);
		$F->setValue($find, $this->A($find));
		if (!$exists) {
			//$F->setType($find, "hidden");
			$F->insertSpaceAbove("upload", "Datei zum Importieren");
			$F->setType("upload", "file");
			$F->addJSEvent("upload", "onChange", "contentManager.rmePCR('Demo', '".$this->getID()."', 'processBackground', [fileName], function(){ alert('Upload erfolgreich'); \$j('#Dateiupload input[name=$find]').val(fileName); });");
			$F->setSaveJSON("Import starten", "", "Demo", $this->getID(), "saveImage", OnEvent::reload("Right"));
		}
	
		echo "<div style=\"max-height:400px;overflow:auto;\">".$F."</div>";
	}
	
	public static function demoRME($p1, $p2){
		Red::alertD("Parameter1: $p1; Parameter2: $p2");
	}

	private function getSub($find){
	
		$fields = array();

	
		return $fields;
	}


	
	public function processBackground($fileName){
		$ex = explode(".", strtolower($fileName));
		
		$tempDir = Util::getTempFilename();
		
		unlink($tempDir);
		$tempDir = dirname($tempDir);
		
		$imgPath = $tempDir."/".$fileName.".tmp";
		
		copy($imgPath,FileStorage::getFilesDir()."$fileName");
		unlink($imgPath);		
	}
	
	public function saveImage($data){
		$data=json_decode($data);
		$obj=reset($data);
		$this->changeA($obj->name, $obj->value);
		$this->saveMe();
		echo "saved?";
	}	
}
?>