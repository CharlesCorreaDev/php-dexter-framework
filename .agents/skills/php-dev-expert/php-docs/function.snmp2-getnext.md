# Busca o objeto SNMP que segue o ID do objeto fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.snmp2-getnext.php

---

# snmp2\_getnext

(PHP >= 5.2.0, PHP 7, PHP 8)

snmp2\_getnext — Busca o objeto SNMP que segue o ID do objeto fornecido

### Descrição

function **snmp2\_getnext**(  
    [string](language.types.string.md) `$hostname`,  
    [string](language.types.string.md) `$community`,  
    [array](language.types.array.md)|[string](language.types.string.md) `$object_id`,  
    [int](language.types.integer.md) `$timeout` = -1,  
    [int](language.types.integer.md) `$retries` = -1  
): [mixed](language.types.mixed.md)

A função **snmp2\_getnext()** é usada para ler o
valor do objeto SNMP que segue o
`object_id` especificado.

### Parâmetros

`hostname`
:   O nome do host do agente SNMP (servidor).

`community`
:   A comunidade de leitura.

`object_id`
:   O ID do objeto SNMP que precede o desejado.

`timeout`
:   O número de microssegundos até o primeiro tempo limite.

`retries`
:   O número de tentativas caso ocorram tempos limite.

### Valor Retornado

Retorna o valor do objeto SNMP em caso de sucesso ou **`false`** em caso de erro.
Em caso de erro, uma mensagem E\_WARNING é exibida.

### Examples

**Exemplo #1 Usando **snmp2\_getnext()****

```
<?php
$nameOfSecondInterface = snmp2_getnext('localhost', 'public', 'IF-MIB::ifName.1');
?>
```

### Veja também

- [snmp2\_get()](function.snmp2-get.md) - Busca um objeto SNMP
- [snmp2\_walk()](function.snmp2-walk.md) - Busca todos os objetos SNMP de um agente

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
