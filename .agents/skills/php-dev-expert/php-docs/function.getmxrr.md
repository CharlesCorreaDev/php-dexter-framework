# Obtém registros MX correspondentes a um determinado nome de host da Internet

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.getmxrr.php

---

# getmxrr

(PHP 4, PHP 5, PHP 7, PHP 8)

getmxrr — Obtém registros MX correspondentes a um determinado nome de host da Internet

### Descrição

function **getmxrr**([string](language.types.string.md) `$hostname`, [array](language.types.array.md) `&$hosts`, [array](language.types.array.md) `&$weights` = **`null`**): [bool](language.types.boolean.md)

Pesquisa DNS por registros MX correspondentes a
`hostname`.

### Parâmetros

`hostname`
:   O nome do host da Internet.

`hosts`
:   Uma lista dos registros MX encontrados é colocada no array
    `hosts`.

`weights`
:   Se o array `weights` for fornecido, ele será preenchido
    com as informações de peso coletadas.

### Valor Retornado

Retorna **`true`** se algum registro for encontrado; retorna **`false`** se nenhum registro
for encontrado ou se ocorrer um erro.

### Notas

> **Nota**:
>
> Esta função não deve ser usada para fins de verificação de
> endereço. Apenas os trocadores de e-mail encontrados no DNS são retornados,
> no entanto, de acordo com a [» RFC 2821](https://datatracker.ietf.org/doc/html/rfc2821),
> quando nenhum trocador de e-mail estiver listado, o próprio `hostname`
> deverá ser usado como o único trocador de e-mail com prioridade
> `0`.

> **Nota**:
>
> Para compatibilidade com o Windows, antes dessa implementação, pode ser usada
> a classe [» Net\_DNS](https://pear.php.net/package/Net_DNS)
> do [» PEAR](https://pear.php.net/).

### Veja também

- [checkdnsrr()](function.checkdnsrr.md) - Verifica os registros DNS correspondentes para o nome do host ou endereço IP informado
- [dns\_get\_record()](function.dns-get-record.md) - Busca registros de recursos DNS associados a um nome de host
- [gethostbyname()](function.gethostbyname.md) - Obtém o endereço IPv4 correspondente a um determinado nome de host da Internet
- [gethostbynamel()](function.gethostbynamel.md) - Obtém uma lista de endereços IPv4 correspondentes a um determinado nome de host da
  Internet
- [gethostbyaddr()](function.gethostbyaddr.md) - Obtém nome do servidor de Internet correspondente ao endereço de IP fornecido
- A página `named(8)` do manual

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
