# Obtém um número de erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/gearmanclient.geterrno.php

---

# GearmanClient::getErrno

(PECL gearman >= 0.5.0)

GearmanClient::getErrno — Obtém um número de erro

### Descrição

public function **GearmanClient::getErrno**(): [int](language.types.integer.md)

Número de erro no caso de um valor de retorno GEARMAN\_ERRNO.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um número de erro Gearman válido.

### Veja também

- [GearmanClient::error()](gearmanclient.error.md) - Retorna uma string de erro para o último erro encontrado

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
