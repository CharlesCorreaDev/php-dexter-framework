# The HashContext class

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.hashcontext.php

---

# The HashContext class

(PHP 7 >= 7.2.0, PHP 8)

## Introdução

## Resumo da classe

final
class ****HashContext****
{

/\* Métodos \*/

private function [\_\_construct](hashcontext.construct.md)()

public function [\_\_debugInfo](hashcontext.debuginfo.md)(): [array](language.types.array.md)

public function [\_\_serialize](hashcontext.serialize.md)(): [array](language.types.array.md)

public function [\_\_unserialize](hashcontext.unserialize.md)([array](language.types.array.md) `$data`): [void](language.types.void.md)

}

## Índice

- [HashContext::\_\_construct](hashcontext.construct.md) — Construtor privado para impedir instanciação direta
- [HashContext::\_\_debugInfo](hashcontext.debuginfo.md) — Retorna informação de depuração sobre o contexto de hash
- [HashContext::\_\_serialize](hashcontext.serialize.md) — Serializa o objeto HashContext
- [HashContext::\_\_unserialize](hashcontext.unserialize.md) — Desserializa o parâmetro data em um objeto HashContext

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
