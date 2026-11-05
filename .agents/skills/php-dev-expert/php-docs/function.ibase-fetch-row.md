# Busca uma linha de um banco de dados InterBase

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-fetch-row.php

---

# ibase\_fetch\_row

(PHP 5, PHP 7 < 7.4.0)

ibase\_fetch\_row — Busca uma linha de um banco de dados InterBase

### Descrição

function **ibase\_fetch\_row**([resource](language.types.resource.md) `$result_identifier`, [int](language.types.integer.md) `$fetch_flag` = 0): [array](language.types.array.md)

**ibase\_fetch\_row()** busca uma linha de dados do
conjunto de resultados fornecido.

Chamadas subsequentes para **ibase\_fetch\_row()**
retornam a próxima linha no conjunto de resultados, ou **`false`** se não houver
mais linhas.

### Parâmetros

`result_identifier`
:   Um identificador de resultado do InterBase.

`fetch_flag`
:   `fetch_flag` é uma combinação das constantes
    **`IBASE_TEXT`** e **`IBASE_UNIXTIME`**
    através de operação OR binária. Passar **`IBASE_TEXT`** fará com que esta
    função retorne conteúdos BLOB em vez de IDs BLOB. Passar
    **`IBASE_UNIXTIME`** fará com que esta função retorne
    valores de data/horário como timestamp Unix em vez de strings formatadas.

### Valor Retornado

Retorna um array que corresponde à linha buscada, ou **`false`** se não houver
mais linhas. Cada coluna de resultado é armazenada em um deslocamento de array,
começando no deslocamento 0.

### Veja também

- [ibase\_fetch\_assoc()](function.ibase-fetch-assoc.md) - Obtém uma linha de resultado de uma consulta como um array associativo
- [ibase\_fetch\_object()](function.ibase-fetch-object.md) - Obtém um objeto de um banco de dados InterBase

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
