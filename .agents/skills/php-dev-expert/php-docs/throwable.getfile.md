# Obtém o arquivo no qual o objeto foi criado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/throwable.getfile.php

---

# Throwable::getFile

(PHP 7, PHP 8)

Throwable::getFile — Obtém o arquivo no qual o objeto foi criado

### Descrição

public function **Throwable::getFile**(): [string](language.types.string.md)

Obtém o nome do arquivo no qual o objeto disparado foi criado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Obtém o nome do arquivo no qual o objeto disparado foi criado.

### Veja também

- [Exception::getFile()](exception.getfile.md) - Obtém o arquivo no qual a exceção foi criada

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
