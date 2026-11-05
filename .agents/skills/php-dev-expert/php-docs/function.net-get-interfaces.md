# Obtém interfaces de rede

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.net-get-interfaces.php

---

# net\_get\_interfaces

(PHP 7 >= 7.3, PHP 8)

net\_get\_interfaces — Obtém interfaces de rede

### Descrição

function **net\_get\_interfaces**(): [array](language.types.array.md)|[false](language.types.singleton.md)

Retorna uma enumeração de interfaces de rede (adaptadores) na máquina local.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um [array](language.types.array.md) associativo onde a chave é o nome da interface e
o valor é um array associativo de atributos de interface,
ou **`false`** em caso de falha.

Cada array associativo de interface contém

**Atributos de interface**

| Nome | Descrição |
| --- | --- |
| description | Valor de string opcional para descrição da interface. Somente Windows. |
| mac | Valor de string opcional para endereço MAC da interface. Somente Windows. |
| mtu | Valor inteiro para a unidade máxima de transmissão (MTU) da interface. Somente Windows. |
| unicast | Array de arrays associativos, consulte atributos Unicast abaixo. |
| up | Status booleano (ligado/desligado) para a interface. |

**Atributos Unicast**

| Nome | Descrição |
| --- | --- |
| flags | Valor inteiro. |
| family | Valor inteiro. |
| address | Valor string para o endereço em IPv4 ou IPv6. |
| netmask | Valor string para a máscara de rede em either IPv4 ou IPv6. |

### Erros/Exceções

Emite um **`E_WARNING`** em caso de falha ao obter informação de interface.

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
