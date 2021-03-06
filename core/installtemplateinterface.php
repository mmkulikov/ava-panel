<?

	/******************************************************************************************************
	*** Package: AVA-Panel Version 3.0
	*** Copyright (c) 2006, Anton A. Rassypaeff. All rights reserved
	*** License: GNU General Public License v3
	*** Author: Anton A. Rassypaeff | Рассыпаев Антон Александрович
	*** Contacts:
	***   Site: http://ava-panel.ru
	***   E-mail: manage@ava-panel.ru
	******************************************************************************************************/



interface InstallTemplateInterface{
	public function Install();
	public function prepareInstall();
	public function checkInstall();

	public function Uninstall();
	public function checkUninstall();

	public function Update();
	public function checkUpdate();

}

?>