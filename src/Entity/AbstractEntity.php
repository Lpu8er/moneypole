<?php
namespace App\Entity;

/**
 * Description of AbstractEntity
 *
 * @author captivea-qch
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
}
