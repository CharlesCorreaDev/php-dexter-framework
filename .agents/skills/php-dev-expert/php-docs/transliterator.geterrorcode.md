# Obtém o último código de erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/transliterator.geterrorcode.php

---

# Transliterator::getErrorCode

# transliterator\_get\_error\_code

(PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0)

Transliterator::getErrorCode -- transliterator\_get\_error\_code — Obtém o último código de erro

### Descrição

Estilo orientado a objetos

public function **Transliterator::getErrorCode**(): [int](language.types.integer.md)

Estilo procedural

function **transliterator\_get\_error\_code**([Transliterator](class.transliterator.md) `$transliterator`): [int](language.types.integer.md)

Obtém o último código de erro para este transliterador.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`transliterator`

### Valor Retornado

O código de erro em caso de sucesso,
ou **`false`** se nenhum existir ou em caso de falha.

### Veja também

- [Transliterator::getErrorMessage()](transliterator.geterrormessage.md) - Obtém a última mensagem de erro
- [Transliterator::listIDs()](transliterator.listids.md) - Obtém IDs de transliteradores

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
