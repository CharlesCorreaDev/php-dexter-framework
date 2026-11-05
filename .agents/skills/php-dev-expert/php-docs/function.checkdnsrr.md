# Verifica os registros DNS correspondentes para o nome do host ou endereço IP informado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.checkdnsrr.php

---

# checkdnsrr

(PHP 4, PHP 5, PHP 7, PHP 8)

checkdnsrr — Verifica os registros DNS correspondentes para o nome do host ou endereço IP informado

### Descrição

function **checkdnsrr**([string](language.types.string.md) `$hostname`, [string](language.types.string.md) `$type` = "MX"): [bool](language.types.boolean.md)

Pesquisa o DNS para os registros do tipo informado em `type`
correspondentes ao nome do host definido em `hostname`.

### Parâmetros

`hostname`
:   `hostname` pode ser o endereço IP em
    notação quádrupla separada por pontos ou o nome do host.

`type`
:   `type` pode ser: A, MX, NS, SOA,
    PTR, CNAME, AAAA, A6, SRV, NAPTR, TXT ou ANY.

### Valor Retornado

Retorna **`true`** se o registro for encontrado; retorna **`false`** se não forem encontrados
registros ou se um erro ocorrer.

### Notas

> **Nota**:
>
> Para compatibilidade com Windows antes desta implementação, deve ser usada a classe
> [» Net\_DNS](https://pear.php.net/package/Net_DNS)
> do [» PEAR](https://pear.php.net/).

### Veja também

- [dns\_get\_record()](function.dns-get-record.md) - Busca registros de recursos DNS associados a um nome de host
- [getmxrr()](function.getmxrr.md) - Obtém registros MX correspondentes a um determinado nome de host da Internet
- [gethostbyaddr()](function.gethostbyaddr.md) - Obtém nome do servidor de Internet correspondente ao endereço de IP fornecido
- [gethostbyname()](function.gethostbyname.md) - Obtém o endereço IPv4 correspondente a um determinado nome de host da Internet
- [gethostbynamel()](function.gethostbynamel.md) - Obtém uma lista de endereços IPv4 correspondentes a um determinado nome de host da
  Internet
- a página named(8) do manual

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
