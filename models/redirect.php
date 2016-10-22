<?php

class RedirectPage extends Page {
  public function url() {
    if ($this->redirect()->isNotEmpty() && ($p = page($this->redirect()->value()))) {
      // if 'redirect to page' is set (and exists), go for it
      return $p->url();
    } else if ($this->external()->isNotEmpty()) {
      // if 'external url' is set, go for it
      return $this->external();
    } elseif ($this->children()->visible()->count()) {
      // else if page has visible children, redirect to the first one
      return $this->children()->visible()->first()->url();
    }
    return parent::url();
  }
  public function isExternal() {
      return $this->external()->isNotEmpty();
  }
}
