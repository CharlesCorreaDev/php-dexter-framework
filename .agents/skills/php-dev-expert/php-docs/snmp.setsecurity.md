# Configura parâmetros de sessão SNMPv3 relacionados à segurança

> **Fonte / Source:** https://www.php.net/manual/pt_BR/snmp.setsecurity.php

---

# SNMP::setSecurity

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

SNMP::setSecurity — Configura parâmetros de sessão SNMPv3 relacionados à segurança

### Descrição

public function **SNMP::setSecurity**(  
    [string](language.types.string.md) `$securityLevel`,  
    [string](language.types.string.md) `$authProtocol` = "",  
    [string](language.types.string.md) `$authPassphrase` = "",  
    [string](language.types.string.md) `$privacyProtocol` = "",  
    [string](language.types.string.md) `$privacyPassphrase` = "",  
    [string](language.types.string.md) `$contextName` = "",  
    [string](language.types.string.md) `$contextEngineId` = ""  
): [bool](language.types.boolean.md)

Este método configura parâmetros de sessão relacionados à segurança usados ​​no protocolo SNMP versão 3.

### Parâmetros

`securityLevel`
:   O nível de segurança (noAuthNoPriv|authNoPriv|authPriv)

`authProtocol`
:   O protocolo de autenticação (MD5 ou SHA)

`authPassphrase`
:   A senha de autenticação

`privacyProtocol`
:   O protocolo de privacidade (DES ou AES)

`privacyPassphrase`
:   A senha de privacidade

`contextName`
:   O nome do contexto

`contextEngineId`
:   O ID do mecanismo do contexto

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **SNMP::setSecurity()****

```
<?php
  $session = new SNMP(SNMP::VERSION_3, $hostname, $rwuser, $timeout, $retries);
  $session->setSecurity('authPriv', 'MD5', $auth_pass, 'AES', $priv_pass, '', 'aeeeff');
?>
```

### Veja também

- [SNMP::\_\_construct()](snmp.construct.md) - Cria uma instância SNMP representando a sessão para o agente SNMP remoto

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
