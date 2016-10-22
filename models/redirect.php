<?php

class RedirectPage extends Page {
  public function url() {
    if ($this->external()->isNotEmpty()) {
      return $this->external();
    }
    return parent::url();
  }
  public function isExternal() {
      return $this->external()->isNotEmpty();
  }
}
