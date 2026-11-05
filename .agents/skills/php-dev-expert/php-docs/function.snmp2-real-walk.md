# Retorna todos os objetos, incluindo seus respectivos IDs de objeto dentro do especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.snmp2-real-walk.php

---

# snmp2\_real\_walk

(PHP >= 5.2.0, PHP 7, PHP 8)

snmp2\_real\_walk — Retorna todos os objetos, incluindo seus respectivos IDs de objeto dentro do especificado

### Descrição

function **snmp2\_real\_walk**(  
    [string](language.types.string.md) `$hostname`,  
    [string](language.types.string.md) `$community`,  
    [array](language.types.array.md)|[string](language.types.string.md) `$object_id`,  
    [int](language.types.integer.md) `$timeout` = -1,  
    [int](language.types.integer.md) `$retries` = -1  
): [array](language.types.array.md)|[false](language.types.singleton.md)

A função **snmp2\_real\_walk()** é usada para percorrer uma série
de objetos SNMP a partir de `object_id`
e retornar não apenas seus valores, mas também seus IDs de objeto.

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

Retorna um array associativo dos IDs de objetos SNMP e seus valores em caso de sucesso ou **`false`** em caso de erro.
Em caso de erro, uma mensagem E\_WARNING é exibida.

### Examples

**Exemplo #1 Usando **snmp2\_real\_walk()****

```
<?php
 print_r(snmp2_real_walk("localhost", "public", "IF-MIB::ifName"));
?>
```

O resultado do exemplo acima será algo como:

```
Array
      (
      [IF-MIB::ifName.1] => STRING: lo
      [IF-MIB::ifName.2] => STRING: eth0
      [IF-MIB::ifName.3] => STRING: eth2
      [IF-MIB::ifName.4] => STRING: sit0
      [IF-MIB::ifName.5] => STRING: sixxs
    )
```

### Veja também

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
