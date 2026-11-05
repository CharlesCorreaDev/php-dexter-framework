# Cria um transliterador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/transliterator.create.php

---

# Transliterator::create

# transliterator\_create

(PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0)

Transliterator::create -- transliterator\_create — Cria um transliterador

### Descrição

Estilo orientado a objetos

public static function **Transliterator::create**([string](language.types.string.md) `$id`, [int](language.types.integer.md) `$direction` = **`Transliterator::FORWARD`**): [?](language.types.null.md)[Transliterator](class.transliterator.md)

Estilo procedural

function **transliterator\_create**([string](language.types.string.md) `$id`, [int](language.types.integer.md) `$direction` = **`Transliterator::FORWARD`**): [?](language.types.null.md)[Transliterator](class.transliterator.md)

Abre um Transliterador por ID.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`id`
:   O ID. Uma lista de todos os IDs de transliteradores registrador pode ser obtido usando-se
    [Transliterator::listIDs()](transliterator.listids.md).

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
- [Transliterator::\_\_construct()](transliterator.construct.md) - Construtor privado para proibir instanciação

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
