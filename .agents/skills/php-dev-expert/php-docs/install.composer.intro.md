# Introdução ao Composer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/install.composer.intro.php

---

## Introdução ao Composer

[» Composer](https://getcomposer.org/) é um gerenciador de dependências para o PHP que torna possível
definir pacotes de códigos de terceiros usados por um projeto que pode
então ser facilmente instalado e atualizado. Ele aproveita os
[recursos de carregamento automático de classe](language.oop5.autoload.md)
do PHP, repositórios de pacotes PHP como
[» Packagist](https://packagist.org) e convenções comuns
de layout e codificação de projetos.

Por exemplo, se uma aplicação ou página em PHP precisa
trabalhar com valores UUID,
[» o pacote
`ramsey/uuid` de Ben Ramsey](https://packagist.org/packages/ramsey/uuid), que implementa os
tipos de UUID amplamente conhecidos que são definidos pela
[» RFC 4122](https://datatracker.ietf.org/doc/html/rfc4122), poderia ser usado.

Resumidamente, isto é feito criando um arquivo `composer.json`
no projeto, usando o Composer para instalar a última versão do
pacote, e incluindo o script de autocarregamento do Composer para torná-lo disponível
ao código. A [» documentação de
"Uso Básico" do Composer](https://getcomposer.org/doc/01-basic-usage.md) entra em mais detalhes sobre isso.

**Exemplo #1
`composer.json` que requer um único pacote**

```
{
    "require": {
        "ramsey/uuid": "^4.7"
    }
}
```

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
