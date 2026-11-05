# Informa se a entrada está compactada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/pharfileinfo.iscompressed.php

---

# PharFileInfo::isCompressed

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0)

PharFileInfo::isCompressed — Informa se a entrada está compactada

### Descrição

public function **PharFileInfo::isCompressed**([?](language.types.null.md)[int](language.types.integer.md) `$compression` = **`null`**): [bool](language.types.boolean.md)

Isso retorna se um arquivo está compactado dentro de um arquivo Phar
com Gzip ou Bzip2.

### Parâmetros

`compression`
:   Um dos seguintes: **`Phar::GZ`** ou **`Phar::BZ2`**,
    o padrão é qualquer compactação.

### Valor Retornado

**`true`** se o arquivo estiver compactado dentro do arquivo Phar, **`false`** caso contrário.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | `compression` agora é anulável. |

### Examples

**Exemplo #1 Um exemplo de **PharFileInfo::isCompressed()****

```
<?php
try {
    $p = new Phar('/caminho/para/meu.phar', 0, 'meu.phar');
    $p['meuarquivo.txt'] = 'olá';
    $p['meuarquivo2.txt'] = 'olá';
    $p['meuarquivo2.txt']->setCompressedGZ();
    $file = $p['meuarquivo.txt'];
    $file2 = $p['meuarquivo2.txt'];
    var_dump($file->isCompressed());
    var_dump($file2->isCompressed());
} catch (Exception $e) {
    echo 'Falha ao criar/modificar meu.phar: ', $e;
}
?>
```

O exemplo acima produzirá:

```
bool(false)
bool(true)
```

### Veja também

- [PharFileInfo::getCompressedSize()](pharfileinfo.getcompressedsize.md) - Retorna o tamanho real do arquivo (com compactação) dentro do arquivo Phar
- [PharFileInfo::decompress()](pharfileinfo.decompress.md) - Descompacta a entrada Phar atual dentro do phar
- [PharFileInfo::compress()](pharfileinfo.compress.md) - Compacta a entrada Phar atual com zlib ou bzip2
- [Phar::decompress()](phar.decompress.md) - Descompacta todo o arquivo Phar
- [Phar::compress()](phar.compress.md) - Compacta todo o arquivo Phar usando compactação Gzip ou Bzip2
- [Phar::canCompress()](phar.cancompress.md) - Retorna se a extensão phar suporta compactação usando zlib ou bzip2
- [Phar::isCompressed()](phar.iscompressed.md) - Retorna Phar::GZ ou PHAR::BZ2 se todo o arquivo phar estiver compactado (.tar.gz/tar.bz e assim por diante)
- [Phar::getSupportedCompression()](phar.getsupportedcompression.md) - Retorna um array de algoritmos de compactação suportados
- [Phar::decompressFiles()](phar.decompressfiles.md) - Descompacta todos os arquivos no arquivo Phar atual
- [Phar::compressFiles()](phar.compressfiles.md) - Compacta todos os arquivos no arquivo Phar atual

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
