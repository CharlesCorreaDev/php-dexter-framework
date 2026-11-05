# Obtém dados de um arquivo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.zip-entry-read.php

---

# zip\_entry\_read

(PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.0.0)

zip\_entry\_read — Obtém dados de um arquivo

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **zip\_entry\_read**([resource](language.types.resource.md) `$zip_entry`, [int](language.types.integer.md) `$len` = 1024): [string](language.types.string.md)|[false](language.types.singleton.md)

Obtém dados de um arquivo.

### Parâmetros

`zip_entry`
:   Um arquivo retornado pela [zip\_read()](function.zip-read.md).

`len`
:   O número de bytes para retornar.

    > **Nota**:
    >
    > Este deve ser o tamanho não comprimido que você deseja ler.

### Valor Retornado

Retorna a informação lida, string vazia no fim de um arquivo, ou **`false`** em caso de erro.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Essa função está desencorajada em relação à API orientada a objetos, veja [ZipArchive::getFromIndex()](ziparchive.getfromindex.md). |

### Veja também

- [zip\_entry\_open()](function.zip-entry-open.md) - Abre um arquivo para leitura
- [zip\_entry\_close()](function.zip-entry-close.md) - Fecha o arquivo que está aberto
- [zip\_entry\_filesize()](function.zip-entry-filesize.md) - Retorna o tamanho de um item de diretório

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
