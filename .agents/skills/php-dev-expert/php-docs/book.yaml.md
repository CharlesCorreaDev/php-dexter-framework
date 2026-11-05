# Serialização de dados YAML

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.yaml.php

---

# Serialização de dados YAML

# Introdução

Esta extensão implementa o padrão de serialização de dados
[» YAML Ain't Markup Language (YAML)](https://www.yaml.org/). Análise e
emissão são gerenciadas pela [» biblioteca
LibYAML](https://pyyaml.org/wiki/LibYAML).

- [Instalação/Configuração](yaml.setup.md)
  - [Dependências](yaml.requirements.md)
  - [Instalação](yaml.installation.md)
  - [Configurações de Execução](yaml.configuration.md)
- [Constantes predefinidas](yaml.constants.md)
- [Examples](yaml.examples.md)
- [Funções de retorno](yaml.callbacks.md)
  - [Funções de retorno de análise](yaml.callbacks.parse.md)
  - [Funções de retorno de emissão](yaml.callbacks.emit.md)
- [Funções de Yaml](ref.yaml.md)
  - [yaml\_emit](function.yaml-emit.md) — Retorna a representação YAML de um valor
  - [yaml\_emit\_file](function.yaml-emit-file.md) — Envia a representação YAML de um valor para um arquivo
  - [yaml\_parse](function.yaml-parse.md) — Analisa um fluxo YAML
  - [yaml\_parse\_file](function.yaml-parse-file.md) — Analisa um fluxo YAML de um arquivo
  - [yaml\_parse\_url](function.yaml-parse-url.md) — Analisa um fluxo Yaml de um URL

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
