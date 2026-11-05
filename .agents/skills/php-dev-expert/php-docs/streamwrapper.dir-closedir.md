# Fecha o manipulador de diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/streamwrapper.dir-closedir.php

---

# streamWrapper::dir\_closedir

(PHP 4 >= 4.3.2, PHP 5, PHP 7, PHP 8)

streamWrapper::dir\_closedir — Fecha o manipulador de diretório

### Descrição

public function **streamWrapper::dir\_closedir**(): [bool](language.types.boolean.md)

Este método é chamado em resposta a [closedir()](function.closedir.md).

Quaisquer recursos que estavam travados ou alocados durante abertura e uso
do fluxo de diretório devem ser liberados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [closedir()](function.closedir.md) - Fecha o manipulador do diretório
- [streamWrapper::dir\_opendir()](streamwrapper.dir-opendir.md) - Abre um manipulador de diretório

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
