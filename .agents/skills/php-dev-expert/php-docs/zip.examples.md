# Examples

> **Fonte / Source:** https://www.php.net/manual/pt_BR/zip.examples.php

---

# Examples

**Exemplo #1 Criando um arquivo Zip**

```
<?php

$zip = new ZipArchive();
$filename = "./test112.zip";

if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
    exit("não foi possível abrir <$filename>\n");
}

$zip->addFromString("testfilephp.txt" . time(), "#1 Esta é uma string de teste adicionada como testfilephp.txt.\n");
$zip->addFromString("testfilephp2.txt" . time(), "#2 Esta é uma string de teste adicionada como testfilephp2.txt.\n");
$zip->addFile($thisdir . "/too.php","/testfromfile.php");
echo "número de arquivos: " . $zip->numFiles . "\n";
echo "status:" . $zip->status . "\n";
$zip->close();
?>
```

**Exemplo #2 Exibindo detalhes dos arquivos e listando-os**

```
<?php
$za = new ZipArchive();

$za->open('test_with_comment.zip');
print_r($za);
var_dump($za);
echo "número de arquivos: " . $za->numFiles . "\n";
echo "status: " . $za->status  . "\n";
echo "status sistema: " . $za->statusSys . "\n";
echo "arquivo: " . $za->filename . "\n";
echo "comentário: " . $za->comment . "\n";

for ($i=0; $i<$za->numFiles;$i++) {
    echo "índice: $i\n";
    print_r($za->statIndex($i));
}
echo "número de arquivos:" . $za->numFiles . "\n";
?>
```

**Exemplo #3 Empacotador de fluxo zip, lendo metainformações do OpenOffice**

```
<?php
$reader = new XMLReader();

$reader->open('zip://' . dirname(__FILE__) . '/test.odt#meta.xml');
$odt_meta = array();
while ($reader->read()) {
    if ($reader->nodeType == XMLREADER::ELEMENT) {
        $elm = $reader->name;
    } else {
        if ($reader->nodeType == XMLREADER::END_ELEMENT && $reader->name == 'office:meta') {
            break;
        }
        if (!trim($reader->value)) {
            continue;
        }
        $odt_meta[$elm] = $reader->value;
    }
}
print_r($odt_meta);
?>
```

Este exemplo usa a velha API (PHP 4), ela abre um arquivo ZIP,
ler cada arquivo do arquivo e imprime o conteúdo deles.
O arquivo test2.zip usado neste exemplo
é um arquivo de teste do fonte da distribuição
ZZIPlib.

**Exemplo #4 Exemplo de uso**

```
<?php

$zip = zip_open("/tmp/test2.zip");

if ($zip) {
    while ($zip_entry = zip_read($zip)) {
        echo "Nome:                    " . zip_entry_name($zip_entry) . "\n";
        echo "Tamanho real do arquivo: " . zip_entry_filesize($zip_entry) . "\n";
        echo "Tamanho compactado:      " . zip_entry_compressedsize($zip_entry) . "\n";
        echo "Método de compactação:   " . zip_entry_compressionmethod($zip_entry) . "\n";

        if (zip_entry_open($zip, $zip_entry, "r")) {
            echo "Conteúdo do arquivo:\n";
            $buf = zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));
            echo "$buf\n";

            zip_entry_close($zip_entry);
        }
        echo "\n";

    }

    zip_close($zip);

}
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
