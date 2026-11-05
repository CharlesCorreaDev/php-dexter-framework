# Busca o objeto SNMP que segue o ID do objeto fornecido

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.snmpgetnext.php

---

# snmpgetnext

(PHP 5, PHP 7, PHP 8)

snmpgetnext — 
Busca o objeto SNMP que segue o ID do objeto fornecido

### Descrição

function **snmpgetnext**(  
    [string](language.types.string.md) `$hostname`,  
    [string](language.types.string.md) `$community`,  
    [array](language.types.array.md)|[string](language.types.string.md) `$object_id`,  
    [int](language.types.integer.md) `$timeout` = -1,  
    [int](language.types.integer.md) `$retries` = -1  
): [mixed](language.types.mixed.md)

A função **snmpgetnext()** é usada para ler o
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

**Exemplo #1 Usando **snmpgetnext()****

```
<?php
$nameOfSecondInterface = snmpgetnext('localhost', 'public', 'IF-MIB::ifName.1');
?>
```

### Veja também

- [snmpget()](function.snmpget.md) - Busca um objeto SNMP
- [snmpwalk()](function.snmpwalk.md) - Busca todos os objetos SNMP de um agente

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
