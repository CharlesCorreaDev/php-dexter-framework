# Informa a posição do cursor do objeto LOB

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.cubrid-lob2-tell64.php

---

# cubrid\_lob2\_tell64

(PECL CUBRID >= 8.4.1)

cubrid\_lob2\_tell64 — Informa a posição do cursor do objeto LOB

### Descrição

function **cubrid\_lob2\_tell64**([resource](language.types.resource.md) `$lob_identifier`): [string](language.types.string.md)

A função **cubrid\_lob2\_tell64()** é usada para informar a
posição do cursor do objeto LOB. Se o tamanho de um objeto LOB for maior que o
máximo número inteiro, pode-se usar esta função e ela retornará a
posição como uma string.

### Parâmetros

`lob_identifier`
:   Identificador LOB como um resultado de [cubrid\_lob2\_new()](function.cubrid-lob2-new.md) ou obtido do conjunto de resultados.

### Valor Retornado

Retorna a posição do cursor do objeto LOB como uma string em caso de sucesso, ou **`false`** em caso de falha.

### Veja também

- [cubrid\_lob2\_read()](function.cubrid-lob2-read.md) - Lê bytes de dados BLOB/CLOB
- [cubrid\_lob2\_write()](function.cubrid-lob2-write.md) - Escreve em um objeto LOB
- [cubrid\_lob2\_seek()](function.cubrid-lob2-seek.md) - Move o cursor de um objeto LOB
- [cubrid\_lob2\_seek64()](function.cubrid-lob2-seek64.md) - Move o cursor de um objeto LOB
- [cubrid\_lob2\_tell()](function.cubrid-lob2-tell.md) - Informa a posição do cursor do objeto LOB
- [cubrid\_lob2\_size()](function.cubrid-lob2-size.md) - Obtém o tamanho do objeto LOB
- [cubrid\_lob2\_size64()](function.cubrid-lob2-size64.md) - Obtém o tamanho do objeto LOB

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
