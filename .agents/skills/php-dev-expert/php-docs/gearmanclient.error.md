# Retorna uma string de erro para o último erro encontrado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.error.php

---

# GearmanClient::error

(PECL gearman >= 0.5.0)

GearmanClient::error — Retorna uma string de erro para o último erro encontrado

### Descrição

public function **GearmanClient::error**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna uma string de erro para o último erro encontrado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma sequência de erro legível por humanos, ou **`false`** se não houver nenhuma mensagem de erro disponível.

### Veja também

- [GearmanClient::getErrno()](gearmanclient.geterrno.md) - Obtém um número de erro

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
