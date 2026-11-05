# Obtém o nome do arquivo do ponto de execução atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/reflectionfiber.getexecutingfile.php

---

# ReflectionFiber::getExecutingFile

(PHP 8 >= 8.1.0)

ReflectionFiber::getExecutingFile — Obtém o nome do arquivo do ponto de execução atual

### Descrição

public function **ReflectionFiber::getExecutingFile**(): [?](language.types.null.md)[string](language.types.string.md)

Retorna o caminho completo e o nome do arquivo do ponto de execução atual no [Fiber](class.fiber.md) refletido.
Se o Fiber não tiver sido iniciado ou tiver terminado, um [Error](class.error.md) será lançado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O caminho completo e o nome do arquivo do Fiber refletido.
Se o Fiber refletido for usado fora de uma função definida pelo usuário, **`null`** é retornado.

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
