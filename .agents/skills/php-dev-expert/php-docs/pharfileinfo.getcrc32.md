# Retorna o código CRC32 ou lança uma exceção se o CRC não tiver sido verificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/pharfileinfo.getcrc32.php

---

# PharFileInfo::getCRC32

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL phar >= 1.0.0)

PharFileInfo::getCRC32 — Retorna o código CRC32 ou lança uma exceção se o CRC não tiver sido verificado

### Descrição

public function **PharFileInfo::getCRC32**(): [int](language.types.integer.md)

Isso retorna a soma de verificação [crc32()](function.crc32.md) do arquivo
dentro do arquivo Phar.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

A soma de verificação [crc32()](function.crc32.md) do arquivo dentro do arquivo Phar.

### Erros/Exceções

Lança [BadMethodCallException](class.badmethodcallexception.md) se o arquivo
ainda não teve seu CRC32 verificado. Isso deveria ser impossível com o uso normal, pois
o CRC é verificado ao abrir o arquivo para leitura ou escrita.

### Examples

**Exemplo #1 Um exemplo de **PharFileInfo::getCRC32()****

```
<?php
try {
    $p = new Phar('/caminho/para/meu.phar', 0, 'meu.phar');
    $p['meuarquivo.txt'] = 'olá';
    $file = $p['meuarquivo.txt'];
    echo $file->getCRC32();
} catch (Exception $e) {
    echo 'As operações de gravação em meu.phar falharam: ', $e;
}
?>
```

O exemplo acima produzirá:

```
1120542206
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
