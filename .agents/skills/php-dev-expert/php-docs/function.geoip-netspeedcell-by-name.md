# Obtém a velocidade de conexão da Internet

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.geoip-netspeedcell-by-name.php

---

# geoip\_netspeedcell\_by\_name

(PECL geoip >= 1.1.0)

geoip\_netspeedcell\_by\_name — Obtém a velocidade de conexão da Internet

### Descrição

function **geoip\_netspeedcell\_by\_name**([string](language.types.string.md) `$hostname`): [string](language.types.string.md)

A função **geoip\_netspeedcell\_by\_name()** retornará o tipo de conexão de Internet
e a velocidade correspondente a um nome de host ou endereço IP.

Esta função só está disponível se estiver usando a versão 1.4.8 ou mais recente da Biblioteca GeoIP.

Esta função está disponível atualmente apenas para usuários que adquiriram uma versão comercial do
GeoIP NetSpeedCell Edition. Um aviso será emitido se o banco de dados apropriado não puder ser
localizado.

O valor de retorno é uma string, os valores comuns são:

- Cable/DSL
- Dialup
- Cellular
- Corporate

### Parâmetros

`hostname`
:   O nome do host ou endereço IP.

### Valor Retornado

Retorna a velocidade da conexão em caso de sucesso, ou **`false`** se o endereço
não puder ser encontrado no banco de dados.

### Examples

**Exemplo #1 Um exemplo de **geoip\_netspeedcell\_by\_name()****

Isso mostrará a velocidade de conexão do host example.com.

```
<?php
$netspeed = geoip_netspeedcell_by_name('www.example.com');

if ($netspeed) {
    echo 'O tipo de conexão é: '. $netspeed;
}
?>
```

O exemplo acima produzirá:

```
O tipo de conexão é: Corporate
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
