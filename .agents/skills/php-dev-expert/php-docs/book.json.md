# Notação de Objetos do JavaScript

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.json.php

---

# Notação de Objetos do JavaScript

# Introdução

Esta extensão implementa o formato de intercâmbio de dados
[» Notação de Objetos do JavaScript (JSON)](https://www.json.org/).
O analisador foi escrito especificamente
para o PHP e licenciado sob a
licença do PHP.

> **Nota**:
>
> O PHP implementa um superconjunto de JSON conforme especificado na
> [» RFC 7159](https://datatracker.ietf.org/doc/html/rfc7159) original.

- [Instalação/Configuração](json.setup.md)
  - [Instalação](json.installation.md)
- [Constantes predefinidas](json.constants.md)
- [JsonException](class.jsonexception.md) — A classe JsonException
- [JsonSerializable](class.jsonserializable.md) — A interface JsonSerializable
  - [JsonSerializable::jsonSerialize](jsonserializable.jsonserialize.md) — Especifica os dados que devem ser serializados para JSON
- [Funções da JSON](ref.json.md)
  - [json\_decode](function.json-decode.md) — Decodifica uma string JSON
  - [json\_encode](function.json-encode.md) — Retorna a representação JSON de um valor
  - [json\_last\_error](function.json-last-error.md) — Retorna o último erro ocorrido
  - [json\_last\_error\_msg](function.json-last-error-msg.md) — Retorna a string de erro da última chamada a json\_validate(), json\_encode() ou json\_decode()
  - [json\_validate](function.json-validate.md) — Verifica se uma string contém JSON válido

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
