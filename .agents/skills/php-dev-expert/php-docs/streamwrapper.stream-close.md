# Fecha um recurso

> **Fonte / Source:** https://www.php.net/manual/pt_BR/streamwrapper.stream-close.php

---

# streamWrapper::stream\_close

(PHP 4 >= 4.3.2, PHP 5, PHP 7, PHP 8)

streamWrapper::stream\_close — Fecha um recurso

### Descrição

public function **streamWrapper::stream\_close**(): [void](language.types.void.md)

Este método é chamado em resposta a [fclose()](function.fclose.md).

Todos os recursos que estavam travados ou alocados pelo empacotador devem
ser liberados.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [fclose()](function.fclose.md) - Fecha um ponteiro de arquivo aberto
- [streamWrapper::dir\_closedir()](streamwrapper.dir-closedir.md) - Fecha o manipulador de diretório

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
