# Obtém os dados do aplicativo (descontinuado)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.data.php

---

# GearmanClient::data

(PECL gearman <= 0.5.0)

GearmanClient::data — Obtém os dados do aplicativo (descontinuado)

### Descrição

public function **GearmanClient::data**(): [string](language.types.string.md)

Obtém os dados do aplicativo definidos anteriormente com [GearmanClient::setData()](gearmanclient.setdata.md).

> **Nota**:
>
> Este método foi substituído por [GearmanClient::setContext()](gearmanclient.setcontext.md) na
> versão 0.6.0 da extensão Gearman.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O mesmo dados de string definidos com [GearmanClient::setData()](gearmanclient.setdata.md)

### Veja também

- [GearmanClient::setData()](gearmanclient.setdata.md) - Define dados da aplicação (descontinuado)

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
