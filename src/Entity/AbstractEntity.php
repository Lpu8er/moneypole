<?php
namespace App\Entity;

/**
 * Description of AbstractEntity
 *
 * @author lpu8er
 */
abstract class AbstractEntity {
    /**
     * 
     * @param array $data
     * @return $this
     */
    public static function factory(array $data = []): self {
        $cls = get_called_class();
        $o = new $cls();
        foreach($data as $k => $v) {
            $mn = 'set'.ucfirst($k);
            $o->$mn($v);
        }
        return $o;
    }
    
    /**
     * 
     * @param string $k
     * @param mixed $d
     * @return mixed
     */
    protected function _getData(string $k, $d = null) {
        return property_exists($this, $k)? ($this->$k):$d;
    }
    
    /**
     * 
     * @param string $k
     * @param mixed $v
     * @return $this
     */
    protected function _setData(string $k, $v): self {
        if(property_exists($this, $k)) {
            $this->$k = $v;
        }
        return $this;
    }
    
    public function __call($name, $arguments) {
        $returns = null;
        if(3 < strlen($name)) {
            $method = substr($name, 0, 3);
            $k = lcfirst(substr($name, 3));
            if('get' === $method) {
                $returns = $this->_getData($k);
            } elseif('set' === $method) {
                $returns = $this->_setData($k, array_pop($arguments));
            }
        }
        return $returns;
    }
}
