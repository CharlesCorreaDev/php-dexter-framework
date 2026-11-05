# Limpa (apaga) o conteúdo do buffer de saída ativo e desliga-o

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ob-end-clean.php

---

# ob\_end\_clean

(PHP 4, PHP 5, PHP 7, PHP 8)

ob\_end\_clean — Limpa (apaga) o conteúdo do buffer de saída ativo e desliga-o

### Descrição

function **ob\_end\_clean**(): [bool](language.types.boolean.md)

Esta função chama o manipulador de saída
(com as opções **`PHP_OUTPUT_HANDLER_CLEAN`** e
**`PHP_OUTPUT_HANDLER_FINAL`**),
descarta seu valor de retorno,
descarta o conteúdo do buffer de saída ativo
e desliga o mesmo.

**ob\_end\_clean()** falhará
sem um buffer de saída ativo com a opção
**`PHP_OUTPUT_HANDLER_REMOVABLE`**.

**ob\_end\_clean()**
irá descartar o conteúdo do buffer de saída ativo
mesmo se tiver sido iniciado sem a opção
**`PHP_OUTPUT_HANDLER_CLEANABLE`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Erros/Exceções

Se a função falhar, ela gera um **`E_NOTICE`**.

### Examples

O exemplo a seguir mostra uma maneira fácil de se livrar do
conteúdo do buffer de saída ativo:

**Exemplo #1 Exemplo de **ob\_end\_clean()****

```
<?php
ob_start();
echo 'Este texto não será mostrado.';
ob_end_clean();
?>
```

### Veja também

- [ob\_start()](function.ob-start.md) - Ativa o buffer de saída
- [ob\_get\_contents()](function.ob-get-contents.md) - Retorna o conteúdo do buffer de saída
- [ob\_clean()](function.ob-clean.md) - Limpa (apaga) o conteúdo do buffer de saída ativo
- [ob\_get\_clean()](function.ob-get-clean.md) - Obtém o conteúdo do buffer de saída ativo e desliga-o
- [ob\_end\_flush()](function.ob-end-flush.md) - Descarrega (envia) o valor de retorno do manipulador de saída ativo
  e desliga o buffer de saída ativo

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
