# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/rar.examples.php

---

# Examples

Veja também os exemplos do empacotador [`rar://`](wrappers.rar.md).

**Exemplo #1 Descompressão instantânea**

```
<?php

if (!array_key_exists("i", $_GET) || !is_numeric($_GET["i"]))
    die("Índice não especificado ou não numérico");
$index = (int) $_GET["i"];

$arch = RarArchive::open("example.rar");
if ($arch === FALSE)
    die("Cannot open example.rar");

$entries = $arch->getEntries();
if ($entries === FALSE)
    die("Cannot retrieve entries");

if (!array_key_exists($index, $entries))
    die("No such index: $index");

$orfilename = $entries[$index]->getName(); //UTF-8 encoded

$filesize = $entries[$index]->getUnpackedSize();

/* HTTP_IF_MODIFIED_SINCE pode ser verificado aqui e comparado com
 * $entries[$index]->getFileTime(). Também pode ser enviado
 * um cabeçalho "Last modified"*/

$fp = $entries[$index]->getStream();
if ($fp === FALSE)
    die("Não foi possível abrir arquivo com índice $index dentro do arquivo.");

$arch->close(); // não é mais necessário; fluxo é independente

function detectUserAgent() {
    if (!array_key_exists('HTTP_USER_AGENT', $_SERVER))
        return "Other";

    $uas = $_SERVER['HTTP_USER_AGENT'];
    if (preg_match("@Opera/@", $uas))
        return "Opera";
    if (preg_match("@Firefox/@", $uas))
        return "Firefox";
    if (preg_match("@Chrome/@", $uas))
        return "Chrome";
    if (preg_match("@MSIE ([0-9.]+);@", $uas, $matches)) {
        if (((float) $matches[1]) >= 7.0)
            return "IE";
    }

    return "Outro";
}

/*
 * Temos 3 opções:
 * - Para FF e Opera, que suportam RFC 2231, use esse formato.
 * - Para IE e Chrome, use attwithfnrawpctenclong
 *   (http://greenbytes.de/tech/tc2231/#attwithfnrawpctenclong)
 * - Para os demais, converta para ISO-8859-1, se possível
 */
$formatRFC2231 = 'Content-Disposition: attachment; filename*=UTF-8\'\'%s';
$formatDef = 'Content-Disposition: attachment; filename="%s"';

switch (detectUserAgent()) {
    case "Opera":
    case "Firefox":
        $orfilename = rawurlencode($orfilename);
        $format = $formatRFC2231;
        break;

    case "IE":
    case "Chrome":
        $orfilename = rawurlencode($orfilename);
        $format = $formatDef;
        break;
    default:
        if (function_exists('iconv'))
            $orfilename =
                @iconv("UTF-8", "ISO-8859-1//TRANSLIT", $orfilename);
        $format = $formatDef;
}

header(sprintf($format, $orfilename));
// não é possível enviar mensagens de erro a partir de agora (cabeçalhos já enviados)

// substitua pelo tipo de conteúdo real, talvez inferindo da extensão do arquivo
$contentType = "application/octet-stream";
header("Content-Type: $contentType");

header("Content-Transfer-Encoding: binary");

header("Content-Length: $filesize");

if ($_SERVER['REQUEST_METHOD'] == "HEAD")
    die();

while (!feof($fp)) {
    $s = @fread($fp, 8192);
    if ($s === false)
        break; // inútil enviar mensagens de erro

    echo $s;
}
?>
```

Este exemplo abre um arquivo RAR e apresenta o arquivo solicitado dentro do arquivo RAR para download no cliente.

**Exemplo #2 Exemplo de extração de sistema de arquivos com extensão RAR**

```
<?php

$rar_file = rar_open('example.rar') or die("Não foi possível abrir arquivo Rar");

$entries = rar_list($rar_file);

foreach ($entries as $entry) {
    echo 'Filename: ' . $entry->getName() . "\n";
    echo 'Packed size: ' . $entry->getPackedSize() . "\n";
    echo 'Unpacked size: ' . $entry->getUnpackedSize() . "\n";

    $entry->extract('/dir/extract/to/');
}

rar_close($rar_file);

?>
```

Este exemplo abre um arquivo RAR e extrai cada entrada para o
diretório especificado.

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
