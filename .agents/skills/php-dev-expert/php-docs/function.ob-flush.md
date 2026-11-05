# Descarrega (envia) o valor de retorno do manipulador de saída ativo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ob-flush.php

---

# ob\_flush

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

ob\_flush — Descarrega (envia) o valor de retorno do manipulador de saída ativo

### Descrição

function **ob\_flush**(): [bool](language.types.boolean.md)

Esta função chama o manipulador de saída
(com a opção **`PHP_OUTPUT_HANDLER_FLUSH`**),
descarrega (envia) seu valor de retorno
e descarta o conteúdo do buffer de saída ativo.

Esta função não desliga o buffer de saída ativo como as funções
[ob\_end\_flush()](function.ob-end-flush.md) ou [ob\_get\_flush()](function.ob-get-flush.md) fazem.

**ob\_flush()** falhará
sem um buffer de saída ativo iniciado com a opção
**`PHP_OUTPUT_HANDLER_FLUSHABLE`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Se a função falhar ela gera um **`E_NOTICE`**.

### Veja também

- [ob\_start()](function.ob-start.md) - Ativa o buffer de saída
- [ob\_get\_contents()](function.ob-get-contents.md) - Retorna o conteúdo do buffer de saída
- [ob\_end\_flush()](function.ob-end-flush.md) - Descarrega (envia) o valor de retorno do manipulador de saída ativo
  e desliga o buffer de saída ativo
- [ob\_get\_flush()](function.ob-get-flush.md) - Descarrega (envia) o valor de retorno do manipulador de saída ativo,
  retorna o conteúdo do buffer de saída ativo e desliga-o
- [ob\_clean()](function.ob-clean.md) - Limpa (apaga) o conteúdo do buffer de saída ativo

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
