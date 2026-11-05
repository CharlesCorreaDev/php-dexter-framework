# Libera objetos associados a um resultado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.odbc-free-result.php

---

# odbc\_free\_result

(PHP 4, PHP 5, PHP 7, PHP 8)

odbc\_free\_result — Libera objetos associados a um resultado

### Descrição

function **odbc\_free\_result**([Odbc\Result](class.odbc-result.md) `$statement`): [true](language.types.singleton.md)

Libera objetos associados com um resultado.

**odbc\_free\_result()** somente precisa ser chamado se houver
problemas de alto uso de memória na execução do script.
Toda a memória do resultado será automaticamente liberada quando o script é terminado.

### Parâmetros

`statement`
:   O objeto de resultado ODBC.

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | `statement` agora espera uma instância de [Odbc\Result](class.odbc-result.md); anteriormente, esperava um [resource](language.types.resource.md). |

### Notas

> **Nota**:
>
> Se a autoconfirmação estiver desabilitada (veja [odbc\_autocommit()](function.odbc-autocommit.md))
> e for utilizada a função **odbc\_free\_result()** antes de confirmar,
> todas as transações pendentes serão revertidas.

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
