# Cria uma estrutura de dados C

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ffi.new.php

---

# FFI::new

(PHP 7 >= 7.4.0, PHP 8)

FFI::new — Cria uma estrutura de dados C

### Descrição

public function **FFI::new**([FFI\CType](class.ffi-ctype.md)|[string](language.types.string.md) `$type`, [bool](language.types.boolean.md) `$owned` = **`true`**, [bool](language.types.boolean.md) `$persistent` = **`false`**): [?](language.types.null.md)[FFI\CData](class.ffi-cdata.md)

Cria uma estrutura de dados nativa do tipo C fornecido.
Qualquer tipo declarado para a instância é permitido.

### Parâmetros

`type`
:   `type` é uma declaração C válida como uma [string](language.types.string.md) ou uma
    instância de [FFI\CType](class.ffi-ctype.md) que já tenha sido criada.

`owned`
:   Define se serão criados dados próprios (ou seja, gerenciados) ou não gerenciados. Os dados gerenciados residem junto
    com o objeto [FFI\CData](class.ffi-cdata.md) retornado e são liberados quando a
    última referência a esse objeto é liberada pela contagem regular de referências do PHP ou pelo GC.
    Dados não gerenciados devem ser liberados chamando [FFI::free()](ffi.free.md),
    quando não forem mais necessários.

`persistent`
:   Define se a estrutura de dados C será alocada permanentemente na memória do sistema (usando
    **malloc()**) ou na memória de requisição do PHP (usando **emalloc()**).

### Valor Retornado

Retorna o objeto [FFI\CData](class.ffi-cdata.md) recém criado
ou **`null`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.3.0 | Chamar **FFI::new()** estaticamente agora foi descontinuado. |

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
