# Descarrega (envia) o valor de retorno do manipulador de saída ativo,
   retorna o conteúdo do buffer de saída ativo e desliga-o

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ob-get-flush.php

---

# ob\_get\_flush

(PHP 4 >= 4.3.0, PHP 5, PHP 7, PHP 8)

ob\_get\_flush — 
Descarrega (envia) o valor de retorno do manipulador de saída ativo,
retorna o conteúdo do buffer de saída ativo e desliga-o

### Descrição

function **ob\_get\_flush**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Esta função chama o manipulador de saída
(com a opção **`PHP_OUTPUT_HANDLER_FINAL`**),
descarrega (envia) seu valor de retorno,
retorna o conteúdo do buffer de saída ativo
e desliga o mesmo.

**ob\_get\_flush()** irá falhar
sem um buffer de saída ativo iniciado com a opção
**`PHP_OUTPUT_HANDLER_REMOVABLE`**.

**ob\_get\_flush()** irá descarregar (enviar)
o valor de retorno do manipulador de saída
mesmo se o buffer de saída ativo tiver sido iniciado sem a
opção **`PHP_OUTPUT_HANDLER_FLUSHABLE`**.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o conteúdo do buffer de saída ativo em caso de sucesso
ou **`false`** em caso de falha.

### Erros/Exceções

Se a função falhar, ela gera um **`E_NOTICE`**.

### Examples

**Exemplo #1 Exemplo de **ob\_get\_flush()****

```
<?php
// Usando output_buffering=On
print_r(ob_list_handlers());

// Grava o buffer em um arquivo
$buffer = ob_get_flush();
file_put_contents('buffer.txt', $buffer);

print_r(ob_list_handlers());
?>
```

O exemplo acima produzirá:

```
Array
(
    [0] => default output handler
)
Array
(
)
```

### Veja também

- [ob\_start()](function.ob-start.md) - Ativa o buffer de saída
- [ob\_get\_contents()](function.ob-get-contents.md) - Retorna o conteúdo do buffer de saída
- [ob\_flush()](function.ob-flush.md) - Descarrega (envia) o valor de retorno do manipulador de saída ativo
- [ob\_end\_flush()](function.ob-end-flush.md) - Descarrega (envia) o valor de retorno do manipulador de saída ativo
  e desliga o buffer de saída ativo
- [ob\_get\_clean()](function.ob-get-clean.md) - Obtém o conteúdo do buffer de saída ativo e desliga-o

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
