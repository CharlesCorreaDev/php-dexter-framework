# Redefine uma instrução preparada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-stmt.reset.php

---

# mysqli\_stmt::reset

# mysqli\_stmt\_reset

(PHP 5, PHP 7, PHP 8)

mysqli\_stmt::reset -- mysqli\_stmt\_reset — Redefine uma instrução preparada

### Descrição

Estilo orientado a objetos

public function **mysqli\_stmt::reset**(): [bool](language.types.boolean.md)

Estilo procedural

function **mysqli\_stmt\_reset**([mysqli\_stmt](class.mysqli-stmt.md) `$statement`): [bool](language.types.boolean.md)

Redefine uma instrução preparada no cliente e no servidor para o estado pós-preparação.

A função redefine a instrução no servidor, os dados enviados por [mysqli\_stmt\_send\_long\_data()](mysqli-stmt.send-long-data.md),
os resultados sem buffer e os erros atuais. Ela não limpa vinculações de variáveis ou resultados armazenados.
Resultados armazenados serão limpos ao executar a instrução preparada (ou ao fechá-la).

Para preparar uma instrução com outra consulta, utilize a função
[mysqli\_stmt\_prepare()](mysqli-stmt.prepare.md).

### Parâmetros

`statement`
:   Somente no estilo procedural: Um objeto [mysqli\_stmt](class.mysqli-stmt.md)
    retornado por [mysqli\_stmt\_init()](mysqli.stmt-init.md).

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [mysqli\_prepare()](mysqli.prepare.md) - Prepara uma instrução SQL para execução

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
