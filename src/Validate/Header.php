<?php
namespace CsvHilario\ExportCsv\Validate;

use Exception;

class Header
{
    /**
     * método que valida o header
     * @access public
     * @param array $header
     * @return exception
     */
    public function validate($header)
    {
        if (!$header) {
            throw new Exception('Ops! Não há dados para gerar o header.');
        }

        if (!is_array($header)) {
            throw new Exception('Ops! Você deve passar como parâmetro uma matriz (array)!');
        }
    }
}
