<?php
/** 
* Essa classe visa simplificar exportação de dados em arquivos CSVs
* da forma mais genérica possível
* 
* @author Éverton Hilario <evertonjuru@gmail.com> 
* @version 0.1 
* @copyright GPL © 2007. 
* @access public 
*/ 
class ExportCsv
{
    /** 
    * Variável que recebe os dados que alimentarão o arquivo
    * @access private 
    * @var array $data
    */ 
    private $data = [];

    /** 
    * Variável que recebe os dados que alimentaram o header do arquivo, os títulos de cada coluna
    * Se não for informado o header será montado com os índices do array
    * @access private 
    * @var array $header
    */ 
    private $header = [];

    /** 
    * Variável que recebe o nome do arquivo
    * @access private 
    * @var string $filename
    */ 
    private $filename = "arquivo";

    /** 
    * Variável que recebe o delimitador dos dados, por padrão é utilizado ; porém 
    * Existem situações que os dados odem vir separados por outro caracter
    * @access private 
    * @var string $delimiter
    */ 
    private $delimiter = ";";

    /** 
    * variável que recebe o conteúdo do arquivo
    * @access private 
    * @var array $content
    */ 
    private $content = [];

    /** 
    * variável que recebe o tipo da saída do arquivo
    * @access private 
    * @var array $outputType
    * D = Download
    * S = Save
    */ 
    private $outputType = "D";

    /** 
    * variável que recebe o destino da saída do arquivo
    * @access private 
    * @var array $output
    */ 
    private $output = "php://output";

    /** método que exporta o arquivo csv
     * @access public
     * @date - 21/12/2017
     * @author Éverton Hilario <everton.hilario@guarida.com.br>
     * @return .csv
    **/
    public function export() {
        try {
            if (!$this->data) {
                throw new Exception('Ops! Não há dados para gerar a planilha .csv.');
            }

            $this->headerConfig();
            $this->contentConfig();

            if ($this->outputType == "D") {
                //seta os cabeçalhos do arquivo
                header('Content-Type: application/csv');
                header('Content-Disposition: attachment; filename="' . $this->filename . '.csv";');
            }

            //cria o arquivo
            $f = fopen($this->output, 'w');

            // percorre os dados
            foreach ($this->content as $line) { 
                // gera o conteúdo do arquivo
                fputcsv($f, $line, $this->delimiter); 
            }

            exit;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    /** método que seta a saída do arquivo
     * @access public
     * @date - 21/12/2017
     * @author Éverton Hilario <everton.hilario@guarida.com.br>
     * @param string $outputType 
     * @param string $output 
     * @return void
    **/
    public function setOutput($outputType, $output = '')
    {
        $this->outputType  = $outputType;

        if ($outputType == "S") {
            $this->output = $output . $this->filename . '.csv';
        }
    }    

    /** método que seta o delimitador do conteúdo do csv
     * @access public
     * @date - 21/12/2017
     * @author Éverton Hilario <everton.hilario@guarida.com.br>
     * @param string $delimiter 
     * @return void
    **/
    public function setDelimiter($delimiter)
    {
        if ($delimiter) {
            $this->delimiter = $delimiter;
        }
    }  

    /** método que seta o nome do arquivo
     * @access public
     * @date - 21/12/2017
     * @author Éverton Hilario <everton.hilario@guarida.com.br>
     * @param string $filename 
     * @return void
    **/
    public function setFileName($filename)
    {
        if ($filename) {
            $this->filename = $filename;
        }
        
    }    

    /** método que seta o conteúdo do arquivo
     * @access private
     * @date - 21/12/2017
     * @author Éverton Hilario <everton.hilario@guarida.com.br>
     * @return void
    **/
    private function contentConfig()
    {
        $this->content = array_merge($this->header, $this->data);
    }  

    /** método que seta os dados que compõe o arquivo
     * @access public
     * @date - 21/12/2017
     * @author Éverton Hilario <everton.hilario@guarida.com.br>
     * @param array $data 
     * @return void
    **/
    public function setData($data)
    {
        if ($data) {
            $this->data = $data;
        }
    }

    /** método que configura o header do arquivo
     * @access private
     * @date - 21/12/2017
     * @author Éverton Hilario <everton.hilario@guarida.com.br>
     * @return void
    **/
    private function headerConfig()
    {
        //se existir um header
        if ($this->header) {
            //adiciona o header no arquivo
            $this->header = [$this->header];
        } else {
            //percorre os dados 
            foreach ($this->data[0] as $key => $data_) {
                //monta um array com os índices
                $this->header[0][] = $key;
            }
        }

    }

    /** método que seta o header do arquivo
     * @access public
     * @date - 21/12/2017
     * @author Éverton Hilario <everton.hilario@guarida.com.br>
     * @param array $header 
     * @return void
    **/
    public function setHeader($header)
    {
        //se existir um header
        if ($header) {
            //adiciona o header no arquivo
            $this->header = $header;
        }
    }
}
