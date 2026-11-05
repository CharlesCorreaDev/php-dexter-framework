# Dependências

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mongodb.requirements.php

---

## Dependências

A partir da versão 1.21.0, a extensão requer PHP 8.1 ou superior. Versões
anteriores da extensão permitem compatibilidade com versões mais antigas do PHP.

A extensão requer
[» libbson](https://github.com/mongodb/mongo-c-driver/tree/master/src/libbson) e
[» libmongoc](https://github.com/mongodb/mongo-c-driver) e usará
versões agrupadas de ambas as bibliotecas por padrão. Bibliotecas de sistema também podem ser
usadas, conforme discutido na
documentação de
[instalação manual](mongodb.installation.md#mongodb.installation.manual).

A extensão, via libmongoc, depende opcionalmente de uma biblioteca TLS (por exemplo,
OpenSSL) e irá utilizá-la se disponível. Se o processo de construção não conseguir encontrar uma
biblioteca TLS, os usuários devem verificar se o pacote de desenvolvimento apropriado
(por exemplo, `libssl-dev`) e
[» pkg-config](https://en.wikipedia.org/wiki/Pkg-config) estão ambos
instalados. O processo para detectar e configurar bibliotecas TLS é
discutido com mais detalhes na
documentação da
[instalação manual](mongodb.installation.md#mongodb.installation.manual).

[» Cyrus SASL](https://cyrusimap.org/) é uma dependência opcional para
suportar a autenticação Kerberos e será usada se disponível.

> **Nota**:
>
> Devido a possíveis problemas na representação de números inteiros de 64 bits em plataformas de 32 bits,
> os usuários são aconselhados a usar ambientes de 64 bits. Ao usar uma plataforma de 32 bits,
> esteja ciente de que qualquer inteiro de 64 bits lido do banco de dados será retornado como
> uma instância [MongoDB\BSON\Int64](class.mongodb-bson-int64.md) em vez de um tipo
> inteiro PHP.

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
