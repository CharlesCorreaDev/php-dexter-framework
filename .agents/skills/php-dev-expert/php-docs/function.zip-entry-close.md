# Fecha o arquivo que está aberto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.zip-entry-close.php

---

# zip\_entry\_close

(PHP 4 >= 4.1.0, PHP 5 >= 5.2.0, PHP 7, PHP 8, PECL zip >= 1.0.0)

zip\_entry\_close — Fecha o arquivo que está aberto

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.0.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
function **zip\_entry\_close**([resource](language.types.resource.md) `$zip_entry`): [bool](language.types.boolean.md)

Fecha uma especificada lista de entrada.

### Parâmetros

`zip_entry`
:   Um diretório de entrada previamente aberto com [zip\_entry\_open()](function.zip-entry-open.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função foi descontinuada em favor da API orientada a objetos. |

### Veja também

- [zip\_entry\_open()](function.zip-entry-open.md) - Abre um arquivo para leitura
- [zip\_entry\_read()](function.zip-entry-read.md) - Obtém dados de um arquivo

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
