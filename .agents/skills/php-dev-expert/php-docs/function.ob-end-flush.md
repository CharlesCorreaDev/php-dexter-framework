# Descarrega (envia) o valor de retorno do manipulador de saída ativo
   e desliga o buffer de saída ativo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ob-end-flush.php

---

# ob\_end\_flush

(PHP 4, PHP 5, PHP 7, PHP 8)

ob\_end\_flush — 
Descarrega (envia) o valor de retorno do manipulador de saída ativo
e desliga o buffer de saída ativo

### Descrição

function **ob\_end\_flush**(): [bool](language.types.boolean.md)

Esta função chama o manipulador de saída
(com a opção **`PHP_OUTPUT_HANDLER_FINAL`**),
descarrega (envia) seu valor de retorno,
descarta o conteúdo do buffer de saída ativo
e o desliga.

**ob\_end\_flush()** irá falhar
sem um buffer de saída ativo iniciado com a opção
**`PHP_OUTPUT_HANDLER_REMOVABLE`**.

**ob\_end\_flush()** irá descarregar (enviar)
e retornar o valor do manipulador de saída
mesmo se o buffer de saída ativo tiver iniciado sem a opção
**`PHP_OUTPUT_HANDLER_FLUSHABLE`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Se a função falhar, ela gera um **`E_NOTICE`**.

### Examples

**Exemplo #1 Exemplo de **ob\_end\_flush()****

O exemplo a seguir mostra uma maneira fácil de descarregar e terminar todos
os buffers de saída:

```
<?php
  while (@ob_end_flush());
?>
```

### Veja também

- [ob\_start()](function.ob-start.md) - Ativa o buffer de saída
- [ob\_get\_contents()](function.ob-get-contents.md) - Retorna o conteúdo do buffer de saída
- [ob\_flush()](function.ob-flush.md) - Descarrega (envia) o valor de retorno do manipulador de saída ativo
- [ob\_get\_flush()](function.ob-get-flush.md) - Descarrega (envia) o valor de retorno do manipulador de saída ativo,
  retorna o conteúdo do buffer de saída ativo e desliga-o
- [ob\_end\_clean()](function.ob-end-clean.md) - Limpa (apaga) o conteúdo do buffer de saída ativo e desliga-o

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
