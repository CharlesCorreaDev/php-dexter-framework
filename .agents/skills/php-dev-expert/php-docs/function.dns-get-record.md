# Busca registros de recursos DNS associados a um nome de host

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.dns-get-record.php

---

# dns\_get\_record

(PHP 5, PHP 7, PHP 8)

dns\_get\_record — Busca registros de recursos DNS associados a um nome de host

### Descrição

function **dns\_get\_record**(  
    [string](language.types.string.md) `$hostname`,  
    [int](language.types.integer.md) `$type` = **`DNS_ANY`**,  
    [array](language.types.array.md) `&$authoritative_name_servers` = **`null`**,  
    [array](language.types.array.md) `&$additional_records` = **`null`**,  
    [bool](language.types.boolean.md) `$raw` = **`false`**  
): [array](language.types.array.md)|[false](language.types.singleton.md)

Busca registros de recursos DNS associados ao nome do host informado
no parâmetro `hostname`.

### Parâmetros

`hostname`
:   `hostname` deve ser um nome de host DNS válido, como
    "`www.example.com`". Pesquisas reversas podem ser geradas
    usando a notação `in-addr.arpa`, mas
    [gethostbyaddr()](function.gethostbyaddr.md) é mais adequada para
    a maioria das pesquisas reversas.

    > **Nota**:
    >
    > De acordo com os padrões DNS, os endereços de e-mail são fornecidos no formato `user.host` (por
    > exemplo: `hostmaster.example.com` em oposição a `hostmaster@example.com`).
    > Certifique-se de verificar este valor e modificá-lo se necessário antes de usá-lo
    > com funções como [mail()](function.mail.md).

`type`
:   Por padrão, **dns\_get\_record()** procurará quaisquer
    registros de recursos associados ao `hostname`.
    Para limitar a consulta, use uma das
    constantes
    **`DNS_*`**

`authoritative_name_servers`
:   Passado por referência e, se fornecido, será preenchido com Registros de
    Recursos para os *Servidores de Nomes Autoritativos*.

`additional_records`
:   Passado por referência e, se fornecido, será preenchido com
    quaisquer *Registros Adicionais*.

`raw`
:   O parâmetro `type` será interpretado como um ID de tipo DNS bruto
    (as constantes **`DNS_*`** não podem ser usadas).
    O valor de retorno conterá uma chave `data`, que precisa
    ser analisada manualmente.

### Valor Retornado

Esta função retorna um array de arrays associativos,
ou **`false`** em caso de falha. Cada array associativo contém,
*no mínimo*, as seguintes chaves:

**Atributos DNS Básicos**

| Atributo | Significado |
| --- | --- |
| host | O registro no namespace DNS ao qual o restante dos dados associados se refere. |
| class | **dns\_get\_record()** retorna apenas registros de classes da Internet e como tal este parâmetro sempre retornará `IN`. |
| type | String contendo o tipo de registro. Atributos adicionais também estarão contidos no array resultante, dependendo do valor do tipo. Veja a tabela abaixo. |
| ttl | `"Time To Live"` (tempo de vida) restante para este registro. Isto *não* será igual ao TTL original do registro, mas será igual ao TTL original menos qualquer período de tempo decorrido desde que o servidor de nomes autoritativo foi consultado. |

**Outras chaves nos arrays associativos dependentes de `type`**

