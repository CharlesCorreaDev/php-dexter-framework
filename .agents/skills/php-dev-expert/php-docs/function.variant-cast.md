# Converter uma variante em um novo objeto variante de outro tipo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.variant-cast.php

---

# variant\_cast

(PHP 5, PHP 7, PHP 8)

variant\_cast — Converter uma variante em um novo objeto variante de outro tipo

### Descrição

function **variant\_cast**([variant](class.variant.md) `$variant`, [int](language.types.integer.md) `$type`): [variant](class.variant.md)

Esta função faz uma cópia de `variant` e então
executa uma operação de conversão de variante para forçar a cópia a ter o tipo
fornecido por `type`.

Esta função encapsula VariantChangeType() na biblioteca COM; consulte o MSDN
para obter mais informações.

### Parâmetros

`variant`
:   A variante.

`type`
:   `type` deve ser uma das constantes
    **`VT_*`**.

### Valor Retornado

Retorna uma variante do tipo informado em `type`.

### Veja também

- [variant\_set\_type()](function.variant-set-type.md) - Converte uma variante em outro tipo "in loco"

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
