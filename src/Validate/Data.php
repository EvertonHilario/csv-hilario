<?php
namespace CsvHilario\ExportCsv\Validate;

use Exception;

class Data
{
    /**
     * método que valida o data
     * @access public
     * @param array $data
     * @return exception
     */
    public function validate($data)
    {
        if (!$data) {
            throw new Exception('Ops! Não há dados para gerar o arquivo .csv.');
        }

        if (!is_array($data)) {
            throw new Exception('Ops! Você deve passar como parâmetro uma matriz (array)!');
        }
    }
}
