# Obtém uma linha de resultado de uma consulta como um array associativo

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.ibase-fetch-assoc.php

---

# ibase\_fetch\_assoc

(PHP 5, PHP 7 < 7.4.0)

ibase\_fetch\_assoc — Obtém uma linha de resultado de uma consulta como um array associativo

### Descrição

function **ibase\_fetch\_assoc**([resource](language.types.resource.md) `$result`, [int](language.types.integer.md) `$fetch_flag` = 0): [array](language.types.array.md)

Obtém uma linha de resultado de uma consulta como um array associativo.

**ibase\_fetch\_assoc()** busca uma linha de dados do
resultado do parâmetro `result`. Se duas ou mais colunas do resultado
tiverem os mesmos nomes de campo, a última coluna terá precedência. Para
acessar as outras colunas com o mesmo nome, é necessário acessar
o resultado com índices numéricos usando
[ibase\_fetch\_row()](function.ibase-fetch-row.md) ou usar nomes de apelidos na consulta.

### Parâmetros

`result`
:   O identificador de resultado.

`fetch_flag`
:   `fetch_flag` é uma combinação das constantes
    **`IBASE_TEXT`** e **`IBASE_UNIXTIME`**
    através de operação OR binária. Passar **`IBASE_TEXT`** fará com que esta
    função retorne conteúdos BLOB em vez de IDs BLOB. Passar
    **`IBASE_UNIXTIME`** fará com que esta função retorne
    valores de data/horário como timestamp Unix em vez de strings formatadas.

### Valor Retornado

Retorna um array associativo que corresponde à linha buscada.
Chamadas subsequentes retornarão a próxima linha no conjunto de resultados, ou **`false`** se
não houver mais linhas.

### Veja também

- [ibase\_fetch\_row()](function.ibase-fetch-row.md) - Busca uma linha de um banco de dados InterBase
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
