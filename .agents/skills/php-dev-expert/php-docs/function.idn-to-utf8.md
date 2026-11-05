# Converte nome de domínio de ASCII IDNA para Unicode

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.idn-to-utf8.php

---

# idn\_to\_utf8

(PHP 5 >= 5.3.0, PHP 7, PHP 8, PECL intl >= 1.0.2, PECL idn >= 0.1)

idn\_to\_utf8 — Converte nome de domínio de ASCII IDNA para Unicode

### Descrição

Estilo procedural

function **idn\_to\_utf8**(  
    [string](language.types.string.md) `$domain`,  
    [int](language.types.integer.md) `$flags` = **`IDNA_DEFAULT`**,  
    [int](language.types.integer.md) `$variant` = **`INTL_IDNA_VARIANT_UTS46`**,  
    [array](language.types.array.md) `&$idna_info` = **`null`**  
): [string](language.types.string.md)|[false](language.types.singleton.md)

Esta função converte um nome de domínio Unicode a partir de um formato compatível com ASCII IDNA para Unicode puro, codificado em UTF-8.

### Parâmetros

`domain`
:   Domínio em formato compatível com ASCII IDNA a ser convertido.

`flags`
:   Opções de conversão - combinação de constantes IDNA\_\*
    (exceto constantes IDNA\_ERROR\_\*).

`variant`
:   Pode ser **`INTL_IDNA_VARIANT_2003`** (descontinuada a partir do PHP 7.2.0) para IDNA 2003 ou
    **`INTL_IDNA_VARIANT_UTS46`** (disponível apenas a partir da ICU 4.6) para UTS #46.

`idna_info`
:   Este parâmetro pode ser usado somente se
    **`INTL_IDNA_VARIANT_UTS46`** foi usado no parâmetro
    `variant`. Neste caso, será preenchido com um
    array com as chaves `'result'`, o possível resultado ilegal
    da transformação,
    `'isTransitionalDifferent'`, um booleano indicando
    se o uso de mecanismos transicionais da UTS #46 mudou
    ou teria mudado o resultado e `'errors'`,
    que é um [int](language.types.integer.md) representando um conjunto de bits das constantes
    de erro IDNA\_ERROR\_\*.

### Valor Retornado

O nome de domínio em Unicode, codificado em UTF-8, ou **`false`** em caso de falha

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Agora lança um [ValueError](class.valueerror.md) se o parâmetro `domain` for vazio. |
| 8.4.0 | Agora lança um [ValueError](class.valueerror.md) se o parâmetro `variant` não for **`INTL_IDNA_VARIANT_UTS46`**. |
| 7.4.0 | O valor padrão de `variant` agora é **`INTL_IDNA_VARIANT_UTS46`** ao invés da **`INTL_IDNA_VARIANT_2003`** que foi descontinuada. |
| 7.2.0 | **`INTL_IDNA_VARIANT_2003`** foi descontinuada; use **`INTL_IDNA_VARIANT_UTS46`** em seu lugar. |

### Examples

**Exemplo #1 Exemplo de **idn\_to\_utf8()****

```
<?php

echo idn_to_utf8('xn--tst-qla.de');

?>
```

O exemplo acima produzirá:

```
täst.de
```

### Veja também

- [idn\_to\_ascii()](function.idn-to-ascii.md) - Converte nome de domínio para a forma ASCII IDNA

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
