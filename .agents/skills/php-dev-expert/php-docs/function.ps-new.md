# Cria um novo objeto de documento PostScript

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ps-new.php

---

# ps\_new

(PECL ps >= 1.1.0)

ps\_new — Cria um novo objeto de documento PostScript

### Descrição

function **ps\_new**(): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Cria uma nova instância de documento. Não cria o arquivo em disco ou na
memória, apenas configura tudo. **ps\_new()** geralmente é
seguido por uma chamada de [ps\_open\_file()](function.ps-open-file.md) para criar
o documento PostScript.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Recurso de documento PostScript ou **`false`** em caso de falha. O valor de retorno
é passado para todas as outras funções como o primeiro argumento.

### Veja também

- [ps\_delete()](function.ps-delete.md) - Exclui todos os recursos de um documento PostScript

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
