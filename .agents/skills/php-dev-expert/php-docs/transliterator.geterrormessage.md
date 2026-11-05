# Obtém a última mensagem de erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/transliterator.geterrormessage.php

---

# Transliterator::getErrorMessage

# transliterator\_get\_error\_message

(PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0)

Transliterator::getErrorMessage -- transliterator\_get\_error\_message — Obtém a última mensagem de erro

### Descrição

Estilo orientado a objetos

public function **Transliterator::getErrorMessage**(): [string](language.types.string.md)

Estilo procedural

function **transliterator\_get\_error\_message**([Transliterator](class.transliterator.md) `$transliterator`): [string](language.types.string.md)

Obtém a última mensagem de erro para este transliterador.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`transliterator`

### Valor Retornado

A mensagem de erro em caso de sucesso,
ou **`false`** se nenhuma existir ou em caso de falha.

### Veja também

- [Transliterator::getErrorCode()](transliterator.geterrorcode.md) - Obtém o último código de erro
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
