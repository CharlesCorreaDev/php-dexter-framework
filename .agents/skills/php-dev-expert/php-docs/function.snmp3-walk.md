# Busca todos os objetos SNMP de um agente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.snmp3-walk.php

---

# snmp3\_walk

(PHP 4, PHP 5, PHP 7, PHP 8)

snmp3\_walk — Busca todos os objetos SNMP de um agente

### Descrição

function **snmp3\_walk**(  
    [string](language.types.string.md) `$hostname`,  
    [string](language.types.string.md) `$security_name`,  
    [string](language.types.string.md) `$security_level`,  
    [string](language.types.string.md) `$auth_protocol`,  
    [string](language.types.string.md) `$auth_passphrase`,  
    [string](language.types.string.md) `$privacy_protocol`,  
    [string](language.types.string.md) `$privacy_passphrase`,  
    [array](language.types.array.md)|[string](language.types.string.md) `$object_id`,  
    [int](language.types.integer.md) `$timeout` = -1,  
    [int](language.types.integer.md) `$retries` = -1  
): [array](language.types.array.md)|[false](language.types.singleton.md)

A função **snmp3\_walk()** é usada para ler todos os valores de
um agente SNMP especificado pelo `hostname`.

Mesmo que o nível de segurança não use um protocolo/senha auth ou priv, valores válidos devem ser especificados.

### Parâmetros

`hostname`
:   O nome do host do agente SNMP (servidor).

`security_name`
:   O nome de segurança, geralmente algum tipo de nome de usuário

`security_level`
:   O nível de segurança (noAuthNoPriv|authNoPriv|authPriv)

`auth_protocol`
:   O protocolo de autenticação (`"MD5"`, `"SHA"`,
    `"SHA256"` ou `"SHA512"`)

`auth_passphrase`
:   A senha de autenticação

`privacy_protocol`
:   O protocolo de privacidade (DES ou AES)

`privacy_passphrase`
:   A senha de privacidade

`object_id`
:   Se **`null`**, `object_id` for considerado a raiz da
    árvore de objetos SNMP e todos os objetos sob essa árvore serão retornados como
    um array.

    Se `object_id` for especificado, todos os objetos SNMP
    abaixo desse `object_id` serão retornados.

`timeout`
:   O número de microssegundos até o primeiro tempo limite.

`retries`
:   O número de tentativas caso ocorram tempos limite.

### Valor Retornado

Retorna um array de valores de objetos SNMP começando pelo
`object_id` como raiz ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `auth_protocol` agora aceita `"SHA256"` e `"SHA512"` quando suportado por libnetsnmp. |

### Examples

**Exemplo #1 Exemplo de **snmp3\_walk()****

```
<?php
$ret = snmp3_walk('localhost', 'james', 'authPriv', 'SHA', 'secret007', 'AES', 'secret007', 'IF-MIB::ifName');
var_export($ret);
?>
```

A chamada de função acima retornaria todos os objetos SNMP do agente
SNMP em execução no host local:

```
array (
  0 => 'STRING: lo',
  1 => 'STRING: eth0',
  2 => 'STRING: eth2',
  3 => 'STRING: sit0',
  4 => 'STRING: sixxs',
)
```

### Veja também

- [snmp3\_real\_walk()](function.snmp3-real-walk.md) - Retorna todos os objetos, incluindo seus respectivos IDs de objeto dentro do especificado

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
