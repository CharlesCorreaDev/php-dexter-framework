# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zlib.examples.php

---

# Examples

Este exemplo abre um arquivo temporário e gera uma string teste
dentro dele, então ela mostra o conteúdo deste arquivo duas vezes.

**Exemplo #1 Pequeno Exemplo da Zlib**

```
<?php

$filename = tempnam('/tmp', 'zlibtest') . '.gz';
echo "<html>\n<head></head>\n<body>\n<pre>\n";
$s = "Only a test, test, test, test, test, test, test, test!\n";

// Abre um arquivo para escrever os dados comprimidos
$zp = gzopen($filename, "w9");

// Escreve o texto no arquivo
gzwrite($zp, $s);

// Fecha o arquivo
gzclose($zp);

// Abre o arquivo
$zp = gzopen($filename, "r");

// Lê três bytes
echo gzread($zp, 3);

// Imprime até o final do arquivo e o fecha
gzpassthru($zp);
gzclose($zp);

echo "\n";

// Abre e imprime o arquivo, uma segunda vez
if (readgzfile($filename) != strlen($s)) {
        echo "Erro com as funções zlib!";
}
unlink($filename);
echo "</pre>\n</body>\n</html>\n";

?>
```

**Exemplo #2 Utilizando a API de compressão/expansão incremental**

```
<?php
// Realiza uma compressão GZIP:
$deflateContext = deflate_init(ZLIB_ENCODING_GZIP);
$compressed = deflate_add($deflateContext, "Data to compress", ZLIB_NO_FLUSH);
$compressed .= deflate_add($deflateContext, ", more data", ZLIB_NO_FLUSH);
$compressed .= deflate_add($deflateContext, ", and even more data!", ZLIB_FINISH);

// Realiza uma expansão GZIP:
$inflateContext = inflate_init(ZLIB_ENCODING_GZIP);
$uncompressed = inflate_add($inflateContext, $compressed, ZLIB_NO_FLUSH);
$uncompressed .= inflate_add($inflateContext, NULL, ZLIB_FINISH);
echo $uncompressed;
?>
```

O exemplo acima produzirá:

```
Data to compress, more data, and even more data!
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
