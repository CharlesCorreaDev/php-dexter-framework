# WDDX

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.wddx.php

---

# WDDX

# Introdução

**Aviso**

Esta extensão foi *DESCONTINUADA* e *DESAGREGADA* a partir do PHP 7.4.0.

Essas funções tem o intuito de funcionar com
[» WDDX](http://www.openwddx.org/).

**Aviso**

Não passe entrada não confiável do usuário para a função [wddx\_deserialize()](function.wddx-deserialize.md).
Desserialização pode resultar em código sendo carregado e executado devido à instanciação
de objetos e auto-carregamento, um usuário malicioso pode ser capaz de explorar
isto. Use um formato de intercâmbio de dados padrão e seguro como JSON (via
[json\_decode()](function.json-decode.md) e [json\_encode()](function.json-encode.md)) se
for necessário passar dados serializados ao usuário.

- [Instalação/Configuração](wddx.setup.md)
  - [Dependências](wddx.requirements.md)
  - [Instalação](wddx.installation.md)
  - [Tipos de Recurso](wddx.resources.md)
- [Examples](wddx.examples.md)
  - [Exemplos de wddx](wddx.examples-serialize.md)
- [Funções da WDDX](ref.wddx.md)
  - [wddx\_add\_vars](function.wddx-add-vars.md) — Adiciona variáveis a um pacote WDDX com o IP especificado
  - [wddx\_deserialize](function.wddx-deserialize.md) — Desserializa um pacote WDDX
  - [wddx\_packet\_end](function.wddx-packet-end.md) — Finaliza um pacote WDDX com o ID especificado
  - [wddx\_packet\_start](function.wddx-packet-start.md) — Inicializa um novo pacote WDDX com uma estrutura dentro dele
  - [wddx\_serialize\_value](function.wddx-serialize-value.md) — Serializa um único valor em um pacote WDDX
  - [wddx\_serialize\_vars](function.wddx-serialize-vars.md) — Serializa variáveis em um pacote WDDX

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
