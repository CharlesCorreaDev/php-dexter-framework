# Obtém as instâncias do iterador registradas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/multipleiterator.key.php

---

# MultipleIterator::key

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

MultipleIterator::key — Obtém as instâncias do iterador registradas

### Descrição

public function **MultipleIterator::key**(): [array](language.types.array.md)

Obtém o resultado da função key() das instâncias do iterador registradas.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [array](language.types.array.md) de todas as instâncias do iterador registradas.

### Erros/Exceções

Um [RuntimeException](class.runtimeexception.md) é lançado se o iterador for inválido (a partir do PHP 8.1.0), ou
o modo **`MIT_NEED_ALL`** estiver definido e pelo menos um iterador anexado não for válido.

Chamando este método de [foreach](control-structures.foreach.md)
aciona o aviso "Illegal type returned".

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Um [RuntimeException](class.runtimeexception.md) agora é lançado se **MultipleIterator::key()** for chamado em um iterador inválido. Anteriormente, retornava **`false`**. |

### Veja também

- [MultipleIterator::current()](multipleiterator.current.md) - Obtém as instâncias do iterador registradas

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
