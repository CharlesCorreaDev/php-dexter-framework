# Busca um objeto SNMP

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.snmp3-get.php

---

# snmp3\_get

(PHP 4, PHP 5, PHP 7, PHP 8)

snmp3\_get — Busca um objeto SNMP

### Descrição

function **snmp3\_get**(  
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
): [mixed](language.types.mixed.md)

A função **snmp3\_get()** é usada para ler o
valor de um objeto SNMP especificado pelo
`object_id`.

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
:   O ID do objeto SNMP.

`timeout`
:   O número de microssegundos até o primeiro tempo limite.

`retries`
:   O número de tentativas caso ocorram tempos limite.

### Valor Retornado

Retorna o valor do objeto SNMP em caso de sucesso ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | Agora lança um [ValueError](class.valueerror.md) quando o comprimento do nome do host for igual ou maior que 128 bytes, quando a porta for negativa ou maior que 65535, ou quando os valores de tempo limite ou tentativas forem menores que -1 ou muito grandes. |
| 8.1.0 | O parâmetro `auth_protocol` agora aceita `"SHA256"` e `"SHA512"` quando suportado por libnetsnmp. |

### Examples

**Exemplo #1 Usando **snmp3\_get()****

```
<?php
$nameOfSecondInterface = snmp3_get('localhost', 'james', 'authPriv', 'SHA', 'secret007', 'AES', 'secret007', 'IF-MIB::ifName.2');
?>
```

### Veja também

- [snmp3\_set()](function.snmp3-set.md) - Define o valor de um objeto SNMP

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
