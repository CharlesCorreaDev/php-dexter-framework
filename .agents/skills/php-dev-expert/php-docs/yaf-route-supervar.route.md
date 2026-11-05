# Encaminha uma requisição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/yaf-route-supervar.route.php

---

# Yaf\_Route\_Supervar::route

(Yaf >=1.0.0)

Yaf\_Route\_Supervar::route — Encaminha uma requisição

### Descrição

public function **Yaf\_Route\_Supervar::route**([Yaf\_Request\_Abstract](class.yaf-request-abstract.md) `$request`): [bool](language.types.boolean.md)

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`request`

### Valor Retornado

Se houver uma chave (que foi definida em
[Yaf\_Route\_Supervar::\_\_construct()](yaf-route-supervar.construct.md)) na variável $\_GET, retorna **`true`**.
Caso contrário, retorna **`false`**.

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
