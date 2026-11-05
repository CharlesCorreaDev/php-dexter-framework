# Define dados da aplicação (descontinuado)

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.setdata.php

---

# GearmanClient::setData

(PECL gearman <= 0.5.0)

GearmanClient::setData — Define dados da aplicação (descontinuado)

### Descrição

public function **GearmanClient::setData**([string](language.types.string.md) `$data`): [bool](language.types.boolean.md)

Define alguns dados arbitrários da aplicação que podem ser recuperados posteriormente por
[GearmanClient::data()](gearmanclient.data.md).

> **Nota**:
>
> Este método foi substituído por [GearmanClient::setContext()](gearmanclient.setcontext.md) na
> versão 0.6.0 da extensão Gearman.

### Parâmetros

`data`

### Valor Retornado

Sempre retorna **`true`**.

### Veja também

- [GearmanClient::data()](gearmanclient.data.md) - Obtém os dados do aplicativo (descontinuado)

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
