<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model
{
    /**
     * diz se uma string é ou não UTF8
     * 
     * @param string  $str texto a ser verificado
     * 
     * @return boolean
     */
    protected function isUtf8($str)
    {
        $c=0;
        $b=0;
        $bits=0;
        $len=strlen($str);
        for ($i = 0; $i < $len; $i++) {
            $c = ord($str[$i]);
            if ($c > 128) {
                if ($c >= 254) {
                    return false;
                } else if ($c >= 252) {
                    $bits=6;
                } else if ($c >= 248) {
                    $bits=5;
                } else if ($c >= 240) {
                    $bits=4;
                } else if ($c >= 224) {
                    $bits=3;
                } else if ($c >= 192) {
                    $bits=2;
                } else {
                    return false;
                }
                if (($i+$bits) > $len) {
                    return false;
                }
                while ($bits > 1) {
                    $i++;
                    $b = ord($str[$i]);
                    if ($b < 128 || $b > 191) {
                        return false;
                    }
                    $bits--;
                }
            }
        }
        return true;
    }

    /**
     * loga a string sql usada em qual método
     * 
     * @param string $sql    sql query
     * @param string $method nome do método
     * 
     * @return void
     */
    protected function log_sql($sql, $method)
    {
        return log_message(
            'debug',
            sprintf(
                'SQL executado no método %s: %s',
                $method,
                print_r($sql, true)
            )
        );
    }

    /**
     * trata utf8
     * 
     * @param StdClass $row um registro do CodeIgniter $this->db->query->result()
     * 
     * @return StdClass
     */
    protected function trataUtf8(StdClass $row)
    {
        foreach ($row as $key => $column) {
            if ($this->isUtf8($column)) {
                $row->$key = $column;
            } else {
                $row->$key = utf8_encode($column);
            }
        }
        return $row;
    }

}
 