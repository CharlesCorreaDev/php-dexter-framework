# Retorna todos os objetos, incluindo seus respectivos IDs de objeto dentro do especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.snmp3-real-walk.php

---

# snmp3\_real\_walk

(PHP 4, PHP 5, PHP 7, PHP 8)

snmp3\_real\_walk — Retorna todos os objetos, incluindo seus respectivos IDs de objeto dentro do especificado

### Descrição

function **snmp3\_real\_walk**(  
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

A função
**snmp3\_real\_walk()** é usada para percorrer uma série de
objetos
SNMP a partir de
`object_id`
e retornar não apenas seus valores, mas também seus IDs de objeto.

### Parâmetros

`hostname`
:   O nome do host do
    agente SNMP (servidor).

`security_name`
:   O nome de segurança, geralmente algum tipo de nome de usuário

`security_level`
:   O nível de segurança (noAuthNoPriv|authNoPriv|authPriv)

`auth_protocol`
:   O protocolo de autenticação (MD5 ou SHA)

`auth_passphrase`
:   A senha de autenticação

`privacy_protocol`
:   O protocolo de autenticação (`"MD5"`, `"SHA"`,
    `"SHA256"` ou `"SHA512"`)

`privacy_passphrase`
:   A senha de privacidade

`object_id`
:   O ID do objeto SNMP.

`timeout`
:   O número de microssegundos até o primeiro tempo limite.

`retries`
:   O número de tentativas caso ocorram tempos limite.

### Valor Retornado

Retorna um array associativo dos IDs de objetos
SNMP e seus valores em caso de sucesso ou **`false`** em caso de erro.
Em caso de erro, uma mensagem E\_WARNING é exibida.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | O parâmetro `auth_protocol` agora aceita `"SHA256"` e `"SHA512"` quando suportado por libnetsnmp. |

### Examples

**Exemplo #1 Usando
**snmp3\_real\_walk()****

```
<?php
 var_export(snmp3_real_walk('localhost', 'james', 'authPriv', 'SHA', 'secret007', 'AES', 'secret007', 'IF-MIB::ifName'));
?>
```

O resultado do exemplo acima será algo como:

```
array (
  'IF-MIB::ifName.1' => 'STRING: lo',
  'IF-MIB::ifName.2' => 'STRING: eth0',
  'IF-MIB::ifName.3' => 'STRING: eth2',
  'IF-MIB::ifName.4' => 'STRING: sit0',
  'IF-MIB::ifName.5' => 'STRING: sixxs',
)
```

### Veja também

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
