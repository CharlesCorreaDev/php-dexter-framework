# Exporta para uma string binária

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gmp-export.php

---

# gmp\_export

(PHP 5 >= 5.6.1, PHP 7, PHP 8)

gmp\_export — Exporta para uma string binária

### Descrição

function **gmp\_export**([GMP](class.gmp.md)|[int](language.types.integer.md)|[string](language.types.string.md) `$num`, [int](language.types.integer.md) `$word_size` = 1, [int](language.types.integer.md) `$flags` = GMP\_MSW\_FIRST | GMP\_NATIVE\_ENDIAN): [string](language.types.string.md)

Exporta um número GMP para uma string binária. Esta função pode lidar com
números arbitrariamente grandes além do alcance do inteiro nativo do PHP,
com tamanho de palavra e ordem de bytes configuráveis, de forma semelhante
à [pack()](function.pack.md).

O sinal do número é ignorado; exportar um número negativo
produz o mesmo resultado que exportar seu valor absoluto.

### Parâmetros

`num`
:   O número GMP a ser exportado.

`word_size`
:   O número de bytes por palavra na saída. O comprimento total da
    string retornada será um múltiplo deste valor.
    Valor padrão: `1`.

`flags`
:   Uma máscara de bits que controla a ordem das palavras e a ordem dos bytes. Ordem das palavras:
    **`GMP_MSW_FIRST`** (palavra mais significativa primeiro,
    padrão) ou **`GMP_LSW_FIRST`** (palavra menos significativa
    primeiro). Ordem dos bytes dentro de cada palavra:
    **`GMP_NATIVE_ENDIAN`** (padrão),
    **`GMP_BIG_ENDIAN`**, ou
    **`GMP_LITTLE_ENDIAN`**.
    Valor padrão:
    **`GMP_MSW_FIRST`** | **`GMP_NATIVE_ENDIAN`**.

### Valor Retornado

Retorna uma string contendo a representação binária do
número GMP. A string está vazia se o número for zero.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função não mais retorna **`false`** em caso de falha. |

### Examples

**Exemplo #1 Exemplo de **gmp\_export()****

```
<?php
$number = gmp_init(16705);
echo gmp_export($number) . "\n";
?>
```

O exemplo acima produzirá:

```
AA
```

### Veja também

- [gmp\_import()](function.gmp-import.md) - Importa de uma string binária

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
