<h1><a id="csvhilario_0"></a>csv-hilario</h1>
<p>Classe escrita em PHP que fornece a possibilidade de escrever arquivos de planilha CSV de uma forma muito simples e rápida.<br>
Basta passar os dados por um array bidimensional para poder fazer o download do arquivo.</p>
<h3><a id="Caracterstica_da_classe_4"></a>Característica da classe</h3>
<ul>
<li>De fácil implementação</li>
<li>Curva baixa de aprendizado</li>
<li>Código enxuto</li>
<li>Defina as propriedades de escrita como nome do arquivo, header, output e delimitador dos dados.</li>
<li>Classe orientada a objeto</li>
</ul>
<h3><a id="Requisitos_11"></a>Requisitos</h3>
<p>Versão PHP 5.4.0 ou superior</p>
<h3><a id="Instalao_e_Carregamento_15"></a>Instalação e Carregamento</h3>
<p>O csv-hilario está disponível no Packagist e a instalação via compositor é a maneira recomendada de instalar. Basta adicionar esta linha ao seu composer.json</p>
<pre><code class="language-sh"><span class="hljs-string">"everton-hilario/csv-hilario"</span>: <span class="hljs-string">"1.*"</span>
</code></pre>
<p>ou executar</p>
<pre><code class="language-sh">$ composer require everton-hilario/csv-hilario
</code></pre>
<h3><a id="Exemplo_bsico_25"></a>Exemplo básico</h3>
<pre><code class="language-php"><span class="hljs-keyword">use</span> <span class="hljs-title">CsvHilario</span>\<span class="hljs-title">ExportCsv</span>\<span class="hljs-title">ExportCsv</span>;
<span class="hljs-comment">//dados com o conteúdo do arquivo</span>
<span class="hljs-variable">$data</span> = [
    [<span class="hljs-string">"a"</span>=&gt;<span class="hljs-string">"teste1"</span>, <span class="hljs-string">"b"</span>=&gt;<span class="hljs-string">"teste2"</span>, <span class="hljs-string">"c"</span>=&gt;<span class="hljs-string">"teste3"</span>],
    [<span class="hljs-string">"a"</span>=&gt;<span class="hljs-string">"teste4"</span>, <span class="hljs-string">"b"</span>=&gt;<span class="hljs-string">"teste5"</span>, <span class="hljs-string">"c"</span>=&gt;<span class="hljs-string">"teste6"</span>]
];
<span class="hljs-variable">$csv</span> = <span class="hljs-keyword">new</span> ExportCsv;
<span class="hljs-variable">$csv</span>-&gt;setData(<span class="hljs-variable">$data</span>);
<span class="hljs-variable">$csv</span>-&gt;export();
</code></pre>
<h3><a id="Exemplo_para_realizar_download_de_um_CSV_passando_alguns_parmetros_37"></a>Exemplo para realizar download de um CSV passando alguns parâmetros</h3>
<pre><code class="language-php"><span class="hljs-keyword">use</span> <span class="hljs-title">CsvHilario</span>\<span class="hljs-title">ExportCsv</span>\<span class="hljs-title">ExportCsv</span>;
<span class="hljs-comment">//dados com o conteúdo do arquivo</span>
<span class="hljs-variable">$data</span> = [
    [<span class="hljs-string">"teste1"</span>, <span class="hljs-string">"teste2"</span>, <span class="hljs-string">"teste3"</span>],
    [<span class="hljs-string">"teste4"</span>, <span class="hljs-string">"teste5"</span>, <span class="hljs-string">"teste6"</span>]
];
<span class="hljs-comment">//dados do topo da planilha, títulos das colunas</span>
<span class="hljs-variable">$header</span> = [<span class="hljs-string">"a"</span>, <span class="hljs-string">"b"</span>, <span class="hljs-string">"c"</span>];
<span class="hljs-variable">$csv</span> = <span class="hljs-keyword">new</span> ExportCsv;
<span class="hljs-variable">$csv</span>-&gt;setData(<span class="hljs-variable">$data</span>);
<span class="hljs-variable">$csv</span>-&gt;setHeader(<span class="hljs-variable">$header</span>);
<span class="hljs-variable">$csv</span>-&gt;setDelimiter(<span class="hljs-string">";"</span>);
<span class="hljs-variable">$csv</span>-&gt;setFileName(<span class="hljs-string">"gremio-file"</span>);
<span class="hljs-variable">$csv</span>-&gt;setOutput(<span class="hljs-string">"D"</span>);
<span class="hljs-variable">$csv</span>-&gt;export();
</code></pre>
<h3><a id="Exemplo_Bsico_para_salvar_arquivo_CSV_em_diretrio_especfico_55"></a>Exemplo Básico para salvar arquivo CSV em diretório específico</h3>
<pre><code class="language-php"><span class="hljs-keyword">use</span> <span class="hljs-title">CsvHilario</span>\<span class="hljs-title">ExportCsv</span>\<span class="hljs-title">ExportCsv</span>;
<span class="hljs-comment">//dados com o conteúdo do arquivo</span>
<span class="hljs-variable">$data</span> = [
    [<span class="hljs-string">"teste1"</span>, <span class="hljs-string">"teste2"</span>, <span class="hljs-string">"teste3"</span>],
    [<span class="hljs-string">"teste4"</span>, <span class="hljs-string">"teste5"</span>, <span class="hljs-string">"teste6"</span>]
];
<span class="hljs-comment">//dados do topo da planilha, títulos das colunas</span>
<span class="hljs-variable">$header</span> = [<span class="hljs-string">"a"</span>, <span class="hljs-string">"b"</span>, <span class="hljs-string">"c"</span>];
<span class="hljs-variable">$csv</span> = <span class="hljs-keyword">new</span> ExportCsv;
<span class="hljs-variable">$csv</span>-&gt;setData(<span class="hljs-variable">$data</span>);
<span class="hljs-variable">$csv</span>-&gt;setHeader(<span class="hljs-variable">$header</span>);
<span class="hljs-variable">$csv</span>-&gt;setDelimiter(<span class="hljs-string">";"</span>);
<span class="hljs-variable">$csv</span>-&gt;setFileName(<span class="hljs-string">"gremio-file"</span>);
<span class="hljs-variable">$csv</span>-&gt;setOutput(<span class="hljs-string">"S"</span>, <span class="hljs-string">"directory/"</span>);
<span class="hljs-variable">$csv</span>-&gt;export();
</code></pre>