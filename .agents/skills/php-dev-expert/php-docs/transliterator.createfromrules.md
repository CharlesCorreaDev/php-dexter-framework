# Cria um transliterador a partir de regras

> **Fonte / Source:** https://www.php.net/manual/pt_BR/transliterator.createfromrules.php

---

# Transliterator::createFromRules

# transliterator\_create\_from\_rules

(PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0)

Transliterator::createFromRules -- transliterator\_create\_from\_rules — Cria um transliterador a partir de regras

### Descrição

Estilo orientado a objetos

public static function **Transliterator::createFromRules**([string](language.types.string.md) `$rules`, [int](language.types.integer.md) `$direction` = **`Transliterator::FORWARD`**): [?](language.types.null.md)[Transliterator](class.transliterator.md)

Estilo procedural

function **transliterator\_create\_from\_rules**([string](language.types.string.md) `$rules`, [int](language.types.integer.md) `$direction` = **`Transliterator::FORWARD`**): [?](language.types.null.md)[Transliterator](class.transliterator.md)

Cria um transliterador a partir de regras.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`rules`
:   As regras como definidas na Sintaxe de Regras de Transformação da UTS #35: LDML Unicode.

`direction`
:   A direção, o padrão é
    [Transliterator::FORWARD](class.transliterator.md#transliterator.constants.forward).
    Também pode ser definido para
    [Transliterator::REVERSE](class.transliterator.md#transliterator.constants.reverse).

### Valor Retornado

Retorna um objeto [Transliterator](class.transliterator.md) em caso de sucesso,
ou **`null`** em caso de falha.

### Veja também

- [Transliterator::getErrorMessage()](transliterator.geterrormessage.md) - Obtém a última mensagem de erro
- [Transliterator::create()](transliterator.create.md) - Cria um transliterador

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
