# Fecha uma instrução preparada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-stmt.close.php

---

# mysqli\_stmt::close

# mysqli\_stmt\_close

(PHP 5, PHP 7, PHP 8)

mysqli\_stmt::close -- mysqli\_stmt\_close — Fecha uma instrução preparada

### Descrição

Estilo orientado a objetos

public function **mysqli\_stmt::close**(): [true](language.types.singleton.md)

Estilo procedural

function **mysqli\_stmt\_close**([mysqli\_stmt](class.mysqli-stmt.md) `$statement`): [true](language.types.singleton.md)

Fecha uma instrução preparada. **mysqli\_stmt\_close()** também
desaloca da memória o manipulador da instrução. Se a instrução atual tem resultados
pendentes ou não lidos, esta função as cancela de forma que a próxima consulta possa
ser executada.

### Parâmetros

`statement`
:   Somente no estilo procedural: Um objeto [mysqli\_stmt](class.mysqli-stmt.md)
    retornado por [mysqli\_stmt\_init()](mysqli.stmt-init.md).

### Valor Retornado

Sempre retorna **`true`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.0.0 | Esta função agora sempre retorna **`true`**. Anteriormente retornava **`false`** em caso de falha. |

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
