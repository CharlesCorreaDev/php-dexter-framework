# Emite falha no SoapServer indicando um erro

> **Fonte / Source:** https://www.php.net/manual/pt_BR/soapserver.fault.php

---

# SoapServer::fault

(PHP 5, PHP 7, PHP 8)

SoapServer::fault — Emite falha no SoapServer indicando um erro

### Descrição

public function **SoapServer::fault**(  
    [string](language.types.string.md) `$code`,  
    [string](language.types.string.md) `$string`,  
    [string](language.types.string.md) `$actor` = "",  
    [mixed](language.types.mixed.md) `$details` = **`null`**,  
    [string](language.types.string.md) `$name` = "",  
    [string](language.types.string.md) `$lang` = ""  
): [void](language.types.void.md)

Envia uma resposta ao cliente da solicitação atual indicando um erro.

> **Nota**:
>
> Isso só pode ser chamado ao lidar com uma solicitação.

### Parâmetros

`code`
:   O código de erro a ser retornado

`string`
:   Uma breve descrição do erro

`actor`
:   Uma string que identifica o ator que causou a falha.

`details`
:   Mais detalhes da falha

`name`
:   O nome da falha. Isso pode ser usado para selecionar um nome de um arquivo WSDL.

`lang`
:   A linguagem humana na qual o SoapFault está escrita. Isso só é usado para a versão 1.2 do SOAP.

### Valor Retornado

Nenhum valor é retornado.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | O parâmetro opcional `lang` foi adicionado para estar em conformidade com a especificação SOAP 1.2. |

### Veja também

- [SoapFault::\_\_construct()](soapfault.construct.md) - Construtor SoapFault

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
