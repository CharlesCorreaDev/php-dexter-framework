# Importa de uma string binária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-import.php

---

# gmp\_import

(PHP 5 >= 5.6.1, PHP 7, PHP 8)

gmp\_import — Importa de uma string binária

### Descrição

function **gmp\_import**([string](language.types.string.md) `$data`, [int](language.types.integer.md) `$word_size` = 1, [int](language.types.integer.md) `$flags` = GMP\_MSW\_FIRST | GMP\_NATIVE\_ENDIAN): [GMP](class.gmp.md)

Importa um número GMP de uma string binária.

### Parâmetros

`data`
:   A string binária que está sendo importada

`word_size`
:   O valor padrão é 1. O número de bytes em cada bloco de dados binários. Isso é usado principalmente em conjunto com o parâmetro options.

`flags`
:   O valor padrão é **`GMP_MSW_FIRST`** | **`GMP_NATIVE_ENDIAN`**.

### Valor Retornado

Retorna um número GMP.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função não mais retorna **`false`** em caso de falha. |

### Examples

**Exemplo #1 Exemplo de **gmp\_import()****

```
<?php
$number = gmp_import("\0");
echo gmp_strval($number) . "\n";

$number = gmp_import("\0\1\2");
echo gmp_strval($number) . "\n";
?>
```

O exemplo acima produzirá:

```
0
258
```

### Veja também

- [gmp\_export()](function.gmp-export.md) - Exporta para uma string binária

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
