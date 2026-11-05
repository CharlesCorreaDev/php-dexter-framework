# Obtém um manipulador de arquivo para a entrada definida pelo seu nome (somente leitura)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.getstream.php

---

# ZipArchive::getStream

(PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.1.0)

ZipArchive::getStream — Obtém um manipulador de arquivo para a entrada definida pelo seu nome (somente leitura)

### Descrição

public function **ZipArchive::getStream**([string](language.types.string.md) `$name`): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Obtém um manipulador de arquivo para a entrada definida pelo seu nome. Por enquanto, suporta apenas
operações de leitura.

### Parâmetros

`name`
:   O nome da entrada a ser usado.

### Valor Retornado

Retorna um ponteiro de arquivo (recurso) em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Obter o conteúdo da entrada com [fread()](function.fread.md) e armazená-lo**

```
<?php
$contents = '';
$z = new ZipArchive();
if ($z->open('test.zip')) {
    $fp = $z->getStream('test');
    if(!$fp) exit("falha\n");

    while (!feof($fp)) {
        $contents .= fread($fp, 2);
    }

    fclose($fp);
    file_put_contents('t',$contents);
    echo "pronto.\n";
}
?>
```

**Exemplo #2 Mesmo que o exemplo anterior, mas com [fopen()](function.fopen.md) e o empacotador de
fluxo zip**

```
<?php
$contents = '';
$fp = fopen('zip://' . dirname(__FILE__) . '/test.zip#test', 'r');
if (!$fp) {
    exit("não foi possível abrir\n");
}
while (!feof($fp)) {
    $contents .= fread($fp, 2);
}
echo "$contents\n";
fclose($fp);
echo "pronto.\n";
?>
```

**Exemplo #3 Empacotador de fluxo e imagem, pode ser usado também com a
função xml**

```
<?php
$im = imagecreatefromgif('zip://' . dirname(__FILE__) . '/test_im.zip#pear_item.gif');
imagepng($im, 'a.png');
?>
```

### Veja também

- [ZipArchive::getStreamIndex()](ziparchive.getstreamindex.md) - Obtém um manipulador de arquivo para a entrada definida pelo seu índice (somente leitura)
- [ZipArchive::getStreamName()](ziparchive.getstreamname.md) - Obtém um manipulador de arquivo para a entrada definida pelo seu nome (somente leitura)
- [Fluxos de Compressão](wrappers.compression.md)

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
