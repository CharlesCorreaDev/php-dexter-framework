# Obtém o tamanho comprimido do item

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.zip-entry-compressedsize.php

---

# zip\_entry\_compressedsize

(PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.0.0)

zip\_entry\_compressedsize — Obtém o tamanho comprimido do item

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **zip\_entry\_compressedsize**([resource](language.types.resource.md) `$zip_entry`): [int](language.types.integer.md)|[false](language.types.singleton.md)

Retorna o tamanho do arquivo compactado dentro do arquivo ZIP especificado.

### Parâmetros

`zip_entry`
:   Uma lista de entrada retornada pela [zip\_read()](function.zip-read.md).

### Valor Retornado

O tamanho comprimido, ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função foi descontinuada em favor da API orientada a objetos, veja [ZipArchive::statIndex()](ziparchive.statindex.md). |

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
