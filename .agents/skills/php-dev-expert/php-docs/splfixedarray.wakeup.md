# Reinicializa o array após ser desserializado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splfixedarray.wakeup.php

---

# SplFixedArray::\_\_wakeup

(PHP 5 >= 5.5.0, PHP 7, PHP 8)

SplFixedArray::\_\_wakeup — Reinicializa o array após ser desserializado

**Aviso**

Esta função foi
*DESCONTINUADA* a partir do PHP 8.4.0. O uso desta função
é fortemente desencorajado.

### Descrição

#[[\Deprecated](class.deprecated.md)]  
public function **SplFixedArray::\_\_wakeup**(): [void](language.types.void.md)

Reinicializa o array após ser desserializado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.4.0 | Este método foi descontinuado, use [SplFixedArray::\_\_unserialize()](splfixedarray.unserialize.md) em seu lugar. |

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
