# Descarrega a saída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/streamwrapper.stream-flush.php

---

# streamWrapper::stream\_flush

(PHP 4 >= 4.3.2, PHP 5, PHP 7, PHP 8)

streamWrapper::stream\_flush — Descarrega a saída

### Descrição

public function **streamWrapper::stream\_flush**(): [bool](language.types.boolean.md)

Este método é chamado em resposta a [fflush()](function.fflush.md) e quando o fluxo está sendo fechado enquanto dados não descarregados foram anteriormente escritos nele.

Se houver dados em cache no fluxo porém ainda não armazenados,
este é o momento de armazená-los.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Deve retornar **`true`** se os dados em cache foram armazenados com sucesso (ou
se não havia dados para armazenar), ou **`false`** se os dados não puderam
ser armazenados.

### Notas

> **Nota**:
>
> Se não implementado, **`false`** é assumido como valor de retorno.

### Veja também

- [fflush()](function.fflush.md) - Força a liberação do buffer para um arquivo

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
