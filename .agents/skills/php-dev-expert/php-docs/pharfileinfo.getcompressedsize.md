# Retorna o tamanho real do arquivo (com compactação) dentro do arquivo Phar

> **Fonte / Source:** https://www.php.net/manual/pt_BR/pharfileinfo.getcompressedsize.php

---

# PharFileInfo::getCompressedSize

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0)

PharFileInfo::getCompressedSize — Retorna o tamanho real do arquivo (com compactação) dentro do arquivo Phar

### Descrição

public function **PharFileInfo::getCompressedSize**(): [int](language.types.integer.md)

Isso retorna o tamanho do arquivo dentro do arquivo Phar. Arquivos descompactados retornarão
o mesmo valor para getCompressedSize que retornariam com [filesize()](function.filesize.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O tamanho em bytes do arquivo dentro do arquivo Phar no disco.

### Examples

**Exemplo #1 Um exemplo de **PharFileInfo::getCompressedSize()****

```
<?php
try {
    $p = new Phar('/caminho/para/meu.phar', 0, 'meu.phar');
    $p['meuarquivo.txt'] = 'olá';
    $file = $p['meuarquivo.txt'];
    echo $file->getCompressedSize();
} catch (Exception $e) {
    echo 'As operações de gravação falharam em meu.phar: ', $e;
}
?>
```

O exemplo acima produzirá:

```
4
```

### Veja também

- [PharFileInfo::isCompressed()](pharfileinfo.iscompressed.md) - Informa se a entrada está compactada
- [PharFileInfo::decompress()](pharfileinfo.decompress.md) - Descompacta a entrada Phar atual dentro do phar
- [PharFileInfo::compress()](pharfileinfo.compress.md) - Compacta a entrada Phar atual com zlib ou bzip2
- [Phar::canCompress()](phar.cancompress.md) - Retorna se a extensão phar suporta compactação usando zlib ou bzip2
- [Phar::isCompressed()](phar.iscompressed.md) - Retorna Phar::GZ ou PHAR::BZ2 se todo o arquivo phar estiver compactado (.tar.gz/tar.bz e assim por diante)
- [Phar::compress()](phar.compress.md) - Compacta todo o arquivo Phar usando compactação Gzip ou Bzip2
- [Phar::decompress()](phar.decompress.md) - Descompacta todo o arquivo Phar
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
