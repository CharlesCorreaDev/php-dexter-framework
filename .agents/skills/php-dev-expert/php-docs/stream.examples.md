# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/stream.examples.php

---

# Examples

## Índice

- [Exemplo de classe registrada como empacotador de fluxo](stream.streamwrapper.example-1.md)

**Exemplo #1 Usando [file\_get\_contents()](function.file-get-contents.md)
para obter dados de fontes múltiplas**

```
<?php
/* Lê o arquivo local do diretório /home/bar */
$arquivolocal = file_get_contents("/home/bar/foo.txt");

/* Idêntico ao exemplo acima, porém nomeando explicitamente o esquema FILE */
$arquivolocal = file_get_contents("file:///home/bar/foo.txt");

/* Lê o arquivo remoto de www.example.com usando HTTP */
$arquivohttp  = file_get_contents("http://www.example.com/foo.txt");

/* Lê o arquivo remoto de www.example.com usando HTTPS */
$arquivohttps = file_get_contents("https://www.example.com/foo.txt");

/* Lê o arquivo remoto de ftp.example.com usando FTP */
$arquivoftp   = file_get_contents("ftp://usuario:senha@ftp.example.com/foo.txt");

/* Lê o arquivo remoto de ftp.example.com usando FTPS */
$arquivoftps  = file_get_contents("ftps://usuario:senha@ftp.example.com/foo.txt");
?>
```

**Exemplo #2 Realizando uma requisição POST para um servidor https**

```
<?php
/* Envia requisição POST para https://secure.example.com/form_action.php
* Inclui elementos de formulário com nomes "foo" e "bar" com valores arbitrários
*/

$sock = fsockopen("ssl://secure.example.com", 443, $errno, $errstr, 30);
if (!$sock) die("$errstr ($errno)\n");

$data = "foo=" . urlencode("Valor para Foo") . "&bar=" . urlencode("Valor para Bar");

fwrite($sock, "POST /form_action.php HTTP/1.0\r\n");
fwrite($sock, "Host: secure.example.com\r\n");
fwrite($sock, "Content-type: application/x-www-form-urlencoded\r\n");
fwrite($sock, "Content-length: " . strlen($data) . "\r\n");
fwrite($sock, "Accept: */*\r\n");
fwrite($sock, "\r\n");
fwrite($sock, $data);

$cabecalhos = "";
while ($str = trim(fgets($sock, 4096)))
$cabecalhos .= "$str\n";

echo "\n";

$corpo = "";
while (!feof($sock))
$corpo .= fgets($sock, 4096);

fclose($sock);
?>
```

**Exemplo #3 Escrevendo dados em um arquivo compactado**

```
<?php
/* Cria um arquivo compactado contendo uma string qualquer
 * O arquivo pode ser lido usando o fluxo compress.zlib ou simplesmente
 * descompactado na linha de comando usando 'gzip -d foo-bar.txt.gz'
 */
$fp = fopen("compress.zlib://foo-bar.txt.gz", "wb");
if (!$fp) die("Não foi possível criar o arquivo.");

fwrite($fp, "Isto é um teste.\n");

fclose($fp);
?>
```

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
