<?php

class ZetaPrints_WebToPrint_Block_Html_Footer extends Mage_Page_Block_Html_Footer {
  public function getCopyright() {
    return parent::getCopyright()
      . '<br /><a id="zetaprints-extension-version" href="http://www.zetaprints.com/">Web-to-print and image generation</a>, v. 1.8.3.2';
  }
}

?>
