# Retorna o tamanho de um item de diretório

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.zip-entry-filesize.php

---

# zip\_entry\_filesize

(PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.0.0)

zip\_entry\_filesize — Retorna o tamanho de um item de diretório

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **zip\_entry\_filesize**([resource](language.types.resource.md) `$zip_entry`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o tamanho atual do especificado diretório de entrada.

### Parâmetros

`zip_entry`
:   Um diretório de entrada retornado por [zip\_read()](function.zip-read.md).

### Valor Retornado

O tamanho do item de diretório, ou **`false`** em caso de falha.

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
