# Busca o próximo aviso

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli-warning.next.php

---

# mysqli\_warning::next

(PHP 5, PHP 7, PHP 8)

mysqli\_warning::next — Busca o próximo aviso

### Descrição

public function **mysqli\_warning::next**(): [bool](language.types.boolean.md)

Altere as informações de aviso para o próximo aviso, se possível.

Depois que o aviso for definido para o próximo aviso, novos valores de propriedades `message`,
`sqlstate` e `errno` de [mysqli\_warning](class.mysqli-warning.md)
estarão disponíveis.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** se o próximo aviso foi obtido com sucesso.
Se não houver mais avisos, retornará **`false`**

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