| Tipo | Colunas Extras |
| --- | --- |
| `A` | `ip`: Endereços IPv4 em notação decimal com pontos. |
| `MX` | `pri`: Prioridade do trocador de mensagens. Números mais baixos indicam maior prioridade. `target`: FQDN do trocador de correio. Consulte também [dns\_get\_mx()](function.dns-get-mx.md). |
| `CNAME` | `target`: FQDN do local no namespace DNS ao qual o registro tem alias. |
| `NS` | `target`: FQDN do servidor de nomes que tem autoridade para este nome de host. |
| `PTR` | `target`: Local no namespace DNS para o qual esse registro aponta. |
| `TXT` | `txt`:Dados de string arbitrários associados a este registro. |
| `HINFO` | `cpu`: Número IANA que designa a CPU da máquina referenciada por este registro. `os`: Número IANA que designa o sistema operacional na máquina referenciada por este registro. Consulte os [» Nomes de Sistemas Operacionais (`Operating System Names`)](https://www.iana.org/assignments/operating-system-names)  da IANA para o significado desses valores. |
| `CAA` | `flags`: Um campo de bits de um byte; atualmente apenas o bit 0 está definido, significando 'crítico'; outros bits são reservados e devem ser ignorados. `tag`: O nome da tag CAA (sequência alfanumérica ASCII). `value`: O valor da tag CAA (string binária, pode usar subformatos). Para obter informações adicionais, consulte: [» RFC 6844](https://datatracker.ietf.org/doc/html/rfc6844) |
| `SOA` | `mname`: FQDN da máquina da qual os registros de recursos foram originados. `rname`: Endereço de e-mail do contato administrativo deste domínio. `serial`: Número de série desta revisão do domínio solicitado. `refresh`: Intervalo de atualização (segundos) que os servidores de nomes secundários devem usar ao atualizar cópias remotas deste domínio. `retry`: Tempo (segundos) de espera após uma atualização com falha antes de fazer uma segunda tentativa. `expire`: Período máximo de tempo (segundos) que um servidor DNS secundário deve reter cópias remotas dos dados da zona sem uma atualização bem-sucedida antes de descartar. `minimum-ttl`: Período mínimo de tempo (segundos) que um cliente pode continuar a usar uma resolução DNS antes de solicitar uma nova resolução do servidor. Pode ser substituído por registros de recursos individuais. |
| `AAAA` | `ipv6`: Endereço IPv6 |
| `A6` | `masklen`: Comprimento (em bits) a ser herdado do destino especificado por `chain`. `ipv6`: Endereço para este registro específico ser mesclado com `chain`. `chain`: Registro pai para mesclar com dados `ipv6`. |
| `SRV` | `pri`: (Prioridade) as prioridades mais baixas devem ser usadas primeiro. `weight`: Classificação para ponderar quais dos `targets` comumente priorizados devem ser escolhidos aleatoriamente. `target` e `port`: nome do host e porta onde o serviço solicitado pode ser encontrado. Para obter informações adicionais, consulte: [» RFC 2782](https://datatracker.ietf.org/doc/html/rfc2782). |
| `NAPTR` | `order` e `pref`: Equivalente a `pri` e `weight` acima. `flags`, `services`, `regex` e `replacement`: Parâmetros como definidos pela [» RFC 2915](https://datatracker.ietf.org/doc/html/rfc2915). |

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 7.0.16, 7.1.2 | Adicionado suporte para tipo de registro CAA. |

### Examples

**Exemplo #1 Usando **dns\_get\_record()****

```
<?php
$result = dns_get_record("php.net");
print_r($result);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [0] => Array
        (
            [host] => php.net
            [type] => MX
            [pri] => 5
            [target] => pair2.php.net
            [class] => IN
            [ttl] => 6765
        )

    [1] => Array
        (
            [host] => php.net
            [type] => A
            [ip] => 64.246.30.37
            [class] => IN
            [ttl] => 8125
        )

)
```

**Exemplo #2 Usando **dns\_get\_record()** e DNS\_ANY**

Como é muito comum pesquisar o endereço IP de um servidor de e-mail
depois que o registro MX tenha sido resolvido, **dns\_get\_record()**
também retorna um array em `additional_records` que
contém registros associados. `authoritative_name_servers`
também é retornado contendo uma lista de servidores de nomes
autoritativos.

```
<?php
/* Solicita o registro "ANY" para php.net
   e cria arrays $authns e $addtl
   contendo uma lista de servidores de nomes e
   quaisquer registros adicionais que os
   acompanham */
$result = dns_get_record("php.net", DNS_ANY, $authns, $addtl);
echo "Resultado = ";
print_r($result);
echo "Servidor de Nomes Autoritativo = ";
print_r($authns);
echo "Adicional = ";
print_r($addtl);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Resultado = Array
(
    [0] => Array
        (
            [host] => php.net
            [type] => MX
            [pri] => 5
            [target] => pair2.php.net
            [class] => IN
            [ttl] => 6765
        )

    [1] => Array
        (
            [host] => php.net
            [type] => A
            [ip] => 64.246.30.37
            [class] => IN
            [ttl] => 8125
        )

)
Servidor de Nomes Autoritativo = Array
(
    [0] => Array
        (
            [host] => php.net
            [type] => NS
            [target] => remote1.easydns.com
            [class] => IN
            [ttl] => 10722
        )

    [1] => Array
        (
            [host] => php.net
            [type] => NS
            [target] => remote2.easydns.com
            [class] => IN
            [ttl] => 10722
        )

    [2] => Array
        (
            [host] => php.net
            [type] => NS
            [target] => ns1.easydns.com
            [class] => IN
            [ttl] => 10722
        )

    [3] => Array
        (
            [host] => php.net
            [type] => NS
            [target] => ns2.easydns.com
            [class] => IN
            [ttl] => 10722
        )

)
Adicional = Array
(
    [0] => Array
        (
            [host] => pair2.php.net
            [type] => A
            [ip] => 216.92.131.5
            [class] => IN
            [ttl] => 6766
        )

    [1] => Array
        (
            [host] => remote1.easydns.com
            [type] => A
            [ip] => 64.39.29.212
            [class] => IN
            [ttl] => 100384
        )

    [2] => Array
        (
            [host] => remote2.easydns.com
            [type] => A
            [ip] => 212.100.224.80
            [class] => IN
            [ttl] => 81241
        )

    [3] => Array
        (
            [host] => ns1.easydns.com
            [type] => A
            [ip] => 216.220.40.243
            [class] => IN
            [ttl] => 81241
        )

    [4] => Array
        (
            [host] => ns2.easydns.com
            [type] => A
            [ip] => 216.220.40.244
            [class] => IN
            [ttl] => 81241
        )

)
```

### Veja também

- [dns\_get\_mx()](function.dns-get-mx.md) - Sinônimo de getmxrr
- [dns\_check\_record()](function.dns-check-record.md) - Sinônimo de checkdnsrr

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
