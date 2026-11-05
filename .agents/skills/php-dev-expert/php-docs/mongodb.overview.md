# Visão geral da arquitetura

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb.overview.php

---

## Visão geral da arquitetura

Este artigo explica como todos os diferentes componentes do driver PHP se
encaixam, desde as bibliotecas básicas do sistema, passando pela extensão, até as bibliotecas
PHP superiores.

![
     Diagrama de arquitetura do driver MongoDB PHP. O nível mais baixo do driver são
     nossas bibliotecas de sistema: libmongoc, libbson e libmongocrypt. O nível
     intermediário é a extensão MongoDB PHP. O nível superior é a área de usuário do PHP e
     inclui a biblioteca MongoDB PHP e pacotes de nível superior, como
     integrações de estrutura e aplicações.
    ](images/f3bc48edf40d5e3e09a166c7fadc7efb-driver_arch.svg)

No topo desta pilha está uma
[» biblioteca PHP](https://github.com/mongodb/mongo-php-library),
que é distribuída como um
[» Pacote Composer](https://packagist.org/packages/mongodb/mongodb).
Esta biblioteca fornece uma API consistente com outros
[» drivers](https://www.mongodb.com/docs/drivers/) do MongoDB
e implementa várias
[»  especificações](https://github.com/mongodb/specifications) de drivers cruzados.
Embora a extensão possa ser usada diretamente, a biblioteca tem sobrecarga mínima e
deve ser uma dependência comum para a maioria das aplicações criadas com MongoDB.

Abaixo dessa biblioteca está uma extensão PHP, que é distribuída através de
[» PECL](https://pecl.php.net/package/mongodb).
A extensão forma a ligação entre o PHP e nossas bibliotecas de sistema
([» libmongoc](https://github.com/mongodb/mongo-c-driver),
[» libbson](https://github.com/mongodb/mongo-c-driver/tree/master/src/libbson) e
[» libmongocrypt](https://github.com/mongodb/libmongocrypt)).
Sua API pública fornece apenas as funcionalidades mais essenciais:

- Gerenciamento de conexões
- Codificação e decodificação BSON
- Serialização de documentos de objetos (para suportar bibliotecas ODM)
- Executar comandos, consultas e operações de gravação
- Manipulação de cursores para resultados de comandos e consultas

**Código-fonte do driver e projetos JIRA**

| Projeto | GitHub | JIRA |
| --- | --- | --- |
| Biblioteca PHP | [» mongodb/mongo-php-library](https://github.com/mongodb/mongo-php-library) | [» PHPLIB](https://jira.mongodb.org/browse/PHPLIB) |
| Extensão PHP | [» mongodb/mongo-php-driver](https://github.com/mongodb/mongo-php-driver) | [» PHPC](https://jira.mongodb.org/browse/PHPC) |

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
