# Cria uma instância SNMP representando a sessão para o agente SNMP remoto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/snmp.construct.php

---

# SNMP::\_\_construct

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

SNMP::\_\_construct — Cria uma instância SNMP representando a sessão para o agente SNMP remoto

### Descrição

public function **SNMP::\_\_construct**(  
    [int](language.types.integer.md) `$version`,  
    [string](language.types.string.md) `$hostname`,  
    [string](language.types.string.md) `$community`,  
    [int](language.types.integer.md) `$timeout` = -1,  
    [int](language.types.integer.md) `$retries` = -1  
)

Cria uma instância SNMP representando a sessão para o agente SNMP remoto.

### Parâmetros

`version`
:   Versão de protocolo SNMP:
    **`SNMP::VERSION_1`**,
    **`SNMP::VERSION_2C`**,
    **`SNMP::VERSION_3`**.

`hostname`
:   O agente SNMP. `hostname` pode ser sufixado com
    porta de agente SNMP opcional após dois pontos. Endereços IPv6 devem ser colocados entre colchetes
    se usados ​​com porta. Se FQDN for usado para `hostname`
    ele será resolvido pela extensão SNMP do PHP, não pelo
    mecanismo Net-SNMP. O uso
    de endereços IPv6 ao especificar FQDN pode ser forçado colocando FQDN
    entre colchetes. Aqui estão alguns exemplos:

    |  |  |
    | --- | --- |
    | IPv4 com porta padrão | 127.0.0.1 |
    | IPv6 com porta padrão | ::1 ou [::1] |
    | IPv4 com porta específica | 127.0.0.1:1161 |
    | IPv6 com porta específica | [::1]:1161 |
    | FQDN com porta padrão | host.domain |
    | FQDN com porta específica | host.domain:1161 |
    | FQDN com porta padrão, força uso de endereço IPv6 | [host.domain] |
    | FQDN com porta específica, força uso de endereço IPv6 | [host.domain]:1161 |

`community`
:   Especifica o nível de segurança para a versão informada no parâmetro `version`.
    A finalidade da string de acesso `community` é
    específica da versão SNMP:

    |  |  |
    | --- | --- |
    | **`SNMP::VERSION_1`** | `public` para permissão somente leitura ou `private` para leitura e gravação |
    | **`SNMP::VERSION_2C`** | `public` para permissão somente leitura ou `private` para leitura e gravação |
    | **`SNMP::VERSION_3`** | Nome de segurança SNMPv3, pode ser: `noAuthNoPriv`, `authNoPriv` (requer uma senha e um protocolo de autenticação) ou `authPriv` (requer uma senha e um protocolo de autenticação, e também um senha e um protocolo de privacidade) |

    O SNMPv3 requer a configuração de parâmetros de sessão relacionados à segurança com
    o método [SNMP::setSecurity()](snmp.setsecurity.md).

`timeout`
:   O número de microssegundos até o primeiro tempo limite.

`retries`
:   O número de tentativas caso o tempo limite seja atingido.

### Erros/Exceções

**SNMP::\_\_construct()** lança uma exceção quando
a contagem de parâmetros ou os tipos estiverem incorretos ou desconhecidos ou
a versão do protocolo SNMP especificada for desconhecida.

### Examples

**Exemplo #1 Buscando a localização física do host**

```
<?php

$session = new SNMP(SNMP::VERSION_1, "127.0.0.1", "public");
$sysdescr = $session->get("sysDescr.0");
echo "$sysdescr\n";

?>
```

O exemplo acima produzirá
algo semelhante a:

```
STRING: Test server
```

### Veja também

- [SNMP::close()](snmp.close.md) - Fecha a sessão SNMP

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
