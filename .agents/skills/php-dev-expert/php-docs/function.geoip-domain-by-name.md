# Obtém o nome de domínio de segundo nível

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.geoip-domain-by-name.php

---

# geoip\_domain\_by\_name

(PECL geoip >= 1.1.0)

geoip\_domain\_by\_name — Obtém o nome de domínio de segundo nível

### Descrição

function **geoip\_domain\_by\_name**([string](language.types.string.md) `$hostname`): [string](language.types.string.md)

A função **geoip\_domain\_by\_name()** retornará os nomes de domínio de segundo nível
associados a um nome de host ou endereço IP.

Esta função está disponível atualmente apenas para usuários que adquiriram uma versão comercial
GeoIP Domain Edition. Um aviso será emitido se o banco de dados apropriado não puder ser
localizado.

### Parâmetros

`hostname`
:   O nome do host ou endereço IP.

### Valor Retornado

Retorna o nome do domínio em caso de sucesso, ou **`false`** se o endereço
não puder ser encontrado no banco de dados.

### Examples

**Exemplo #1 Um exemplo de **geoip\_domain\_by\_name()****

Isso exibirá o domínio associado ao IP 61.106.139.1.

```
<?php
$domain = geoip_domain_by_name('61.106.139.1');

if ($domain) {
    echo 'O domínio é: '. $domain;
}

?>
```

O exemplo acima produzirá:

```
O domínio é: von.co.kr
```

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
