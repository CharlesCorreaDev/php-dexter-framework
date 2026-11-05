# Limpa (apaga) o conteúdo do buffer de saída ativo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ob-clean.php

---

# ob\_clean

(PHP 4 >= 4.2.0, PHP 5, PHP 7, PHP 8)

ob\_clean — Limpa (apaga) o conteúdo do buffer de saída ativo

### Descrição

function **ob\_clean**(): [bool](language.types.boolean.md)

Esta função chama o manipulador de saída
(com a opção **`PHP_OUTPUT_HANDLER_CLEAN`**),
descarta seu valor de retorno
e limpa (apaga) o conteúdo do buffer de saída ativo.

Esta função não desliga o buffer de saída ativo como a função
[ob\_end\_clean()](function.ob-end-clean.md) ou [ob\_get\_clean()](function.ob-get-clean.md) fazem.

**ob\_clean()** falhará
sem um buffer de saída ativo iniciado com a opção
**`PHP_OUTPUT_HANDLER_CLEANABLE`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Se a função falhar ela gera um **`E_NOTICE`**.

### Veja também

- [ob\_start()](function.ob-start.md) - Ativa o buffer de saída
- [ob\_get\_contents()](function.ob-get-contents.md) - Retorna o conteúdo do buffer de saída
- [ob\_end\_clean()](function.ob-end-clean.md) - Limpa (apaga) o conteúdo do buffer de saída ativo e desliga-o
- [ob\_get\_clean()](function.ob-get-clean.md) - Obtém o conteúdo do buffer de saída ativo e desliga-o
- [ob\_flush()](function.ob-flush.md) - Descarrega (envia) o valor de retorno do manipulador de saída ativo

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
