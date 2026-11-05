# Envia dados para todos os servidores de trabalho para ver se eles os ecoam de volta (descontinuado)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.echo.php

---

# GearmanClient::echo

(PECL gearman >= 0.5.0)

GearmanClient::echo — Envia dados para todos os servidores de trabalho para ver se eles os ecoam de volta (descontinuado)

### Descrição

public function **GearmanClient::echo**([string](language.types.string.md) `$workload`): [bool](language.types.boolean.md)

O método **GearmanClient::echo()** foi descontinuado a partir do
pecl/gearman 1.0.0. Use [GearmanClient::ping()](gearmanclient.ping.md).

### Parâmetros

`workload`
:   Alguns dados serializados arbitrários para serem ecoados de volta.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

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
