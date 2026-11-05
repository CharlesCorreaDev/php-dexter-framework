# Retorna informação de depuração sobre o contexto de hash

> **Fonte / Source:** https://www.php.net/manual/pt_BR/hashcontext.debuginfo.php

---

# HashContext::\_\_debugInfo

(PHP 8 >= 8.4.0)

HashContext::\_\_debugInfo — Retorna informação de depuração sobre o contexto de hash

### Descrição

public function **HashContext::\_\_debugInfo**(): [array](language.types.array.md)

Este método não foi feito para ser chamado diretamente; ele é invocado por
[var\_dump()](function.var-dump.md) e funções relacionadas ao inspecionar uma
instância de [HashContext](class.hashcontext.md) instance.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array associativo com informações de depuração. Ele contém uma
chave `algo` com o nome do algoritmo de hash
em uso pelo contexto.

### Examples

**Exemplo #1 Exemplo de **HashContext::\_\_debugInfo()** example**

```
<?php
$ctx = hash_init('sha256');
var_dump($ctx);
?>
```

O exemplo acima produzirá:

```
object(HashContext)#1 (1) {
  ["algo"]=>
  string(6) "sha256"
}
```

### Veja também

- [hash\_init()](function.hash-init.md) - Inicializa um contexto de hash incremental
- [var\_dump()](function.var-dump.md) - Despeja na saída informações sobre uma variável

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
