# Obtém as instâncias do iterador registradas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/multipleiterator.current.php

---

# MultipleIterator::current

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

MultipleIterator::current — Obtém as instâncias do iterador registradas

### Descrição

public function **MultipleIterator::current**(): [array](language.types.array.md)

Obtém o resultado current() das instâncias do iterador registradas.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [array](language.types.array.md) contendo os valores atuais de cada iterador anexado.

### Erros/Exceções

Uma [RuntimeException](class.runtimeexception.md) é lançada se o iterador for inválido (a partir do PHP 8.1.0),
ou se o modo **`MIT_NEED_ALL`** estiver definido e pelo menos um iterador anexado
não for válido. Ou uma **IllegalValueException** se uma chave for **`null`** e
**`MIT_KEYS_ASSOC`** estiver definido.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | Uma [RuntimeException](class.runtimeexception.md) agora é lançada se **MultipleIterator::current()** for chamado em um iterador inválido. Anteriormente, **`false`** era retornado. |

### Veja também

- [MultipleIterator::valid()](multipleiterator.valid.md) - Verifica a validade dos subiteradores

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
