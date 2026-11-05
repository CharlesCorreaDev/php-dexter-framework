# Desserializa um pacote WDDX

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.wddx-deserialize.php

---

# wddx\_deserialize

(PHP 4, PHP 5, PHP 7)

wddx\_deserialize — Desserializa um pacote WDDX

**Aviso**

Esta função foi
*REMOVIDA* a partir do PHP 7.4.0.

### Descrição

function **wddx\_deserialize**([string](language.types.string.md) `$packet`): [mixed](language.types.mixed.md)

Desserializa um `packet` WDDX.

**Aviso**

Não passe informações de usuários não confiáveis para **wddx\_deserialize()**.
A desserialização pode resultar no carregamento e execução do código devido à instanciação
e carregamento automático do objeto, e um usuário mal-intencionado pode explorar
isso. Use um formato de intercâmbio de dados padrão e seguro, como JSON (através de
[json\_decode()](function.json-decode.md) e [json\_encode()](function.json-encode.md)) se
você precisar passar dados serializados para o usuário.

### Parâmetros

`packet`
:   Um pacote WDDX, como uma string ou fluxo.

### Valor Retornado

Retorna o valor desserializado que pode ser uma string, um número ou um
array. Observe que as estruturas são desserializadas em arrays associativos.

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
