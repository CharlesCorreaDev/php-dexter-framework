# Yaconf

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.yaconf.php

---

# Yaconf

# Introdução

`Yet Another Configurations Container`
(Yaconf) é um contêiner de configurações
que analisa arquivos `INI` e armazena os resultados
no PHP quando ele é iniciado. O resultado é mantido em todo
o ciclo de vida do PHP.

Yaconf armazena todas as configurações como
strings internalizadas ou como arrays imutáveis, o que significa que elas não
sofrem operação de contagem de referência "refcount". Sendo assim, a recuperaração de configurações
usando Yaconf, é considerada muito rápida, sem cópias de dados.

O Yaconf suporta seções e herança
de seções em arquivos `INI`. Se o PHP tiver sido construído sem ZTS,
o Yaconf também suporta recarregamento automáticos após alterações nos
arquivos `INI`.

O Yaconf requer PHP 7.0 ou superior.

**Exemplo #1 Exemplo de INI**

```
;chave-valor simples
chave=valor

;Hash
hash.a=valor

;Array
arr.0=valor
;ou
arr[]=valor

;Constante PHP
versao=PHP_VERSION

;Variável de ambiente
var_amb=${PATH}
```

**Exemplo #2 Exemplo de seções INI**

```
[SecaoA]
chave=valor
hash.a=valor

;SecaoB herda SecaoA
[SecaoB:SecaoA]
chave=novo_valor          ;substitui a configuração "chave" na SecaoA
```

- [Instalação/Configuração](yaconf.setup.md)
  - [Dependências](yaconf.requirements.md)
  - [Instalação](yaconf.installation.md)
  - [Configurações de Execução](yaconf.configuration.md)
  - [Tipos de Recurso](yaconf.resources.md)
- [Yaconf](class.yaconf.md) — A classe Yaconf
  - [Yaconf::\_\_debug\_info](yaconf.debug-info.md) — Inspect how a configuration value is stored
  - [Yaconf::get](yaconf.get.md) — Recupera um item
  - [Yaconf::has](yaconf.has.md) — Determina se um item existe

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
