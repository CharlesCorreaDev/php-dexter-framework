# Retorna a mensagem de erro de status, mensagens do sistema e/ou zip

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ziparchive.getstatusstring.php

---

# ZipArchive::getStatusString

(PHP 5 >= 5.2.7, PHP 7, PHP 8)

ZipArchive::getStatusString — Retorna a mensagem de erro de status, mensagens do sistema e/ou zip

### Descrição

public function **ZipArchive::getStatusString**(): [string](language.types.string.md)

Retorna a mensagem de erro de status, mensagens do sistema e/ou zip.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna uma [string](language.types.string.md) com a mensagem de status.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0, PECL zip 1.18.0 | Este método pode ser chamado em um arquivo fechado. |
| 8.0.0, PECL zip 1.18.0 | Este método não retorna mais **`false`** em caso de falha. |

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
