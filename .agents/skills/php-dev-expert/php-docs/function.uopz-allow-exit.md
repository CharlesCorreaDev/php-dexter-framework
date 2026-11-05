# Permite o controle sobre o código de operação de saída desabilitado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.uopz-allow-exit.php

---

# uopz\_allow\_exit

(PECL uopz 5, PECL uopz 6, PECL uopz 7)

uopz\_allow\_exit — Permite o controle sobre o código de operação de saída desabilitado

### Descrição

function **uopz\_allow\_exit**([bool](language.types.boolean.md) `$allow`): [void](language.types.void.md)

Por padrão, o uopz desabilita o opcode de saída, então chamadas [exit()](function.exit.md)
são praticamente ignoradas. **uopz\_allow\_exit()**
permite controlar esse comportamento.

### Parâmetros

`allow`
:   Informa se deve ou não ser permitida a execução de opcodes de saída.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **uopz\_allow\_exit()****

```
<?php
exit(1);
echo 1;
uopz_allow_exit(true);
exit(2);
echo 2;
?>
```

O exemplo acima produzirá:

```
1
```

### Notas

**Cuidado**

[OPcache](book.opcache.md) otimiza o código morto após a saída incondicional.

### Veja também

- [uopz\_get\_exit\_status()](function.uopz-get-exit-status.md) - Recupera o último status de saída definido

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
