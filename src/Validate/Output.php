<?php
namespace CsvHilario\ExportCsv\Validate;

use Exception;

class Output
{
    /**
     * método que valida o outputType
     * @access public
     * @param array $outputType
     * @return exception
     */
    public function validate($outputType)
    {
        if (!$outputType) {
            throw new Exception(
                'Ops! Você deve informar o tipo de saída do .csv, "S" para salvar ou "D" para Download.'
            );
        }

        if ($outputType != "D" && $outputType != "S") {
            throw new Exception(
                'Ops! Você tem duas opções de saída do .csv, "S" para salvar ou "D" para Download.'
            );
        }
    }
}
