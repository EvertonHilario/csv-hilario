<?php
namespace CsvHilario\ExportCsv\Validate;

use Exception;

class Delimiter
{
    /**
     * método que valida o delimiter
     * @access public
     * @param array $delimiter
     * @return exception
     */
    public static function validate($delimiter)
    {
        if (!$delimiter) {
            throw new Exception('Ops! Você deve informar um delimitador para separar as informações.');
        }
    }
}
