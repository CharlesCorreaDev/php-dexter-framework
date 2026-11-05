# Cria um transliterador inverso

> **Fonte / Source:** https://www.php.net/manual/pt_BR/transliterator.createinverse.php

---

# Transliterator::createInverse

# transliterator\_create\_inverse

(PHP 5 >= 5.4.0, PHP 7, PHP 8, PECL intl >= 2.0.0)

Transliterator::createInverse -- transliterator\_create\_inverse — Cria um transliterador inverso

### Descrição

Estilo orientado a objetos

public function **Transliterator::createInverse**(): [?](language.types.null.md)[Transliterator](class.transliterator.md)

Estilo procedural

function **transliterator\_create\_inverse**([Transliterator](class.transliterator.md) `$transliterator`): [?](language.types.null.md)[Transliterator](class.transliterator.md)

Abre o transliterador inverso.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um objeto [Transliterator](class.transliterator.md) em caso de sucesso
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
