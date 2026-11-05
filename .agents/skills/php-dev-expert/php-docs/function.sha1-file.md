# Calcula a hash sha1 de um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sha1-file.php

---

# sha1\_file

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

sha1\_file — Calcula a hash sha1 de um arquivo

### Descrição

function **sha1\_file**([string](language.types.string.md) `$filename`, [bool](language.types.boolean.md) `$binary` = **`false`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Calcula a hash sha1 do arquivo especificado por
`filename` usando o
[» US Secure Hash Algorithm 1](https://datatracker.ietf.org/doc/html/rfc3174),
e retorna esta hash. A hash é um número hexadecimal de 40 caracteres.

### Parâmetros

`filename`
:   O nome do arquivo de onde a hash será obtida.

`binary`
:   Quando **`true`**, retorna a hash no formato binário bruto com um tamanho de
    20 caracteres.

### Valor Retornado

Retorna uma string em caso de sucesso, **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **sha1\_file()****

```
<?php
foreach(glob('/examples/*.xml') as $ent)
{
    if (is_dir($ent)) {
        continue;
    }

    echo $ent . ' (SHA1: ' . sha1_file($ent) . ')', PHP_EOL;
}
?>
```

### Veja também

- [hash\_file()](function.hash-file.md) - Gera um valor hash usando o conteúdo de um arquivo fornecido
- [hash\_init()](function.hash-init.md) - Inicializa um contexto de hash incremental
- [sha1()](function.sha1.md) - Calcula o hash SHA1 de uma string

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
