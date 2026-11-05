# Filtragem de dados

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.filter.php

---

# Filtragem de dados

# Introdução

Esta extensão fornece filtros que podem ser usados para validar ou sanitizar dados.
Isto é especialmente útil quando a fonte contém dados desconhecidos (ou externos),
como dados enviados pelo usuário.
Por exemplo, esses dados podem vir de um formulário HTML.

Há dois tipos principais de filtragem:
*validação* e *higienização*.

Um filtro de validação é utilizado para verificar se os dados cumprem certos critérios.
Estes filtros são identificados pelas
constantes
**`FILTER_VALIDATE_*`**.
Por exemplo, a constante **`FILTER_VALIDATE_EMAIL`**
pode ser usada para determinar se o dado é um endereço de e-mail válido.
Entretanto, ele nunca alterará os dados de entrada.

A sanitização, por outro lado, "limpará" os dados,
portanto pode alterar os dados de entrada adicionando ou removendo caracteres.
Estes filtros são identificados pelas
constantes
**`FILTER_SANITIZE_*`**.
Por exemplo, o filtro **`FILTER_SANITIZE_EMAIL`**
removerá caracteres que são inadequados para um endereço de e-mail.
Entretanto, os dados sanitizados não são validados para verificar se o endereço
é válido.

A maioria dos filtros suporta *sinalizadores* opcionais que podem ajustar
o comportamento do filtro.
Estes sinalizadores são identificados pelas
constantes
**`FILTER_FLAG_*`**.
Por exemplo, usar **`FILTER_FLAG_PATH_REQUIRED`** com um filtro de validação
**`FILTER_VALIDATE_URL`** irá
requerer que um URL tenha um caminho
(por exemplo, `/foo` em `https://example.org/foo`).

- [Instalação/Configuração](filter.setup.md)
  - [Instalação](filter.installation.md)
  - [Configurações de Execução](filter.configuration.md)
- [Constantes predefinidas](filter.constants.md)
- [Examples](filter.examples.md)
  - [Validação](filter.examples.validation.md)
  - [Sanitização](filter.examples.sanitization.md)
- [Funções da Filter](ref.filter.md)
  - [filter\_has\_var](function.filter-has-var.md) — Verifica se uma variável de um tipo especificado existe
  - [filter\_id](function.filter-id.md) — Retorna o ID de filtro pertencente a um filtro nomeado
  - [filter\_input](function.filter-input.md) — Obtém uma variável externa específica por nome e filtra-a opcionalmente
  - [filter\_input\_array](function.filter-input-array.md) — Obtem variáveis externas e opcionalmente as filtra
  - [filter\_list](function.filter-list.md) — Retorna a lista de todos os filtros suportados
  - [filter\_var](function.filter-var.md) — Filtra uma variável com um filtro especificado
  - [filter\_var\_array](function.filter-var-array.md) — Obtêm e opcionalmente filtra múltiplas variáveis
- [Filter\FilterException](class.filter-filterexception.md) — A classe Filter\FilterException
- [Filter\FilterFailedException](class.filter-filterfailedexception.md) — A classe Filter\FilterFailedException

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
