<?php
switch ($state) {
	case self::TAG_OPEN:
	case self::TAG_SELF:
		echo $this->_compile('$out = call_user_func_array(array($this, \'element\'), array(%s, %s, %s)); $set = %s; if (!empty($set)) { $this->viewVars[$set] = $out; } else { echo $out; }', $this->_processAttribute($attributes, 'name'), $this->_processAttribute($attributes, 'vars', array('default' => 'array()', 'format' => null)), $this->_processAttribute($attributes, 'options', array('default' => 'array()', 'format' => null)), $this->_processAttribute($attributes, 'set'));
}

