<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use CsvHilario\ExportCsv\ExportCsv;

class ExportCsvTest extends TestCase
{
    public function testDataPassingStringAsParameter()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Ops! Você deve passar como parâmetro uma matriz (array)!');

        $csv = new ExportCsv;
        $csv->setData('ghfdgh');
    }
    
    public function testDataPassingEmptyArrayAsParameter()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Ops! Não há dados para gerar o arquivo .csv.');

        $csv = new ExportCsv;
        $csv->setData([]);
    }

    public function testDataPassingNullAsParameter()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Ops! Não há dados para gerar o arquivo .csv.');

        $csv = new ExportCsv;
        $csv->setData(null);
    }

    public function testHeaderPassingStringAsParameter()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Ops! Você deve passar como parâmetro uma matriz (array)!');

        $csv = new ExportCsv;
        $csv->setHeader('ghfdgh');
    }
    
    public function testHeaderPassingEmptyArrayAsParameter()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Ops! Não há dados para gerar o header.');

        $csv = new ExportCsv;
        $csv->setHeader([]);
    }

    public function testHeaderPassingNullAsParameter()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Ops! Não há dados para gerar o header.');

        $csv = new ExportCsv;
        $csv->setHeader(null);
    }
    
    public function testDelimiterPassingEmptyArrayAsParameter()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Ops! Você deve informar um delimitador para separar as informações.');

        $csv = new ExportCsv;
        $csv->setDelimiter([]);
    }

    public function testDelimiterPassingNullAsParameter()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Ops! Você deve informar um delimitador para separar as informações.');

        $csv = new ExportCsv;
        $csv->setDelimiter(null);
    }
    
    public function testOutputPassingNullAsParameter()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage(
            'Ops! Você deve informar o tipo de saída do .csv, "S" para salvar ou "D" para Download.'
        );

        $csv = new ExportCsv;
        $csv->setOutput(null);
    }
    
    public function testOutputTypePassingNullAsParameter()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage(
            'Ops! Você tem duas opções de saída do .csv, "S" para salvar ou "D" para Download.'
        );

        $csv = new ExportCsv;
        $csv->setOutput('E');
    }    

    public function testSaveFile()
    {
        $data = [
            ["teste1", "teste2", "teste3"],
            ["teste4", "teste5", "teste6"]
        ];

        $header = ["a", "b", "c"];

        $csv = new ExportCsv;
        $csv->setData($data);
        $csv->setHeader($header);
        $csv->setDelimiter(";");
        $csv->setFileName("gremio-file");
        $csv->setOutput("S", "tests/src/");
        $csv->export();

        $this->assertFileExists("tests/src/gremio-file.csv");

        if (file_exists("tests/src/gremio-file.csv")) {
            unlink("tests/src/gremio-file.csv");
        }
    }
}