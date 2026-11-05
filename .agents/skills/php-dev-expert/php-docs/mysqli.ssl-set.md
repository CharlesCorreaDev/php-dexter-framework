# Usado para estabelecer conexões seguras usando SSL

> **Fonte / Source:** https://www.php.net/manual/pt_BR/mysqli.ssl-set.php

---

# mysqli::ssl\_set

# mysqli\_ssl\_set

(PHP 5, PHP 7, PHP 8)

mysqli::ssl\_set -- mysqli\_ssl\_set — Usado para estabelecer conexões seguras usando SSL

### Descrição

Estilo orientado a objetos

public function **mysqli::ssl\_set**(  
    [?](language.types.null.md)[string](language.types.string.md) `$key`,  
    [?](language.types.null.md)[string](language.types.string.md) `$certificate`,  
    [?](language.types.null.md)[string](language.types.string.md) `$ca_certificate`,  
    [?](language.types.null.md)[string](language.types.string.md) `$ca_path`,  
    [?](language.types.null.md)[string](language.types.string.md) `$cipher_algos`  
): [true](language.types.singleton.md)

Estilo procedural

function **mysqli\_ssl\_set**(  
    [mysqli](class.mysqli.md) `$mysql`,  
    [?](language.types.null.md)[string](language.types.string.md) `$key`,  
    [?](language.types.null.md)[string](language.types.string.md) `$certificate`,  
    [?](language.types.null.md)[string](language.types.string.md) `$ca_certificate`,  
    [?](language.types.null.md)[string](language.types.string.md) `$ca_path`,  
    [?](language.types.null.md)[string](language.types.string.md) `$cipher_algos`  
): [true](language.types.singleton.md)

Usado para estabelecer conexões seguras usando SSL. Deve ser chamado
antes de [mysqli\_real\_connect()](mysqli.real-connect.md). Esta função não faz nada,
a menos que o suporte OpenSSL esteja ativado.

### Parâmetros

`mysql`
:   Somente no estilo procedural: Um objeto [mysqli](class.mysqli.md)
    retornado por [mysqli\_connect()](function.mysqli-connect.md) ou [mysqli\_init()](mysqli.init.md)

`key`
:   O nome do caminho para o arquivo de chave.

`certificate`
:   O nome do caminho para o arquivo de certificado.

`ca_certificate`
:   O nome do caminho para o arquivo de autoridade de certificação.

`ca_path`
:   O nome do caminho para um diretório que contém certificados SSL CA confiáveis
    no formato PEM.

`cipher_algos`
:   Uma lista de cifras permitidas a serem usadas para criptografia SSL.

### Valor Retornado

Sempre retorna **`true`**. Se a configuração do SSL
estiver incorreta, [mysqli\_real\_connect()](mysqli.real-connect.md) retornará um erro
quando você tentar se conectar.

### Veja também

- [mysqli\_options()](mysqli.options.md) - Define opções
- [mysqli\_real\_connect()](mysqli.real-connect.md) - Abre uma conexão a um servidor MySQL

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
