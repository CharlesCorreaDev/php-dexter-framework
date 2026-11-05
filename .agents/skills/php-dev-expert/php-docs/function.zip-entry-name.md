# Retorna o nome do arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.zip-entry-name.php

---

# zip\_entry\_name

(PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.0.0)

zip\_entry\_name — Retorna o nome do arquivo

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **zip\_entry\_name**([resource](language.types.resource.md) `$zip_entry`): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna o nome do arquivo especificado.

### Parâmetros

`zip_entry`
:   A lista de entrada retornada pela [zip\_read()](function.zip-read.md).

### Valor Retornado

O nome do arquivo, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função está desencorajada em relação a API orientada a objeto, veja [ZipArchive::statIndex()](ziparchive.statindex.md). |

### Veja também

- [zip\_open()](function.zip-open.md) - Abre um arquivo ZIP
- [zip\_read()](function.zip-read.md) - Lê o próximo item em um arquivo ZIP

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
