# Obtém o recurso subjacente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/streamwrapper.stream-cast.php

---

# streamWrapper::stream\_cast

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

streamWrapper::stream\_cast — Obtém o recurso subjacente

### Descrição

public function **streamWrapper::stream\_cast**([int](language.types.integer.md) `$cast_as`): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Este método é chamado em resposta a [stream\_select()](function.stream-select.md).

### Parâmetros

`cast_as`
:   Pode ser **`STREAM_CAST_FOR_SELECT`** quando
    [stream\_select()](function.stream-select.md) estiver chamando
    **stream\_cast()** ou
    **`STREAM_CAST_AS_STREAM`** quando
    **stream\_cast()** for chamado para outros usos.

### Valor Retornado

Deve retornar o recurso de fluxo subjacente usado pelo empacotador, ou **`false`**.

### Veja também

- [stream\_select()](function.stream-select.md) - Executa o equivalente à chamada de sistema select() nos arrays de fluxos
  informados com um limite de tempo especificado por segundos e microssegundos

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
