# Calcula o hash md5 de um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.md5-file.php

---

# md5\_file

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

md5\_file — Calcula o hash md5 de um arquivo

### Descrição

function **md5\_file**([string](language.types.string.md) `$filename`, [bool](language.types.boolean.md) `$binary` = **`false`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Calcula o hash MD5 do arquivo especificado pelo
parâmetro `filename` usando o
[» Algoritmo de Sintetização de Mensagem da
RSA Data Security, Inc.](https://datatracker.ietf.org/doc/html/rfc1321), e retorna esse hash.
O hash é um número hexadecimal de 32 caracteres.

### Parâmetros

`filename`
:   O nome do arquivo.

`binary`
:   Quando **`true`**, retorna a sintetização MD5 em formato binário bruto com um comprimento
    de 16 bytes.

### Valor Retornado

Retorna uma string em caso de sucesso, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de uso de **md5\_file()****

```
<?php
$file = '/examples/book.xml';

echo 'Hash MD5 do arquivo ' . $file . ': ' . md5_file($file);
?>
```

### Veja também

- [hash\_file()](function.hash-file.md) - Gera um valor hash usando o conteúdo de um arquivo fornecido
- [hash\_init()](function.hash-init.md) - Inicializa um contexto de hash incremental
- [md5()](function.md5.md) - Calcula o hash md5 de uma string

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
